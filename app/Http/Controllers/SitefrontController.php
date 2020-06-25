<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Formation;
use App\Models\Domaine;
use App\Models\Expert;
use App\Models\Upload;
use App\Models\Contact;
use App\Models\Apropo;
use Dwij\Laraadmin\Models\Module;
use App\Models\Catalogue;
use App\Models\Intervenent;
use App\Models\Temoignage;
use App\Models\Partenaire;
use App\Models\Cvpdg;
use App\Models\Etudiant;
use App\Models\Solution;
use App\Models\RendezVouse;
use App\Models\Metier;
use App\Models\Valeur;
use DB;
use App\Models\Panorama;
use App\Models\Souspanorama;

class SitefrontController extends Controller
{
    //
  
    public function index()
    {
        
        $part = Partenaire::get();
      return view('frontSiteView.index',[

        'part' => $part,
      ]);
        
    }

    public function rv(Request $request){
            $rv = new RendezVouse();

            $rv->nom = $request->input('nom');
            $rv->prenom = $request->input('prenom');
            $rv->telephone = $request->input('telephone');
            $rv->email = $request->input('email');
            $rv->telephone = $request->input('telephone');
            $rv->message = $request->input('message');

            $rv->save();

            return back();
    }

    public function solution(){
        $solu = Solution::get();
        return view('frontSiteView.solution',[
            
            'solu' => $solu
        ]);
    }


  
    public function apropos()
    {
        //
      $valeur = Valeur::get();
      
        $apropos = Apropo::get(); 
        $img = Upload::get();
        return view('frontSiteView.apropos',[
            'apropos'=> $apropos,
          
            'img'=> $img,
            'valeur' => $valeur
            
        ]);
    }

   
    public function domaine()
    {
        //
         // Get Upload Object
        $domaine = Domaine::get();
      
        $tem  = Temoignage::where('profile', 'autres')->get();
    
        return view('frontSiteView.domaine',
                [
                    'domaine'=> $domaine,
                    'tem' => $tem

                ]
        );
        
    }


    public function expert()
    {
        //
        $expert = Expert::get();
        $img = Upload::get();
			return View('frontSiteView.expert', [
                'img' => $img,
                'expert' => $expert
                ]);
    }

  
    public function projet()
    {
        //
        return view('frontSiteView.projet');
    }

    public function contact()
    {
        //
        $contact = Contact::get();
       
       
        return view('frontSiteView.contact')->with('contact',$contact);
    }

    public function layoutContact(){

        $contact = Contact::get();
       
       
        return view('layout.footer')->with('contact',$contact);
    }

    public function inscription(Request $request){
        $inscrit = new Etudiant();
        $inscrit->nom = $request->input('nom');
        $inscrit->prenom = $request->input('prenom');
        $inscrit->telephone = $request->input('telephone');
        $inscrit->email = $request->input('email');
        $inscrit->formation = $request->input('idForm');

        
        $inscrit->save();
        return back();

    }

    public function curiculum(){

        $img = Upload::get();
        $cv = Cvpdg::get();
        return view('frontSiteView.cv',[
            'img'=> $img,
            'cv' => $cv
        ]);
    }


    public function formation()
    {
        //
        $formation = DB::table('catalogues')->paginate(8);
  
        $img = Upload::get();
        $formateur = Intervenent::get();
        $tem  = Temoignage::where('profile', 'etudiants')->get();
        return view('frontSiteView.formation',[

            'formation'=> $formation,
            'img' => $img,
            'formateur' => $formateur,
            'tem' => $tem
        ]);
        
    }

    public function stat(){
        $formation = Catalogue::get();
        $list = Catalogue::where('code','STAT')->paginate(8);
        $statana = Catalogue::where('code','STATANA')->paginate(8);
        $msad = Catalogue::where('code','MSAD')->paginate(8);
        $msrm = Catalogue::where('code','MSRM')->paginate(8);
        $ceeq = Catalogue::where('code','CEEQ')->paginate(8);
        $st = Catalogue::where('code','ST')->paginate(8);
        $econom = Catalogue::where('code','ECONOM')->paginate(8);
        $logic = Catalogue::where('code','LOGIC')->paginate(8);
      

        $img = Upload::get();
        $formateur = Intervenent::get();
        $tem  = Temoignage::where('profile','etudiants')->get();
        return view('frontSiteView.stat',[

           
            'img' => $img,
            'tem' => $tem,
            'formateur' => $formateur,
            'formation' => $formation,
            'list' => $list,
            'statana' => $statana,
            'msad'=> $msad,
            'msrm' => $msrm,
            'ceeq' => $ceeq,
            'st' => $st,
            'econom' => $econom,
            'logic' => $logic,
           
            ]);
            
    }

    public function eval(){

        $eval = Catalogue::where('code',true)->paginate(8);
        $img = Upload::get();
        $formateur = Intervenent::get();
        $tem  = Temoignage::where('profile','etudiants')->get();
        return view('frontSiteView.evaluation',[

           
            'img' => $img,
            'eval' => $eval,
            'tem' => $tem,
            'formateur' => $formateur,
            ]
    
    );


    }
    public  $idpano ;
    public function gestproj(){
        
    
        $idpano='methodestatistique';
        $pano = Panorama::where('titre','gestionprojet')->get();
        $souspano = Souspanorama::get();
        $formation = Catalogue::get();
     
        $img = Upload::get();
        $formateur = Intervenent::get();
        $tem  = Temoignage::where('profile','etudiants')->get();
        return view('frontSiteView.gestprojet',[

          
            'img' => $img,
            'tem' => $tem,
            'formation' => $formation,
            'formateur' => $formateur,
            'pano' => $pano,
            'souspano' => $souspano,
            'idpano'=> $idpano


        ]);

    }
  
    
    public function detailFormation($id){
        $img = Upload::get();
        $intervs = Intervenent::get();
        $detailForm = Catalogue::find($id);
        $formation = Catalogue::get();
        $tem  = Temoignage::where('profile', 'etudiants')->get();
        return view('frontSiteView.detailForm',
        
        ['detailForm'=> $detailForm,
        'img'=> $img,
        'intervs' => $intervs,
        'tem' => $tem,
        'formation' => $formation
        ]
    );
    }
}
