<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Services\VehicleService;
class VehicleController extends Controller{
    public function __construct(protected VehicleService $service){}
    public function index(){ return response()->json(['success'=>true,'data'=>$this->service->all()]); }
}
