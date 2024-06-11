<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;

class PublicationController extends Controller
{
    public function index(){
        $publication = Publication::all();
        return view('scholar-scroll.Publication.index', ['publication' => $publication]);
       
    }

    public function create(){
        return view('scholar-scroll.Publication.create');
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

        Publication::create($data);

        return redirect(route('publication.index'));
    
    }

    public function edit(Publication $publication){
        return view('scholar-scroll.publication.edit', compact('publication'));

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

        return redirect(route('publication.index'))->with('success', 'Publication Updated Successfully');
    }

    public function destroy(Publication $publication){
        $publication->delete();
        return redirect(route('publication.index'))->with('success', 'Publication delete successfully');
    }
}
