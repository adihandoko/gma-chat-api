<?php
namespace App\Services;
class FaqService{
    public function search($q){
        $faqs=require app_path('Data/faqs.php');
        return collect($faqs)->filter(fn($i)=>str_contains(strtolower($i['question']),strtolower($q??'')))->values();
    }
}
