<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $authors = Author::select('id', 'firstName', 'lastName', 'dateBirth', 'created_at')
            ->withCount('books')
            ->get();

        return view('admin.authors.index', compact('authors'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $author = Author::make();
        return view('admin.authors.edit', compact('author'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //Запись
        $data = $request->input();
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['firstName'], '-');
        }
        $author = Author::create($data);
        return redirect()
            ->route('library.admin.authors.edit', compact('author', $author->id))
            ->with(['success' => 'Автор успешно создан!']);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public
    function show($id)
    {
        dd(__METHOD__);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $author = Author::find($id);
        return view('admin.authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public
    function update(Request $request, $id)
    {
        $author = Author::find($id);
        //Получение данных после изменения
        $data = $request->all();
        //условие автопрописи slug
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['firstName'], '-');
        }
        //Перезапись данных с сохранением
        $author->fill($data)->save();
        return redirect()
            ->route('library.admin.authors.edit', compact('author'))
            ->with(['success' => 'Успешно сохранено!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Author::find($id)->destroy();
        return redirect()
            ->route('library.admin.authors.index')
            ->with(['success' => "Автор id=[$id] удалён!"]);

    }
}
