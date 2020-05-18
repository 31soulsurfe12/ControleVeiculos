@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-user-add">Autorização de saidas</h1>
<div class="ls-box">

  <h5 class="ls-title-5">Autorização de uso de veiculos oficiais:</h5>
  <form method="POST" action="{{ route('authorizacao.postAdd') }}" class="ls-form row">
  <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
  <fieldset>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label class="ls-label col-md-6">
        <b class="ls-label-text">Motorista</b>
        <input type="text"  class="form-control" name="namemotorista"  required >
      </label>
    </div>
     <div class="form-group col-md-6">
        <label class="ls-label col-md-6">
          <b class="ls-label-text">Status da Solicitação</b>
          <input type="text"  class="form-control" name="aprovacao"  required >
        </label>
      </div>
    <div class="form-group col-md-6">
      <label class="ls-label col-md-6">
        <b class="ls-label-text">Veiculo</b>
        <input type="text"  class="form-control" name="model"  required >
      </label>
    </div>
    <div class="form-group col-md-6">
      <label class="ls-label col-md-6">
        <b class="ls-label-text">Placa</b>
        <input type="text"  class="form-control" name="placa"  required >
      </label>
    </div>
  </div>
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
      <input type="date"  class="form-control" name="dataretorno" placeholder="Data"  >
    </label>
  </div>
  <div class="form-group col-md-6">
    <label class="ls-label col-md-5">
      <b class="ls-label-text">Hora</b>
      <input type="time"  class="form-control" name="horaretorno" placeholder="Hora"  >
    </label>
  </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
    <label class="ls-label col-md-6">
      <b class="ls-label-text">Quilometragem Atual</b>
      <input type="number"  class="form-control" name="kminicial"  required >
    </label>
</div>
<div class="form-group col-md-6">
    <label class="ls-label col-md-6">
      <b class="ls-label-text">Quilometragem Final</b>
      <input type="number"  class="form-control" name="kmfinal"  >
    </label>
  </div>
</div>
  <div class="form-group col-md-6">
      <label class="ls-label col-md-12">
        <b class="ls-label-text">Obeservação</b>
        <input type="text"  class="form-control" name="observ"  >
      </label>
  </div>
  <div class="form-group col-md-6">
      <label class="ls-label col-md-12">
        <b class="ls-label-text">Situação do veiculo</b>
        <input type="text"  class="form-control" name="statusveiculo"  >
      </label>
  </div>
  <div class="form-group col-md-6">
      <label class="ls-label col-md-12">
        <b class="ls-label-text">Motorista Ciente</b>
        <input type="text"  class="form-control" name="cientemot"  >
      </label>
  </div>
  <div class="form-group col-md-6">
      <label class="ls-label col-md-5">
        <b class="ls-label-text">Data</b>
        <input type="date"  class="form-control" name="datacient" placeholder="Data"  >
      </label>
    </div>
    <div class="form-group col-md-6">
        <label class="ls-label col-md-12">
          <b class="ls-label-text">Autorizado por</b>
          <input type="text"  class="form-control" name="autorizacao"  required>
        </label>
    </div>
    <div class="form-group col-md-6">
        <label class="ls-label col-md-5">
          <b class="ls-label-text">Data</b>
          <input type="date"  class="form-control" name="data" placeholder="Data" required >
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
