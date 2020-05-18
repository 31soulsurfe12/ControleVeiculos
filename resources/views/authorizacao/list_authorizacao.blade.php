@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Listar Autorizações</h1>
<div class="ls-box">
  <table class="ls-table ls-table-striped ls-bg-header">
    <thead>
      <tr>
        <th>Motorista</th>
        <th>Status da Solicitação</th>
        <th >Veiculo</th>
        <th>Placa</th>
        <th>Data</th>
        <th>Hora</th>
        <th>Data</th>
        <th>Hora</th>
        <th >Quilometragem Atual</th>
        <th>Quilometragem Final</th>
        <th>Obeservação</th>
        <th>Situação do veiculo</th>
        <th>Motorista Ciente</th>
        <th >Data</th>
        <th>Autorizado por</th>
        <th>Data</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($authorizacoes as $autorizacao)
      <tr>
        <td>{{ $autorizacao->namemotorista }}</td>
        <td >{{ $autorizacao->aprovacao }}</td>
        <td>{{ $autorizacao->model }}</td>
        <td>{{ $autorizacao->placa}}</td>
        <td>{{ $autorizacao->datasaida }}</td>
        <td>{{ $autorizacao->horasaida }}</td>
        <td >{{ $autorizacao->dataretorno }}</td>
        <td>{{ $autorizacao->horaretorno }}</td>
        <td>{{ $autorizacao->kminicial}}</td>
        <td>{{ $autorizacao->kmfinal }}</td>
        <td>{{ $autorizacao->observ }}</td>
        <td >{{ $autorizacao->statusveiculo }}</td>
        <td>{{ $autorizacao->cientemot }}</td>
        <td>{{ $autorizacao->datacient}}</td>
        <td>{{ $autorizacao->autorizacao }}</td>
        <td>{{ $autorizacao->data }}</td>
        <td class="ls-regroup ">
          <div data-ls-module="dropdown" class="ls-dropdown ">
            <a href="#" class="ls-btn ls-ico-edit-admin"></a>
            <ul class="ls-dropdown-nav">
              <li><a href="{{ route('authorizacao.edit', $autorizacao->id) }}">Alterar</a></li>
              <li><a href="{{ route('authorizacao.delete', $autorizacao->id) }}">Apagar</a></li>
              
            </ul>
          </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@stop
