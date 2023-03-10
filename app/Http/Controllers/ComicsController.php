<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
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
            'title'=> 'required|min:2|max:100',
            'description'=> 'required|min:2|max:200',
            'thumb'=> 'required|url',
            'price'=> 'required|min:1',
            'series'=> 'required|min:2|max:200',
            'sale_date'=> 'required',
            'type'=> 'required|min:2|max:200',
        ],
    
        [
            'title.required'=> 'Titolo necessario con almeno 2 caratteri',
            'description.required'=> 'Metti la tua descrizione',
            'thumb.required'=> 'Importa il link della tua cover',
            'price.required'=> 'Dai un prezzo al tuo fumetto',
            'series.required'=> 'Numero di serie del fumetto',
            'sale_date.required'=> 'Inserisci la data di Vendita',
            'type.required'=> 'Inserisci il tipo di fumetto'
        ]
    );

        $dataIns = $request->all();
        $newComic = new Comic();
        $newComic->thumb =$dataIns['thumb'];
        $newComic->title =$dataIns['title'];
        $newComic->description =$dataIns['description'];
        $newComic->price =$dataIns['price'];
        $newComic->series =$dataIns['series'];
        $newComic->sale_date =$dataIns['sale_date'];
        $newComic->type =$dataIns['type'];
        $newComic->save();

        return redirect()->route('comics.show', $newComic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $comic=Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', ['comic' => $comic]);
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
        $dataIns = $request->all();
        $comic = Comic::findOrFail($id);
        $Comic = new Comic();
        $Comic->thumb =$dataIns['thumb'];
        $Comic->title =$dataIns['title'];
        $Comic->description =$dataIns['description'];
        $Comic->price =$dataIns['price'];
        $Comic->series =$dataIns['series'];
        $Comic->sale_date =$dataIns['sale_date'];
        $Comic->type =$dataIns['type'];
        $Comic->save();

        return redirect()->route('comics.show', $Comic);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Comic $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
