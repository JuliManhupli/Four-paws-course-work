<?php

namespace App\Http\Controllers;
use App\Http\Filters\PetFilter;
use App\Models\Age_range;
use App\Models\Animal;
use App\Models\Pet;
use App\Models\Review;
use App\Models\Sex;
use App\Http\Requests\PetFormRequest;

class MainController extends Controller {

    public function home(){
        $pets=Pet::all();
        $reviews=Review::all();
        return view('home', compact('pets', 'reviews'));
    }

    public function pets(PetFilter $request){
        $pets=Pet::filter($request)->paginate(9);
        $animals=Animal::all();
        $sexes=Sex::all();
        $age_ranges=Age_range::all();
        return view('pets',  compact('pets', 'animals', 'sexes', 'age_ranges'));
    }

    public function pet($img){
        $pet=Pet::where('img', $img)->firstOrFail();
        return view('pet', compact('pet'));
    }

    public function contacts(){
        return view('contacts');
    }

    public function help(){
        return view('help');
    }

    public function feedback(PetFormRequest $req) {
        $name = $req->input('name');
        return view('feedback', ['name' => $name]);
    }
}
