<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use  HasFactory;

    public function getAllUsers() {
        $users = DB::table("usuarios")->get();
  
        return $users;
      }
}
