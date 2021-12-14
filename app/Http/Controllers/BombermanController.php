<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Bomberman;

class BombermanController extends Controller
{
    /**
     * create new Bomberman
     *
     * @param Request $request
     * @return Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'avatar' => 'required|image'
        ]);

        $avatarName = Storage::putFile('public', $request->avatar);

        Bomberman::create([
            'name' => $request->name,
            'avatar' => $avatarName
        ]);
        
        return redirect('/');
    }
}
