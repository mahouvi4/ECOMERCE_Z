<?php

namespace App\Http\Controllers;

use App\Models\commande;
use App\Models\pagamento;
use App\Models\list_commande;
use App\Models\panier;
use App\Models\produit;
use App\Models\User;
use Illuminate\Http\Request;
use PagSeguro\Configuration\Configure;
class commandecontroller extends Controller
{

private $_configs;
public function __construct()

  { 
    $this->_configs = new Configure();
    $this->_configs->setCharset("UTF-8");
    $this->_configs->setAccountCredentials(env("PAGSEGURO_EMAIL"),env("PAGSEGURO_TOKEN"));
    $this->_configs->setEnvironment(env("PAGSEGURO_AMBIENTE"));
    $this->_configs->setLog(true, storage_path('logs/pagseguro_'. date('Ymd'). '.log'));
       
  }

  public function getCredential(){
    return $this->_configs->getAccountCredentials();
  }



    public function add_commande(Request $request){
          if(session('info_user')){
            $com = new commande();
            $com->id_user = session('info_user')[0]->id;
            $com->firstname = $request->firstname;
            $com->name = $request->name;
            $com->email = $request->email;
            $com->cpf = $request->cpf;
            $com->country = $request->country;
            $com->state = $request->state;
            $com->city = $request->city;
            $com->dist = $request->dist;
            $com->street = $request->street;
            $com-> n_apto = $request-> n_apto;
            $com->zipcode = $request->zipcode;
            $com->ddd = $request->ddd;
            $com->tel = $request->tel;
            $com->cod_commande = time().'EX'.rand(1111,9999);
            $com->adress_commande = $request->adress_commande;

              $total_commande = 0;

                 $panier_t = panier::where('id_user',session('info_user')[0]->id)->get();
                    foreach($panier_t as $item){
                    
                        $total_commande += $item->qt*$item->produit->prix_pro;
                                      
                 }

             $com->total_commande = $total_commande;
             $com->save();

                 $panier_list = panier::where('id_user',session('info_user')[0]->id)->get();
                 foreach($panier_list as $item){
                 
                    $list_produit = new list_commande();
                    $list_produit->id_produit = $item->id_produit;
                    $list_produit->id_user = session('info_user')[0]->id;
                    $list_produit->id_commande = $com->id;
                    $list_produit->qt_list = $item->qt;
                    $list_produit->total_list = $com->total_commande;

                    //qt
                    $list_produit->save();

                 }

              if(session('info_user')[0]->firstname==NULL){
                $updat_user = User::find(session('info_user')[0]->id);
                $updat_user->firstname = $request->firstname;
                $updat_user->name = $request->name;
                $updat_user->email = $request->email;
                $updat_user->cpf = $request->cpf;
                $updat_user->country = $request->country;
                $updat_user->state = $request->state;
                $updat_user->city = $request->city;
                $updat_user->dist = $request->dist;
                $updat_user->street = $request->street;
                $updat_user-> n_apto = $request-> n_apto;
                $updat_user->zipcode = $request->zipcode;
                $updat_user->ddd = $request->ddd;
                $updat_user->tel = $request->tel;
                $updat_user->update();
              }   

              
               $panier_delete = panier::where('id_user',session('info_user')[0]->id);
               $panier_delete->delete();


              /* $panier_stock = panier::where('id_user',session('info_user')[0]->id)->get();
               foreach($panier_stock as $item){
                $proto = produit::find($item->id_produit);
                $proto->stock-$item->qt;
               } */

               return response()->json(['status'=>200,'message'=>'émarché!!']);
          }
    }

   
       public function  list_commande_uniq(){
         if(session('info_user')){
            $commande_unique = commande::where('id_user',session('info_user')[0]->id)->lazyByIdDesc();
            return view('tempo.list_com_uniq',['commande_unique'=>$commande_unique]);
         }
       }

       public function all_commande(){
        if(session('info_user')){
          $all_com = commande::where('id_user',session('info_user')[0]->id)->lazyByIdDesc();
        return view('tempo.all_commande',['all_com'=>$all_com ]);
        }
       }
    
       
       //PAGESEGURO
       public function pagar(Request $request,$id){
        if(session('info_user')){
          
      
        
         $sessionCode= \PagSeguro\Services\Session::create(
          $this->getCredential()
        );
         
        $sessionID = $sessionCode->getResult();
         

         $xx = list_commande::where('id_commande',$id)->get();
         
         $ox = commande::where('id',$id)->first();
         return view('payment.credito',['xx'=>$xx,'ox'=>$ox, 'sessionID'=>$sessionID]);
        }
        }

