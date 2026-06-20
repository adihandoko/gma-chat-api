<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;
class ProductController extends Controller{
    public function __construct(protected ProductService $service){}
    public function search(Request $r){ return response()->json(['success'=>true,'data'=>$this->service->search($r->q)]); }
    public function show($id){ return response()->json(['success'=>true,'data'=>$this->service->find($id)]); }
}
