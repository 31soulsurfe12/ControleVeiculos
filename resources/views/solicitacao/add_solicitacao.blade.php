@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-user-add">Solicitar Veiculo</h1>
<div class="ls-box">

  <h5 class="ls-title-5">Solicitação de uso de veiculos oficiais:</h5>
  <form method="POST" action="{{ route('solicitacao.postAdd') }}" class="ls-form row">
  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <fieldset>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label class="ls-label col-md-10">
        <b class="ls-label-text">Unidade Solicitante</b>
        <input type="text"  class="form-control" name="namesolicitante" placeholder="Unidade Solicitante" required >
      </label>
    </div>
    <div class="form-group col-md-6">
      <label class="ls-label col-md-6">
        <b class="ls-label-text">Ramal</b>
        <input type="text"  class="form-control" name="nameramal" placeholder="Ramal" required >
      </label>
    </div>
  </div>
<div class="form-row">
<div class="form-group col-md-6">
    <label class="ls-label col-md-12">
      <b class="ls-label-text">Roteiro</b>
      <input type="text"  class="form-control" name="nameroteiro" placeholder="Roteiro" required >
    </label>
  </div>
  <div class="form-group col-md-6">
    <label class="ls-label col-md-12">
      <b class="ls-label-text">Finalidade</b>
      <input type="text"  class="form-control" name="namefinalidade" placeholder="Finalidade" required >
    </label>
    <br>
  </div>
</div>

<h5 class="ls-title-5">Previsão de Utilização do Veiculo:</h5>
<hr>

<div class="form-row">
  <h5 class="ls-title-6">Saida</h5>
<div class="form-group col-md-6">
    <label class="ls-label col-md-5">
      <b class="ls-label-text">Data</b>
      <input type="date"  class="form-control" name="datasaida" placeholder="Data" required >
    </label>
  </div>
  <div class="form-group col-md-6">
    <label class="ls-label col-md-5">
      <b class="ls-label-text">Hora</b>
      <input type="time"  class="form-control" name="horasaida" placeholder="Hora" required >
    </label>
  </div>
</div>
<br>
<div class="form-row">
  <h5 class="ls-title-6">Retorno</h5>
<div class="form-group col-md-6">
    <label class="ls-label col-md-5">
      <b class="ls-label-text">Data</b>
      <input type="date"  class="form-control" name="dataretorno" placeholder="Data" required >
    </label>
  </div>
  <div class="form-group col-md-6">
    <label class="ls-label col-md-5">
      <b class="ls-label-text">Hora</b>
      <input type="time"  class="form-control" name="horaretorno" placeholder="Hora" required >
    </label>
  </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
    <label class="ls-label col-md-12">
      <b class="ls-label-text">Autenticação do Gerente</b>
      <input type="text"  class="form-control" name="autenticacao" placeholder="Autenticação do Gerente" required >
    </label>
  </div>
  <div class="form-group col-md-6">
    <label class="ls-label col-md-5">
      <b class="ls-label-text">Data</b>
      <input type="date"  class="form-control" name="data" placeholder="Data" required >
    </label>
  </div>
</div>
<div class="form-group col-md-6">
    <label class="ls-label col-md-12">
      <b class="ls-label-text">Nome dos Usuários</b>
      <input type="text"  class="form-control" name="nameusuario" placeholder="Nome dos Usuários" required >
    </label>
</div>

</fieldset>
<div class="ls-actions-btn">
  <input type="submit" value="Inserir" class="ls-btn" title="Inserir">
  <input class="ls-btn-danger" type="reset" value="Limpar">
</div>
</form>
</div>

@stop
