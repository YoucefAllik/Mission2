<?php


// app/Http/Controllers/VisiteurController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\PdoGsb; // Assurez-vous d'ajuster ceci selon votre structure

class VisiteurController extends Controller
{
    public function listeVisiteurs()
    {
        $pdoGsb = new PdoGsb(); // Assurez-vous que la classe PdoGsb est correctement instanciée
        $visiteurs = $pdoGsb->getVisiteurs(); // Utilisez la méthode correcte

        return view('listVisiteurs', compact('visiteurs'));
    }
}
