<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Services\FaqService;
use Illuminate\Http\Request;
class FaqController extends Controller{
    public function __construct(protected FaqService $service){}
    public function search(Request $r){ return response()->json(['success'=>true,'data'=>$this->service->search($r->q)]); }
}
