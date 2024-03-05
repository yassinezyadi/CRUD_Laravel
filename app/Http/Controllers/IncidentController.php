<?php

namespace App\Http\Controllers;


use App\Models\Incident;
use Illuminate\Http\Request;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function home(){ 
        return view('incidente');
    }
   
    public function tablef(){
        $incidents = Incident::get(); // show incident
        return view('table')->with('incidents', $incidents);;
    }
    
    public function editpage(){
        $incidents = Incident::get();
        return view('editincident')->with('incidents', $incidents);;
    }
    
    public function addincident(){ 
        return view('incidente');
    }
   

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     //Save
    public function create(Request $request)
    {
        $incident = new Incident();
        $incident->name = $request->input('name');
        $incident->description = $request->input('description');
        $incident->type =$request->input('type');
        $incident->severityunsignet =$request->input('severity');
        $incident->incident_date =$request->input('incident_date');
        $incident->declaration_date =$request->input('declaration_date');
        $incident->save();

        return redirect('/')->with('success', ' créé avec succès!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Incident  $incident
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Incident  $incident
     * @return \Illuminate\Http\Response
     */

     //Edit
    public function editincident($id)
    {
         $incident = Incident::find($id);
         return view('editincident')-> with("incident" , $incident);
    }

   // Update
    public function updateincident($id, Request $request){
        $incident = Incident::find($id);
        $incident->name = $request->input('name');
        $incident->description = $request->input('description');
        $incident->type =$request->input('type');
        $incident->severityunsignet =$request->input('severity');
        $incident->incident_date =$request->input('incident_date');
        $incident->declaration_date =$request->input('declaration_date');
        $incident->update();   
    
        return redirect('table')->with('success', 'Votre Incident a été modifiée avec succès');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Incident  $incident
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Incident  $incident
     * @return \Illuminate\Http\Response
     */

     //Delete
    public function delete($id)
    {
        $incident=Incident::find($id);
        $incident->delete();
        return back()->with('success', 'Votre catégorie a été supprimée');

    }
}
