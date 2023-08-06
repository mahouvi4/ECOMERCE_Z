<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Endereco;
use App\Models\Orderitem;
use App\Models\pagamento;
use App\Models\payement;
use Illuminate\Http\Request;
use App\Services\Clientservice;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use PagSeguro\Configuration\Configure;
use PagSeguro\Services\Session;

class ProductController extends Controller

{
    private  $_configs;
    public function __construct()
    {
       $this->_configs=new Configure();
       $this->_configs->setCharset("UTF-8");
       $this->_configs->setAccountCredentials(env('PAGSEGURO_EMAIL'),env('PAGSEGURO_TOKEN'));
       $this->_configs->setEnvironment(env('PAGSEGURO_AMBIENTE'));
       $this->_configs->setLog(true,storage_path('logs/pagseguro_'.date('Ymd').'.log'));

    
    }

    public function getCredential(){
        return $this->_configs->getAccountCredentials();
    }
    public function category(Request$request){
        $data=[];
        if($request->isMethod("POST")){
            $request->validate([
                'name'=>'required',
                'description'=>'required',
                'ref'=>'required',
                'image'=>'required',
            ]);
            $values=$request->all();
            $category=new Category();
            $category->fill($values);
            if($request->hasFile('image')){
                $image=$request->file('image');
                $image_name=$image->getClientOriginalName();
                $image->move('images/category',$image_name) ;
                $category->image=$image_name; 
                    
         }
            $category->save();
            return back()->with('success','The category has been saved');
        }
        return view('category.create',$data);
    }

    public function product(Request$request){
        $data=[];
        $listacategorie=Category::all();
        $data['list']=$listacategorie;
        if($request->isMethod("POST")){
            $request->validate([
                'name'=>'required',
                'description'=>'required',
                'ref'=>'required',
                'image'=>'required',
                'price'=>'required',
                'quantity'=>'required',
            ]);
            $values=$request->all();
            $product=new Product();
            $product->fill($values);
            if($request->hasFile('image')){
                $image=$request->file('image');
                $image_name=$image->getClientOriginalName();
                $image->move('images/product',$image_name) ;
                $product->image=$image_name; 
                    
         }
            $product->save();
            return back()->with('success','The product has been saved');
        }
        return view('product.create',$data);
    }

    public function list($idcategory=0,Request $request){
        $data=[];
        $listcategory=Category::all();
        $data['listcategory']=$listcategory;
        $query=Product::limit(26);
        if($idcategory!=0){
            $query=Product::where('category_id',$idcategory);
        }
        $listproduct=$query->get();
        $data['listproduct']= $listproduct;
        $data['idcategory']= $idcategory;
        return view('Frontend.filtercategory',$data);
    }
    public function addtocart($idproduct,Request $request){
       if(Auth::check()){
        $product=Product::find($idproduct);
if ($product) {
    $cart=session('cart', []);
    array_push($cart, $product);
    session(['cart'=>$cart]);
    return back();
}
}else{
        return redirect('/login');
    }
    }

    public function showcart(Request $request){
        $data=[];
        $data['cart']=session('cart',[]);
        return view('Frontend.cart',$data);
    }

    public function destroy_item_cart($index ,Request $request){
     $cart=session('cart',[]);
     if(isset($cart[$index])){
        unset($cart[$index]);
     }
     session(['cart'=>$cart]);
     return back();
    }
    public function finalisar(Request $request){
        $data=[];
        return view('compra.pagar',$data);
    }

