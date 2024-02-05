<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Http\Request;
use App\Models\Comic;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {



        // $data = $request->all();

        $data = $request->validated();

        $comic = new Comic();

        //  $comic->title = $data['title'];
        //  $comic->description = $data['description'];
        //$comic->thumb = $data['thumb'];
        //$comic->price = $data['price'];
        //$comic->series = $data['series'];
        //$comic->sale_date = $data['sale_date'];
        //$comic->type = $data['type'];
        //$comic->writers = $data['writers'];
        //$comic->artists = $data['artists'];

        $comic->fill($data);
        $comic->save();




        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        if ($comic === null) {
            abort(404);
        }

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data = $request->validated();

        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    /* private function validation($data)
    {
        $validator = Validator::make($data, [

            'title' => 'required|max:40',
            'type' => [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ],
            'price' => 'required|numeric',
            'thumb' => 'required|url|max:250',
            'description' => 'required|max:999',
            'sale_date' => 'required|date',

        ])->validate();
        return $validator;
    } */
}
