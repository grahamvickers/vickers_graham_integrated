<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bomberman;

class BombermanController extends Controller
{
    /**
     * Return a;; instances of the Bomberman model
     * 
     * @return Illuminate\Http\JsonResponse
     * 
     */

     public function index(){
         $bombermen = Bomberman::all()->map->only(['name', 'avatarUri']);

         return response()->json($bombermen, 200);
     }
}
