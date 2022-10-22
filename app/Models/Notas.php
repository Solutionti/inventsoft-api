<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Notas extends Model
{
    use HasFactory;

    public function getAllNotas() {
      $notas = DB::table("notas")->get();
      
      return $notas;
    }
}
