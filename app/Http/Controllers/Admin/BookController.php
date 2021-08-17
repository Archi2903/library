<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $book = Book::make();
        $authorList = Author::select('id', 'firstName', 'lastName')
            ->get();
        return view('admin.books.edit', compact('book', 'authorList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['bookname'], '-');
        }
        $book = Book::create($data);
        $authorList = Author::select('id', 'firstName', 'lastName')
            ->get();
        return redirect()
            ->route('library.admin.books.edit', compact('book', 'authorList', $book->id))
            ->with(['success' => 'Book успешна создана!']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $authorList = Author::select('id', 'firstName', 'lastName')
            ->get();
        return view('admin.books.edit', compact('book', 'authorList'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $authorList = Author::select('id', 'firstName', 'lastName')
            ->get();
        $data = $request->all();
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['bookname'], '-');
        }

        $book->fill($data)->save();
        return redirect()
            ->route('library.admin.books.edit', compact('book', 'authorList'))
            ->with(['success' => 'Book успешна изменена!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Book::find($id)->forceDelete();
        return redirect()
            ->route('library.admin.books.index')
            ->with(['success' => "Book id=[$id] удалёна!"]);
    }
}
