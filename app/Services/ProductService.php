<?php
namespace App\Services;
class ProductService{
    protected array $products;
    public function __construct(){ $this->products=require app_path('Data/products.php'); }
    public function search($q){
        return collect($this->products)->filter(fn($i)=>str_contains(strtolower($i['name']),strtolower($q??'')))->values();
    }
    public function find($id){
        return collect($this->products)->firstWhere('id',(int)$id);
    }
}
