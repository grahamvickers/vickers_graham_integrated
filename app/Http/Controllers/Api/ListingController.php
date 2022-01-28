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

    public function index(Request $request){
        if ($request->q) {
            $listings = Listing::where('city', 'LIKE', "%{$request->q}%")
                ->orWhere('name', 'LIKE', "%{$request->q}%")
                ->get()
                ->map->only([
                'name',
                'imgUri',
                'price',
            ]);
        } else {
            $listings = Listing::all()->map->only([
                'name',
                'imgUri',
                'address',
                'price',
                'profit',
                'income',
                'content'
            ]);
        }

       
        return response()->json($listings, 200);
    }
}