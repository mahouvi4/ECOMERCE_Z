<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagamentocontroller extends Controller
{
public function add_pagar(Request $request){
   
    $credCard = new \Pagseguro\Domains\Requests\DirectPayment\CreditCard();

    
    
    $credCard->setReference($request->id_list_com);
    $credCard->setCurrency($request->currency);
    $panier = panier::where('id_user',session('info_user')[0]->id)->get();
     foreach($panier as $item){
        $produit = produit::find($item->id_produit);
        $credCard->addItems()->withParameters(
        $produit->id,
        $produit->nom_pro,
        $item->qt,
        ($request->totalfinal, 2, ".","")
        );
       
    }

          $info_uz = User();
          $credCard->setSender()->setName(session('info_user')[0]->firstname.' '.session('info_user')[0]->name);
         // $credCard->setSender()->setEmail(session('info_user')[0]->email);
          $credCard->setSender()->setEmail(session('info_user')[0]->name. "@sandbox.pagseguro.com.br");
          $credCard->setSender()->setHash($request->input("hashseller"));
          $credCard->setSender()->setPhone()->withParameters('84', '2450024533');
          $credCard->setSender()->setDocument()->withParameters(session('info_user')[0]->cpf);

          //send to pagseguro

          $credCard->setShipping()->setAddress()->withParameters(
     
            
            $info_uz->session('info_user')[0]->country,
            $info_uz->session('info_user')[0]->state,
            $info_uz->session('info_user')[0]->city,
            $info_uz->session('info_user')[0]->street,
            $info_uz->session('info_user')[0]->cep,
            '12555'
        
          );

          $credCard->setBilling()->setAddress()->withParameters(
     
            
            $request->country,
            $request->state,
            $request->city,
            $request->district,
            $request->num_apt,
            $request->street,
            $request->codzip
           
        
          );

 
          $credCard->setToken($request->input("cardtoken"));
          $nparcela = $request->input("nparcela");
          $totalapagar = $request->input("totalapagar");
          $totalparcela = $request->input("totalparcela");
          

          $credCard->setInstallment()->withParameters()->($nparcela , number_format($totalparcela, 2, ".","" ));

          //data titulo card_bank
          $credCard->setHolder()->setName($request->firstname.' '.$request->name);
          $credCard->setHolder()->setDocument()->withParameters($request->cpf);
          $credCard->setHolder()->setBirthdate()->($request->nacimento);
          $credCard->setHolder()->setPhone()->withParameters($request->ddd, $request->tel);


          $credCard->setMode("DEFAULT");
          $result = $credCard->register($this->getCredential());
          echo "compra feita com successo!!";



    
}


}
