<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$pets = Pet::all();
        $pets = Pet::paginate(5);
        return view('pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'photo' => ['required', 'image'],
            'kind' => ['required', 'string'],
            'weight' => ['required'],
            'age' => ['required'],
            'breed' => ['required', 'string'],
            'location' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

        if($validated) {
            if ($request->hasFile('photo')) {
            $photo = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $photo);
        }

        $pet = new Pet;
        $pet->name = $request->name;
        $pet->photo = $photo;
        $pet->kind = $request->kind;
        $pet->weight = $request->weight;
        $pet->age = $request->age;
        $pet->breed = $request->breed;
        $pet->location = $request->location;
        $pet->description = $request->description;

            if ($pet->save()) {
                return redirect('pets')->with('message', 'The pet: ' . $pet->name . ' was successfully added!');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return view('pets.show')->with('pet', $pet);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
         return view('pets.edit')-> with('pet', $pet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pet $pet)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'photo' => ['image'],
            'kind' => ['required', 'string'],
            'weight' => ['required'],
            'age' => ['required'],
            'breed' => ['required', 'string'],
            'location' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

    if($validated){
        if ($request->hasFile('photo')) {
                $photo = time() . '.' . $request->photo->extension();
                $request->photo->move(public_path('images'), $photo);
                if($request->originphoto != 'no-photo.png') {
                        unlink(public_path('images/' . $request->originphoto)); // Delete the old photo if it's not the default one
                }
            }
            else {
                $photo = $request->originphoto; // Keep the old photo if no new one is uploaded
            }

            $pet->name = $request->name;
            $pet->photo = $photo;
            $pet->kind = $request->kind;
            $pet->weight = $request->weight;
            $pet->age = $request->age;
            $pet->breed = $request->breed;
            $pet->location = $request->location;
            $pet->description = $request->description;

            if ($pet->save()) {
                return redirect('pets')->with('message', 'The pet: ' . $pet->name . ' was successfully edited!');
            }
    }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        // if ($user->delete()) {
        //     if($user->photo != 'no-photo.png'){
        //         unlink(public_path('images/').$user->photo);
        //     }
        //     return redirect('users')->with('message', 'The user: '.$user->fullname.' was successfully deleted!');
        // }
        return redirect('pets')->with('message', 'The pet: '.$pet->name.' was successfully deleted!');
    }

    public function search(Request $request){
    $pets = Pet::names($request->q)->paginate(10);
    return view('pets.search')->with('pets', $pets);
   }
}
