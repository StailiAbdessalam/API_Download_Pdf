<?php

namespace App\Http\Controllers;



use App\Models\Bien_energie;
use App\Models\Biens;
use App\Models\Mandats;

class DownloadPDFController extends Controller
{

    public function download($bien_id)
    {

        $mande = Mandats::where('mandat_bien_id', $bien_id)->first();
        dd($mande);


    }
}
