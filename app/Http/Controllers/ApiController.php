<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


Class ApiController extends Controller {
    
    public function add(Request $request){
       $number1 = $request['number1'];
       $number2 = $request['number2'];
       $sum = $number1 + $number2;
       
       return json_encode(['sum' => $sum]);
    }
    
    
}
