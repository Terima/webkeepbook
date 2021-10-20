<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function backend_index()
    {
        $books = Book::all();
        return view('backend.books.index', ['books' => $books]);
    }

    public function insert()
    {
        return view('backend.books.insert');
    }

    public function store(Request $request)
    {
        $books = Book::create([
            'slug' => Str::slug($request->title),
            'title' => $request->input('title'),
            'description'=> $request->input('description'),
            'author'=> $request->input('author'),
            'pages'=> $request->input('pages'),
            'pub_year'=> $request->input('pub_year')
        ]);
        return redirect()->route('backend_books');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::where('id', '=', $id)->first();
        return view('backend.books.edit', ['book' => $book]);
    }

    public function update(Request $request, $id)
    {
        $book = Book::where('id', '=', $id)->first();
        $update = [
            'slug' => Str::slug($request->title),
            'title' => $request->input('title'),
            'description'=> $request->input('description'),
            'author'=> $request->input('author'),
            'pages'=> $request->input('pages'),
            'pub_year'=> $request->input('pub_year')
        ];
        $book->update($update);
        return redirect()->route('backend_books');
    }

    public function delete($id)
    {
        $book = Book::where('id', '=', $id)->first();
        $book->delete();
        return redirect()->route('backend_books');
    }
}
