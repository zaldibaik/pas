<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', ['news' => $news]);
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        News::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('news.index')->with('success', 'News created successfully.');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', ['news' => $news]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $news = News::findOrFail($id);
        $news->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('news.index')->with('success', 'News updated successfully.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'News deleted successfully.');
    }
}

