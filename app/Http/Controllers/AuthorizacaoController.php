<?php

namespace App\Http\Controllers;

use DB;
use \App\Authorizacao;
use Illuminate\Http\Request;
use App\Http\Requests;

class AuthorizacaoController extends Controller
{
  private $authorizacao;

  public function __construct(Authorizacao $authorizacao)
  {
    $this->authorizacoes = $authorizacao;
    $this->authorizacao = $authorizacao;
    $this->middleware('auth');
  }
  //-------------------- Adicionar Autorização--------------------//
  public function get_add_authorizacao(Request $field)
  {
    return view('authorizacao/add_authorizacao');
  }

  public function post_add_authorizacao(Request $info)
  {
    $authorizacao = $this->authorizacao->addAuthorizacao($info);
    return redirect()->route('authorizacoes')->with('message', 'Autorização adicionada com sucesso!');;
  }
  //------------------------------------------------------------//
  //---------------- Listar Autorização Específico -----------------//
  public function get_list_authorizacao()
  {
    return list_authorizacoes();
  }

  public function post_list_authorizacao()
  {

  }
  //------------------------------------------------------------//

  //--------------------- Listar Autorização----------------------//
  public function list_authorizacoes()
  {
    $authorizacoes = $this->authorizacoes->getauthorizacoes();
    return view('authorizacao/list_authorizacao', compact('authorizacoes'));
  }
  //------------------------------------------------------------//

 //-------------------- Editar Autorização --------------------//
    public function get_edit_authorizacao($id)
  {
    $authorizacao = $this->authorizacao->find($id);



    return view('authorizacao/edit_authorizacao', compact('authorizacao'));
  }

  public function post_edit_authorizacao(Request $info, $id)
  {
    $authorizacao = $this->authorizacao->find($id);
    $authorizacao->namemotorista = $info['namemotorista'];
    $authorizacao->model = $info['model'];
    $authorizacao->placa = $info['placa'];
    $authorizacao->aprovacao = $info['aprovacao'];
    $authorizacao->datasaida = $info['datasaida'];
    $authorizacao->horasaida = $info['horasaida'];
    $authorizacao->dataretorno = $info['dataretorno'];
    $authorizacao->horaretorno = $info['horaretorno'];
    $authorizacao->kminicial = $info['kminicial'];
    $authorizacao->kmfinal = $info['kmfinal'];
    $authorizacao->observ = $info['observ'];
    $authorizacao->autorizacao = $info['autorizacao'];
    $authorizacao->data = $info['data'];
    $authorizacao->cientemot = $info['cientemot'];
    $authorizacao->datacient = $info['datacient'];
    $authorizacao->statusveiculo = $info['statusveiculo'];

    $authorizacao->save();

    return redirect()->route('authorizacoes')->with('message', 'Autorização alterada com sucesso!');;;
  }
  //-------------------- Deletar Autorização --------------------//

  public function delete_authorizacao($id) {
        $authorizacao = $this->authorizacao->find($id);
        $authorizacao->delete();
        return redirect()->route('authorizacoes')->with('message', 'Autorização excluído com sucesso!');
    }

}
