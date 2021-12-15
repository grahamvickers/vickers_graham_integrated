<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Listing;


class ListingController extends Controller
{
    /**
     * Return all instances of the listing model
     * 
     * @return Illuminate\Http\JsonResponse
     * 
     */

    public function index(){
        $listings = Listing::all()->map->only([
            'name',
            'imgUri',
            'address',
            'price',
            'profit',
            'income',
            'content'
        ]);

        return response()->json($listings, 200);
    }
}