        // ADD8PAGAR SUCCESS

        public function add_pagar(Request $request){
         $total_final = 0;
   
          $credCard = new \PagSeguro\Domains\Requests\DirectPayment\CreditCard();
      
          $result = list_commande::where('id_commande',$request->id_list_com)->get();
          $credCard->setReference($request->id_list_com);
         //dd($request->id_list_com);
          $credCard->setCurrency("BRL");
           foreach($result  as $item){
              $credCard->addItems()->withParameters(
                 $item->id_produit,
                 $item->produit->nom_pro,
                  $item->qt_list,
                  number_format($item->produit->prix_pro, 2,".","")
                 );
          }
      
                $info_uz = User::where('id_user',session('info_user')[0]->id);
                $credCard->setSender()->setName(session('info_user')[0]->firstname.' '.session('info_user')[0]->name);
               // $credCard->setSender()->setEmail(session('info_user')[0]->email);
                $credCard->setSender()->setEmail(session('info_user')[0]->name. "@sandbox.pagseguro.com.br");
                $credCard->setSender()->setHash($request->input("hashseller"));
                $credCard->setSender()->setPhone()->withParameters(session('info_user')[0]->ddd, session('info_user')[0]->tel);
                $credCard->setSender()->setDocument()->withParameters("CPF",session('info_user')[0]->cpf);
      
                //send to pagseguro
      
                $credCard->setShipping()->setAddress()->withParameters(
           
                  
                  session('info_user')[0]->city,
                  session('info_user')[0]->n_apto,
                  session('info_user')[0]->street,
                  session('info_user')[0]->zipcode, 
                   session('info_user')[0]->city,
                   session('info_user')[0]->dist,
                   session('info_user')[0]->country,
                   'xxxxxx',
              
                );
      
                $credCard->setBilling()->setAddress()->withParameters(
           
                  
                  $request->input("city"),
                  $request->input("num_apt"),
                  $request->input("street"),
                  $request->input("codzip"),
                  $request->input("city"),
                  $request->input("district"),
                  $request->input("country"),
                  'xxxxxx',
                 
              
                );

                $credCard->setToken($request->input("cardtoken"));
                $totalparcela = $request->input("totalparcela");
                $totalapagar = $request->input("totalapagar");
                $nparcela = $request->input("nparcela");
                //dd(number_format($totalparcela));


                $credCard->setInstallment()->withParameters($nparcela , number_format($totalparcela, 2,".",""));
                  //data titulo card_bank
                $credCard->setHolder()->setName($request->firstname.' '.$request->nomecartao);
                $credCard->setHolder()->setBirthdate("02/07/1884");
                $credCard->setHolder()->setDocument()->withParameters("CPF", $request->cpf);
                $credCard->setHolder()->setPhone()->withParameters($request->ddd,$request->tel);
      
      
                $credCard->setMode("DEFAULT");
                $result = $credCard->register($this->getCredential());
                //table pagamento
                $pagamento  =  new pagamento();
                $pagamento->firstname = $request->firstname;
                $pagamento->nomecartao = $request->nomecartao;
                $pagamento->email = $request->email;
                $pagamento->cpf = $request->cpf;
                $pagamento->ddd = $request->ddd;
                $pagamento->tel = $request->tel;
                $pagamento->nacimento = $request->nacimento;
                $pagamento->ncredito = $request->numerocartao;
                $pagamento->ncvv = $request->ncvv;
                $pagamento->mesexp = $request->mesexp;
                $pagamento->anoexp = $request->anoexp;
                $pagamento->bandeira = $request->bandeira;
                $pagamento->nparcela = $request->nparcela;
                $pagamento->totalfinal = $request->totalfinal;
                $pagamento->totalparcela = $request->totalparcela;
                $pagamento->totalapagar = $request->totalapagar;
                $pagamento->id_list_com = $request->id_list_com;
                $pagamento->id_user = $request->id_user;
                $pagamento->totalfinaliz = $request->totalfinal;
                $pagamento->save();
              return response()->json(['status'=>200,'message'=>'ok tudo deu certo']);
      
      
      
          
      }    

}



