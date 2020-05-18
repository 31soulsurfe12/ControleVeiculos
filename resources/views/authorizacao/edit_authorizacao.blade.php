@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Editar Autorização</h1>
<div class="ls-box">
  <form method="Post" action="{{route('authorizacao.edit',$authorizacao->id)}}" class="ls-form row">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <fieldset>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label class="ls-label col-md-6">
            <b class="ls-label-text">Motorista</b>
            <input value="{{$autorizacao->namemotorista }}" type="text"  class="form-control" name="namemotorista"  required >
          </label>
        </div>
         <div class="form-group col-md-6">
            <label class="ls-label col-md-6">
              <b class="ls-label-text">Status da Solicitação</b>
              <input value="{{ $autorizacao->aprovacao }}" type="text"  class="form-control" name="aprovacao"  required >
            </label>
          </div>
        <div class="form-group col-md-6">
          <label class="ls-label col-md-6">
            <b class="ls-label-text">Veiculo</b>
            <input value="{{ $autorizacao->model }}" type="text"  class="form-control" name="model"  required >
          </label>
        </div>
        <div class="form-group col-md-6">
          <label class="ls-label col-md-6">
            <b class="ls-label-text">Placa</b>
            <input value="{{ $autorizacao->placa }}" type="text"  class="form-control" name="placa"  required >
          </label>
        </div>
      </div>
    <div class="form-row">
      <h5 class="ls-title-6">Saida</h5>
    <div class="form-group col-md-6">
        <label class="ls-label col-md-5">
          <b class="ls-label-text">Data</b>
          <input value="{{ $autorizacao->datasaida }}" type="date"  class="form-control" name="datasaida" placeholder="Data" required >
        </label>
      </div>
      <div class="form-group col-md-6">
        <label class="ls-label col-md-5">
          <b class="ls-label-text">Hora</b>
          <input value="{{ $autorizacao->horasaida }}" type="time"  class="form-control" name="horasaida" placeholder="Hora" required >
        </label>
      </div>
    </div>
    <br>
    <div class="form-row">
      <h5 class="ls-title-6">Retorno</h5>
    <div class="form-group col-md-6">
        <label class="ls-label col-md-5">
          <b class="ls-label-text">Data</b>
          <input value="{{ $autorizacao->dataretorno }}" type="date"  class="form-control" name="dataretorno" placeholder="Data"  >
        </label>
      </div>
      <div class="form-group col-md-6">
        <label class="ls-label col-md-5">
          <b class="ls-label-text">Hora</b>
          <input value="{{ $autorizacao->horaretorno }}" type="time"  class="form-control" name="horaretorno" placeholder="Hora"  >
        </label>
      </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
        <label class="ls-label col-md-6">
          <b class="ls-label-text">Quilometragem Atual</b>
          <input value="{{ $autorizacao->kminicial }}" type="number"  class="form-control" name="kminicial"  required >
        </label>
    </div>
    <div class="form-group col-md-6">
        <label class="ls-label col-md-6">
          <b class="ls-label-text">Quilometragem Final</b>
          <input value="{{ $autorizacao->kmfinal }}" type="number"  class="form-control" name="kmfinal"  >
        </label>
      </div>
    </div>
      <div class="form-group col-md-6">
          <label class="ls-label col-md-12">
            <b class="ls-label-text">Obeservação</b>
            <input value="{{$autorizacao->observ }}" type="text"  class="form-control" name="observ"  >
          </label>
      </div>
      <div class="form-group col-md-6">
          <label class="ls-label col-md-12">
            <b class="ls-label-text">Situação do veiculo</b>
            <input value="{{$autorizacao->statusveiculo }}" type="text"  class="form-control" name="statusveiculo"  >
          </label>
      </div>
      <div class="form-group col-md-6">
          <label class="ls-label col-md-12">
            <b class="ls-label-text">Motorista Ciente</b>
            <input value="{{$autorizacao->cientemot }}" type="text"  class="form-control" name="cientemot"  >
          </label>
      </div>
      <div class="form-group col-md-6">
          <label class="ls-label col-md-5">
            <b class="ls-label-text">Data</b>
            <input value="{{$autorizacao->datacient }}" type="date"  class="form-control" name="datacient" placeholder="Data"  >
          </label>
        </div>
        <div class="form-group col-md-6">
            <label class="ls-label col-md-12">
              <b class="ls-label-text">Autorizado por</b>
              <input value="{{$autorizacao->autorizacao }}" type="text"  class="form-control" name="autorizacao"  required>
            </label>
        </div>
        <div class="form-group col-md-6">
            <label class="ls-label col-md-5">
              <b class="ls-label-text">Data</b>
              <input value="{{$autorizacao->data }}" type="date"  class="form-control" name="data" placeholder="Data" required >
            </label>
        </div>


    </fieldset>
    <div class="ls-actions-btn">
      <input type="submit" value="Atualizar" class="ls-btn" title="update">
      <a href="{{ route('authorizacoes') }}" class="ls-btn-danger">Cancelar</a>
    </div>
  </form>
</div>
@stop
