<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//models add
use App\Models\Book;
use Session;
use PDF;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::get();
        return view('books.index', ['books' => $books]);
    }
    public function show($id)
    {
        $book = Book::find($id);
        return view('books.show', ['book' => $book]);
    }
    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'isbn' => 'required | min:8 | unique:books',
            'quantity' => 'required',
            'author' => 'required',
            'price' => 'required',
        ]);
        $store = Book::create([
            'name' => $request->name,
            'isbn' => $request->isbn,
            'quantity' => $request->quantity,
            'author' => $request->author,
            'price' => $request->price,
        ]);
        Session::flash('success', 'Book added successfully');
        return back();
    }
    public function edit($id)
    {
        $book = Book::where('id', $id)->first();
        return view('books.edit', ['book' => $book]);
    }
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'isbn' => 'required|min:8',
            'quantity' => 'required',
            'author' => 'required',
            'price' => 'required'
        ]);
        $update = Book::where('id', $id)->update([
            'name' => $request->name,
            'isbn' => $request->isbn,
            'quantity' => $request->quantity,
            'author' => $request->author,
            'price' => $request->price
        ]);
        Session::flash('success', 'Books updated successfully');
        return back();
    }
    public function destroy($id)
    {
        $delete = Book::where('id', $id)->delete();
        Session::flash('success', 'Books deleted successfully');
        return back();
    }
    public function search(Request $request)
    {
        $name = $request->name;
        $books = Book::where('name', 'like', '%' . $name . '%')->get();
        return view('books.index', ['books' => $books]);
    }
    public function generatePdf()
    {
        $books = Book::get();
        $pdf = PDF::loadView('books.download', compact('books'));

        return $pdf->download('Books.pdf');
    }
}
