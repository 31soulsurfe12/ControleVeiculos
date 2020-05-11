@extends('layouts.application')

@section('content')
<h1 class="ls-title-intro ls-ico-list">Listar Veiculos</h1>
<div class="ls-box">
  <table class="ls-table ls-table-striped ls-bg-header">
    <thead>
      <tr>
        <th>Marca</th>
        <th >Modelo</th>
        <th>Placa</th>
        <th>Ano</th>
        <th>Situação do veiculo</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($vehicles as $vehicle)
      <tr>
        <td>{{ $vehicle->brand }}</td>
        <td >{{ $vehicle->model }}</td>
        <td>{{ $vehicle->placa }}</td>
        <td>{{ $vehicle->year}}</td>
        <td>{{ $vehicle->situacao }}</td>
        
        <td class="ls-regroup ">
          <div data-ls-module="dropdown" class="ls-dropdown ">
            <a href="#" class="ls-btn ls-ico-edit-admin"></a>
            <ul class="ls-dropdown-nav">
              <li><a href="{{ route('vehicle.edit', $vehicle->id) }}">Alterar</a></li>
              <li><a href="{{ route('vehicle.delete', $vehicle->id) }}">Apagar</a></li>
            </ul>
          </div>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
@stop
