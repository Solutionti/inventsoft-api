<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function __construct() {
      $this->notasModel = new Notas();
    }
    
    public function getAllNotas() {
      try {
        $notas = $this->notasModel->getAllNotas();
        $status = 200;
      }
      catch(\exception $e) {
        $notas = [
            'message' => 'Algo salio mal'
        ];
        $status = 404;
      }
      
      return response()->json($notas, $status);
    }

    public function createNotas() {

    }

    public function UpdateNotas() {

    }

    public function DeleteNotas() {
        
    }
}
