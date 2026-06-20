<?php
namespace App\Services;
class VehicleService{
    public function all(){ return require app_path('Data/vehicles.php');}
}
