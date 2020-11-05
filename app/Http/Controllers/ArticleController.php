<?php

namespace App\Http\Controllers;

use App\Article;
use App\Edition;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles = Article::latest()->paginate();

        // return view('articles.articles-index', [
        //     'articles' => $articles,
        //     'home' => 'active',
        //     'year' => '2020',
        // ]);
        $year = currentYear();
        $editions = Edition::orderBy('year', 'DESC')->orderBy('month', 'DESC')->get();
        $export_editions = [];
        foreach ($editions as $edition) {
            if (!isset($export_editions[$edition['year']]))
                $export_editions[$edition['year']] = [];
            array_push($export_editions[$edition['year']], toEsp($edition['month']));
        }
        return view('articles.articles-create', [
            'article' => new Article(),
            'editions' => $export_editions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $year = currentYear();
        // return view('articles.create', [
        //     'article' => new Article(),
        //     'year' => $year,
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title' => 'required',
            'authors' => 'required',
            'institute' => 'required',
            'edition' => 'required',
            'volume' => 'required',
            'number' => 'required',
            'eskeywords' => 'required',
            'enkeywords' => 'required',
            'esabstract' => 'required',
            'enabstract' => 'required',
            'enabstract' => 'required',
            'category' => 'required',
            'indexnumber' => 'required',
            'linkpdf' => 'required',
            'linkheader' => 'required',
        ]);
        $aux = explode(" - ", $fields['edition']);
        $fields['month'] = monthInNumber($aux[1]);
        $fields['year'] = $aux[0];
        // return $fields;
        Article::create($fields);
        return redirect()->route('articles.index', [
            'article' => new Article(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
