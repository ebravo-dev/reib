<?php

namespace App\Http\Controllers;

use App\Edition;
use App\Article;
use Illuminate\Http\Request;

class SearchBarController extends Controller
{
    //

    function index()
    {
        $articles = Article::orderBy('year', 'DESC')
            ->orderBy('month', 'DESC')
            ->get();

        $year = currentYear();
        $currentMonth = toEsp($articles[0]['month']);
        $currentYear = $articles[0]['year'];
        $nextMonth = toEsp((currentMonth() + 2) % 12);

        $editions = Edition::orderBy('year', 'DESC')->orderBy('month', 'ASC')->get();
        $export_editions = [];
        foreach ($editions as $edition) {
            if (!isset($export_editions[$edition['year']]))
                $export_editions[$edition['year']] = [];
            array_push($export_editions[$edition['year']], toEsp($edition['month']));
        }


        return view('search.search-index', [
            'year' => $year,
            'currentYear' => $currentYear,
            'currentMonth' => $currentMonth,
            'nextMonth' => $nextMonth,
            'editions' => $export_editions,
        ]);
    }




    function show(Request $request)
    {
        $request->validate([
            'query' => 'required',
        ]);

        $articles = Article::orderBy('year', 'DESC')
            ->orderBy('month', 'DESC')
            ->get();

        $year = currentYear();
        $currentMonth = toEsp($articles[0]['month']);
        $currentYear = $articles[0]['year'];
        $nextMonth = toEsp((currentMonth() + 2) % 12);

        $editions = Edition::orderBy('year', 'DESC')->orderBy('month', 'ASC')->get();
        $export_editions = [];
        foreach ($editions as $edition) {
            if (!isset($export_editions[$edition['year']]))
                $export_editions[$edition['year']] = [];
            array_push($export_editions[$edition['year']], toEsp($edition['month']));
        }

        $keywords = explode(" ", $request['query']);

        $export_articles = [];
        for ($i = 0; $i < count($keywords); $i++) {
            $articles = Article::where('title', 'like', '%' . $keywords[$i] . '%')
                ->orWhere('authors', 'like', '%' . $keywords[$i] . '%')
                ->orWhere('institute', 'like', '%' . $keywords[$i] . '%')
                ->orWhere('eskeywords', 'like', '%' . $keywords[$i] . '%')
                ->orWhere('enkeywords', 'like', '%' . $keywords[$i] . '%')
                ->orWhere('esabstract', 'like', '%' . $keywords[$i] . '%')
                ->orWhere('enabstract', 'like', '%' . $keywords[$i] . '%')
                ->orWhere('category', 'like', '%' . $keywords[$i] . '%')->get();
            foreach ($articles as $article) {
                if (!isset($export_articles[$article['id']])) {
                    $export_articles[$article['id']] = $article;
                }
                $export_articles[$article['id']]['title'] = highlightWords($export_articles[$article['id']]['title'], $keywords[$i]);
                $export_articles[$article['id']]['authors'] = highlightWords($export_articles[$article['id']]['authors'], $keywords[$i]);
                $export_articles[$article['id']]['institute'] = highlightWords($export_articles[$article['id']]['institute'], $keywords[$i]);
                $export_articles[$article['id']]['esabstract'] = highlightWords($export_articles[$article['id']]['esabstract'], $keywords[$i]);
            }
        }


        return view('search.search-show', [
            'year' => $year,
            'currentYear' => $currentYear,
            'currentMonth' => $currentMonth,
            'nextMonth' => $nextMonth,
            'editions' => $export_editions,
            'articles' => $export_articles,
        ]);
    }
}
