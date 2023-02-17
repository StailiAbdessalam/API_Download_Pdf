<?php

namespace App\Http\Controllers;


use App\Models\Sectors_infos;
use Illuminate\Http\Request;
use App\Models\Bien_energie;
use App\Models\Bien_exterieur;
use App\Models\Bien_interieur;
use App\Models\Bien_localisation;
use App\Models\Bien_media;
use App\Models\Bien_surface;
use App\Models\Biens;
use App\Models\Compte_roles;
use App\Models\Comptes;
use App\Models\Mandats;
use App\Models\Villes_france;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
class DownloadPDFController extends Controller
{
    public function download($bien_id)
    {
        $bien = Biens::find($bien_id);
        $energie = Bien_energie::where('energie_bien_id', $bien_id)->first();
        $compte = Comptes::find($bien->bien_compte_id);
        $id_user = $bien->bien_compte_id;
        $role = Compte_roles::find($compte->role_id);
        $medias = Bien_media::where('media_bien_id', $bien_id)->OrderBy('media_order')->get();
        $inter = Bien_interieur::where('inter_bien_id', $bien_id)->first();
        $exter = Bien_exterieur::where('exter_bien_id', $bien_id)->first();
        $surface = Bien_surface::where('surface_bien_id', $bien_id)->first();
        $local = Bien_localisation::where('local_bien_id', $bien_id)->first();
        $villeFrance = Villes_france::where('ville_france_id', $local->local_ville)->first();
        $sectorInfos = Sectors_infos::where('code_commune',$villeFrance->ville_code_commune)->first();
        $FileJsonName = $this->getNameVille($villeFrance);
        $data = $this->getDataVille($FileJsonName);
        $pdf = PDF::loadView('myPDF', compact('FileJsonName','data','bien','id_user', 'energie', 'compte', 'role', 'medias', 'local', 'inter', 'exter', 'surface', 'villeFrance','sectorInfos'));
        return $pdf->stream('Fiche_Commerciale.pdf');
    }

    public function show($bien_id){
        $bien = Biens::find($bien_id);
        $energie = Bien_energie::where('energie_bien_id', $bien_id)->first();
        $compte = Comptes::find($bien->bien_compte_id);
        $id_user = $bien->bien_compte_id;
        $role = Compte_roles::find($compte->role_id);
        $medias = Bien_media::where('media_bien_id', $bien_id)->OrderBy('media_order')->get();
        $inter = Bien_interieur::where('inter_bien_id', $bien_id)->first();
        $exter = Bien_exterieur::where('exter_bien_id', $bien_id)->first();
        $surface = Bien_surface::where('surface_bien_id', $bien_id)->first();
        $local = Bien_localisation::where('local_bien_id', $bien_id)->first();
        $villeFrance = Villes_france::where('ville_france_id', $local->local_ville)->first();
        $sectorInfos = Sectors_infos::where('code_commune',$villeFrance->ville_code_commune)->first();

        $FileJsonName = $this->getNameVille($villeFrance);
        $data = $this->getDataVille($FileJsonName);

        return view('generate', compact('bien','data','FileJsonName','id_user', 'energie', 'compte', 'role', 'medias', 'local', 'inter', 'exter', 'surface', 'villeFrance','sectorInfos'));

   }

   public function getDataVille($FileJsonName){
           $data = [];
           if($FileJsonName != null){
               $data = file_get_contents(storage_path() . "\json\\".$FileJsonName);
               $data = json_decode(preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $data), true );
               return $data;
           }
           return null;
   }



   public function getNameVille($local){
       $villeFiles = $this->getDirContents(storage_path()."\json");
       $villeFileJson = "";
       $formatSearchVille = strtolower(str_replace(" ","-",$local["ville_nom"]));
       foreach ($villeFiles as $key => $value) {
           $formatNameVille = strtolower(str_replace(" ","-",$value));
           if (strpos($formatNameVille, $formatSearchVille) !== false) {
              return $villeFileJson = $value;
           }
       }
    }

    private function getDirContents($dir, &$results = array()) {
        $files = scandir($dir);
        foreach ($files as $key => $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path)) {
                $results[] = $value;
            } else if ($value != "." && $value != "..") {
                $this->getDirContents($path, $results);
                $results[] = $value;
            }
        }
        return $results;
    }

    public function saveImage(Request $request, $bien_id){
           $bien = Biens::find($bien_id);
           $id_user = $bien->bien_compte_id;
           $imagemapName = $id_user.'.png';
           $imageGrphName = $id_user.'G.png';
           file_put_contents(public_path() . '/map_screen/' . $imagemapName, file_get_contents($request->base64datamap));
           file_put_contents(public_path() . '/map_screen/' . $imageGrphName, file_get_contents($request->base64chart));

    }

}
