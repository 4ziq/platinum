<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Barryvdh\DomPDF\Facade\Pdf;

class ManagePublicationController extends Controller
{
    public function index(){
        $publications = Publication::all();
        return view('scholar-scroll.Publication.index', compact('publications'));
       
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
        return view('scholar-scroll.Publication.edit', compact('publication'));

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

    public function search(Request $request){
        $query = $request->input('query');
        $publications = Publication::where('publication_title', 'like', '%' . $query .'%')
                                    ->orWhere('publication_author', 'like', '%' . $query . '%')
                                    ->orWhere('publication_genre', 'like', '%' . $query . '%')
                                    ->orWhere('publication_publisher', 'like', '%' . $query . '%')
                                    ->get();

        //Check if any result is found
        if($publications->isEmpty()){
            //return to view which says no result found
            //return view('scholar-scroll.Publication.index')->with('message', 'No results were found.');

            return view('scholar-scroll.Publication.index',[
                'publications' => $publications,
                'message' => 'No results found for " ' . $query .' ".'
            ]);
        }

        return view('scholar-scroll.Publication.index', ['publications' => $publications]);
    }

    public function showReport(){
        $publications = Publication::all(); 
        return view('scholar-scroll.Publication.report', compact('publications'));
    }
}
