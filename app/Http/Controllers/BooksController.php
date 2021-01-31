<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{

public function index(){
		$books = Books::latest()->paginate(5);

		return view('books.index', compact('books'));
	}

	 public function create(){

    	return view('books.create');
    }

    public function store(Request $request){
    	$request->validate([
    		'book_title' => 'required',
    		'author_name'=>'required',
    		'student_name'=>'required',
    		'contact_number' => 'required',
    		'issue_books'=>'required',
    		'return_books'=>'required'
    	]);

    	Books::create($request->all());

    	return redirect()->route('books.index')->with('success', 'Profile Created Successflly!');
    }

     public function show(Books $book)
    {
        return view('books.Show',compact('book'));
           
    }

    public function edit(Books $book){
 		return view('books.edit', compact('book'));
 	}


 	public function update(Request $request, Books $book){
 		$request->validate([
    		'book_title' => 'required',
    		'author_name'=>'required',
    		'student_name'=>'required',
    		'contact_number' => 'required',
    		'issue_books'=>'required',
    		'return_books'=>'required'

    	]);

 		
    	$book->update($request->all());

    	return redirect()->route('books.index')->with('success', 'Profile Updated Successflly!');
 	}

 	public function destroy(Books $book){

 		$book->delete();
 		return redirect()->route('books.index')->with('success', 'Profile Deleted Successflly!');
 	}
}