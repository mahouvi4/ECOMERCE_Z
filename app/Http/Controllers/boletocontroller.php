<?php

namespace App\Http\Controllers;

use Artistas\PagSeguro\PagSeguro as nicki;
use Artistas\PagSeguro\PagSeguroBoleto;
use App\Models\list_commande;
use App\Models\commande;
use Illuminate\Http\Request;
use PagSeguro;

class boletocontroller extends Controller
{

  public function formulaire_boleto($id){
    if(session('info_user')){
        $com_boleto = list_commande::where('id_commande',$id)->get();
        $comand_select = commande::find($id);
        return view('payment.boleto',['com_boleto'=>$com_boleto,'comand_select'=>$comand_select]);
    }
  }

    public function pagboleto(Request $request){
        
      $pagseguro = PagSeguro::setReference('1');
->setSenderInfo([
  'senderName' => 'Nome Completo', //Deve conter nome e sobrenome
  'senderPhone' => '(32) 1324-1421', //Código de área enviado junto com o telefone
  'senderEmail' => 'manuagondanou229@gmail.com',
  'senderCPF' => '21730168060', //Ou CNPJ se for Pessoa Júridica
  'senderHash' => $request->pagseguro_token,
])


->setItems([
  [
    'itemId' => '1',
    'itemDescription' => 'Nome do Item',
    'itemAmount' => '12.14', //Valor unitário
    'itemQuantity' => '2', // Quantidade de itens
  ],
 
])
->send([
  'paymentMethod' => 'boleto',
 
]);
return $pagseguro;
    }
 


}
