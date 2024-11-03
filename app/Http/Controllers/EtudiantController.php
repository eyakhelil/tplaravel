<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Classe;

class EtudiantController extends Controller
{
      public function index(){
        $liste = Etudiant::orderby('nom','asc')->get();
        return view('etudiant',compact('liste'));
      }
      public function create(){
        $classes=Classe::all();
        return view('create',compact('classes'));
      }
    public function store(Request $request){
      $request->validate([
        'nom'=>'required',
        'prenom'=>'required',
        'classes_id'=>'required'
      ]);
      Etudiant::create($request->all());
      return redirect()->route('etudiant')
                      ->with('sucess','student created successfully.');
    }
    public function edit(Etudiiant $etudiant){
      $classes=Classe::all();
      return view('edit',compact('etudiant','classes'));
    }
    public function update(Request $request, Etudiant $etudiant)
    {
    $request->validate([
        'nom'=>'required',
        'prenom'=>'required',
        'classes_id'=>'required'
    ]);
    $etudiant->update([
        'nom'=>$request->nom,
        'prenom'=>$request->prenom,
        'classes_id'=>$request->classes_id
    ]);

    return redirect()->route('etudiant')
                    ->with('success','Student updated successfully');
    }
    public function show(Etudiant $etudiant)
    {
       return view('show',compact('etudiant'));
    }
    public function delete(Etudiant $etudiant){
      $etudiant-> delete();
      return redirect()->route('etudiant')
                      ->with('success','Post deleted successfully');
  }


}

