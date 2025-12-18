<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Animal;

class AnimalController extends Controller

{
    public function show(int $id)
    {
        $animal = Animal::find($id);

        if (!$animal) {
            abort(404);
        }
        return view('pages/animal-details', ["animal" => $animal]);
    }

    public function create()
    {
        Animal::create([
            "name" => "Coquillette",
            "species" => "Chien",
            "age" => 3,
            "description" => "Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.",
            "photo" => "Coquillette.png",
        ]);

        return redirect()->route('home');
    }

    public function update($id)
    {
        $animal = Animal::find($id);

        if ($animal) {
            $animal->update([
                "name" => $animal->name . " modifié",
            ]);
        }

        return redirect()->route('home');
    }

    public function delete($id)
    {

        $animal = Animal::find($id);

        if (!$animal) {
            abort(404);
        }

        $animal->delete();
        return redirect()->route('home');
    }
}
