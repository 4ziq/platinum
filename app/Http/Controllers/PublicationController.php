<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    public function indux(){
        $publication = Publication::all();
        return view('publication.index', ['publication' => $publication]);
       
    }

    public function create(){
        return view('publication.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'publication_author' => 'required',
            'publication_title' => 'required',
            'publication_genre' => 'required',
            'publication_date' => 'required',
            'publication_paper' => 'required',
            'publication_publisher' => 'required',
            'publication_pages' => 'required|numeric',
        ]);

        $newPublication = Publication::create($data);

        return redirect(route('publication.index'));
    
    }

    public function edit(Publication $publication){
        return view('publication.edit', ['publication' => $product]);

    }

    public function update(Publication $publication, Request $request){
        $data = $request->validate([
            'publication_author' => 'required',
            'publication_title' => 'required',
            'publication_genre' => 'required',
            'publication_date' => 'required',
            'publication_paper' => 'required',
            'publication_publisher' => 'required',
            'publication_pages' => 'required|numeric',
        ]);

        $publication->update($data);

        return redirect(route('publication.index'))->wirh('success', 'Publication Updated Successfully');
    }

    public function destroy(Publication $publication){
        $publication->delete();
        return redirect(route('publication.index'))->with('success', 'Publication delete successfully');
    }
}
