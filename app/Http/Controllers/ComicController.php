<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'series' => 'required|max:255|min:3',
            'thumb'=> 'required|max:255|min:3',
            'price'=> 'required|max:20|min:3',
            'type'=> 'required|max:50|min:3',
        ]);
        $form_data = $request->all();
        
        /* $new_comic = new Comic(); */

        /* $new_comic->thumb = $form_data["thumb"];
        $new_comic->price = $form_data["price"];
        $new_comic->series = $form_data["series"];
        $new_comic->type = $form_data["type"]; */

        /* $new_comic->fill($form_data); */
        
        $new_comic = Comic::create($form_data);

        /* $new_comic->save(); */

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param object Comic $id
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact("comic"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit(Comic $comic)
    {
        return view("comics.edit", compact("comic"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        /* $comic = Comic::find($id); */

        $form_data = $request->all();

        /* $comic->thumb = $form_data["thumb"];
        $comic->price = $form_data["price"];
        $comic->series = $form_data["series"];
        $comic->type = $form_data["type"]; */

        $comic->update($form_data);

        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        
        return redirect()->route('comics.index');
    }
}
