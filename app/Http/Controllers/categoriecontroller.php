<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class categoriecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("categorie.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add_cat = new categorie();
        $add_cat->nom = $request->nom;
        $add_cat->ref = $request->ref;
        $add_cat->desconte = $request->desconte;
        $add_cat->statut = $request->statut==TRUE ? "1":"0";
        $add_cat->popularite = $request->popularite==TRUE ? "1":"0";
         if($request->hasFile('photo')){
            $file = $request->file('photo');
             $name = time().'.'.$file->getClientOriginalExtension();
               $file->move('categorie',$name);
                 $add_cat->photo = $name;
         }
         $add_cat->save();
         return response()->json(["status"=>200,"message"=>"Category saved successfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $show_cat = categorie::all();
        return view('categorie.show',['show_cat'=>$show_cat]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_cat = categorie::find($id);
        return view('categorie.edit',["edit_cat"=>$edit_cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $add_cat =  categorie::find($id);
        $add_cat->nom = $request->nom;
        $add_cat->ref = $request->ref;
        $add_cat->desconte = $request->desconte;
        $add_cat->statut = $request->statut==TRUE ? "1":"0";
        $add_cat->popularite = $request->popularite==TRUE ? "1":"0";
         if($request->hasFile('photo')){
            $file = $request->file('photo');
             $name = time().'.'.$file->getClientOriginalExtension();
               $file->move('categorie',$name);
                 $add_cat->photo = $name;
         }
         $add_cat->update();
         return response()->json(["status"=>200,"message"=>"Category Modified successfully!"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        categorie::find($id)->delete();
    }

    public function restore_cat(){
        categorie::withTrashed()->restore();
    }

    public function delete_multiple(Request $request){
        categorie::whereIn('id',explode(',',$request->stock_data))->delete();
         return response()->json();
    }
}
