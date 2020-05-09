<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Vehicle;


class Vehicle extends Model
{
  protected $fillable = ['model'];

  public function getVehicle($field)
  {
    if(!is_null($field['model'])) {
      $vehicle = Vehicle ::where('model', 'LIKE', '%'.$field['model'].'%')
                         ->get();
    }
    return $vehicle;
}
  public function getVehicles()
  {
    $vehicle = Vehicle::all();
    return $vehicle;
  }

	public function addVehicle($field)
  {
    $vehicle = new Vehicle();
    $vehicle->brand = $field['brand'];
    $vehicle->model = $field['model'];
    $vehicle->placa = $field['placa'];
    $vehicle->year = $field['year'];
    $vehicle->situacao = $field['situacao'];
    $vehicle->save();
  }
}