    public function cadastrar(Request $request){
        $data=[];
        if($request->isMethod("Post")){
            $request->validate(['name'=>'required','email'=>'required','password'=>'required',
            'adresse'=>'required','cep'=>'required','estado'=>'required','cidade'=>'required','numero'=>'required']);
            $values=$request->all();
            $user=new User();
           $user->fill($values);
           $user->password=Hash::make($request->password);
            $user->save();
            $endereco=new Endereco($values);
            $endereco->user_id=$user->id;
            $endereco->save();
            return back()->with('success','user foi cadastrado com successo');
            
        }
        return view('user.create',$data);

    }
    public function pagar(Request $request){
        $data=[];
        $total=0;
        $adresseuser=Endereco::where('user_id',Auth::id())->first();
       if($request->isMethod("POST")){
        $product=session('cart',[]);
        $today=Date('y-m-d H:i');
        $order=new Order();
        $order->dateorder=$today;
        $order->status="PEN";
        $order->user_id=Auth::id();
        $order->save();
        foreach($product as $p){
          $itemorder=new Orderitem();
          $itemorder->order_id=$order->id;
          $itemorder->quantity=1;
          $itemorder->price=$p->price;
          $itemorder->product_id=$p->id;
          $itemorder->save();
       }

          $credcard= new \PagSeguro\Domains\Requests\DirectPayment\CreditCard();
          $credcard->setReference("PEN_".$order->id);
          $credcard->setCurrency("BRL");
          foreach($product as $pi){
          $credcard->addItems()->withParameters(
            $pi->id,
            $pi->price,
            1,
            number_format($pi->price,2,".","")

          );
       }
       $userp=Auth::user();
       $credcard->setSender()->setName($userp->name."".$userp->name);
       $credcard->setSender()->setEmail($userp->cpf."@sandbox.pagseguro.com.br");
       $credcard->setSender()->setHash($request->input("hashseller"));
       $credcard->setSender()->setPhone()->withParameters(84,32382900);
       $credcard->setSender()->setDocument()->withParameters('CPF',$userp->cpf);

       $credcard->setShipping()->setAddress()->withParameters(
        $adresseuser->adresse,
        $adresseuser->numero,
        'RN',
        $adresseuser->cep,
        $adresseuser->cidade,
      'FFFFF',
        'BRASIL',
        $adresseuser->complement,
       
        
       
       );
       $credcard->setBilling()->setAddress()->withParameters(
        $adresseuser->adresse,
        $adresseuser->numero,
        'RN',
        $adresseuser->cep,
        $adresseuser->cidade,
        'FFFFF',
        'BRASIL',
        $adresseuser->complement,
       
       );
      $credcard->setToken($request->input("cardtoken"));
      $nparcela=$request->input("nparcela");
      $totalparcela=$request->input("totalparcela");
      $credcard->setInstallment()->withParameters($nparcela,number_format($totalparcela,2,".",""));

      $credcard->setHolder()->setName($userp->name."".$userp->name);
      $credcard->setHolder()->setDocument()->withParameters('CPF',$userp->cpf);
      $credcard->setHolder()->setBirthdate("01/08/1984");
      $credcard->setHolder()->setPhone()->withParameters(84,32382900);

      $credcard->setMode("DEFAULT");
      $credcard->register($this->getCredential());
      $pagamentoregister=new payement();
      $valuesp=$request->all();
     $pagamentoregister->fill($valuesp);
     $pagamentoregister->user_id=Auth::id();
     $pagamentoregister->order_id=$order->id;
     $pagamentoregister->save();
       $request->session()->forget('cart');
    
      return response()->json(['status'=>200,'message'=>"Le paiement a ete effectue avec success"]);
      }
      $sessioncode=\PagSeguro\Services\Session::create(
        $this->getCredential(),
      );
      $cart=session('cart',[]);
      foreach($cart as $p){
        $total+=$p->price;
      }
      $idsession=$sessioncode->getResult();
      $data['ambroise']=$idsession;
      $data['total']=$total;
     return view('compra.pagar',$data);

    }

    public function login(Request $request){
    $data=[];
        if($request->isMethod("post")){
            $request->validate(['cpf'=>'required','password'=>'required']);
            $cpf=$request->input('cpf');
            $password=$request->input('password');
            $credentials=['cpf'=>$cpf,'password'=>$password];
            if(Auth::attempt($credentials)){
                return redirect()->route('list');
            }else{
                return back()->with('danger','CPF ou Senha ivalido');
            }

        }
        return view('user.login',$data);

    }

    public function historico(Request $request){
        $user=Auth::id();
        $data=[];
        if($user){
            $lista=Order::where('user_id',$user)->get();
            $data['lista']=$lista;
            return view('compra.historico',$data);
         
        }else{
            return redirect()->route('login');

        }
    }

    public function detailsorder(Request $request){
        $data=[];
        $idorder=$request->idorder;
        $details=Orderitem::join("products", "products.id", "=", "orderitems.product_id")
                            ->where("order_id",$idorder)
                            ->get(["products.*","orderitems.price as valor",'orderitems.quantity as qt']);
                            $data['details']=$details;
    return  view('compra.details',$data);
    }
}
      //  PagSeguroDirectPayment.setSessionId('{{ sessionID }}');
