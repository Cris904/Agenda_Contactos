<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return Inertia::render(
           'Books/Index',
           [
              'books' => $books
           ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render(
            'Books/Create'
         );
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
            'name' => 'required',
            'phone' => 'required', 
            'date_birth' => 'required', 
            'gender' => 'required', 
            'addres' => 'required', 
            'age' => 'required', 
            'email' => 'required'
         ]);
         Book::create([
            'name' => $request->name,
            'phone' => $request->phone, 
            'date_birth' => $request->date_birth, 
            'gender' => $request->gender, 
            'addres' => $request->addres, 
            'age' => $request->age, 
            'email' => $request->email
         ]);

         sleep(1);
        return redirect()->route('books.index')->with('message', 'Book Created Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return Inertia::render(
            'Books/Edit',
            [
               'book' => $book
            ]
         );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required', 
            'date_birth' => 'required', 
            'gender' => 'required', 
            'addres' => 'required', 
            'age' => 'required', 
            'email' => 'required'
         ]);
         $book->name = $request->name;
         $book->phone = $request->phone; 
         $book->date_birth = $request->date_birth; 
         $book->gender = $request->gender;
         $book->addres = $request->addres;
         $book->age = $request->age;
         $book->email = $request->email;
         $book->save();
         sleep(1);
         return redirect()->route('books.index')->with('message', 'Book Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        sleep(1);
        return redirect()->route('books.index')->with('message', 'Book Delete Successfully');
    }
}