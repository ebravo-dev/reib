<?php

namespace App\Http\Controllers;

use App\Article;
use App\Edition;
use Illuminate\Http\Request;

class ShowarticleController extends Controller
{
    public function index(Request $request)
    {
        $year = $request->year;
        $month = monthInNumber($request->month);
        $articles = Article::where('year', $year)
            ->where('month', $month)
            ->orderBy('indexnumber', 'ASC')
            ->get();
        $volume = "";
        $number = "";
        $portada = "";
        if (isset($articles[0])) {
            $volume = $articles[0]['volume'];
            $number = $articles[0]['number'];
            $portada = $articles[0]['linkheader'];
        }

        $editions = Edition::orderBy('year', 'DESC')->orderBy('month', 'ASC')->get();
        $export_editions = [];
        foreach ($editions as $edition) {
            if (!isset($export_editions[$edition['year']]))
                $export_editions[$edition['year']] = [];
            array_push($export_editions[$edition['year']], toEsp($edition['month']));
        }
        return view('editions.editions-show', [
            'year' => $year,
            'currentMonth' => toEsp($month),
            'editions' => $export_editions,
            'articles' => $articles,
            'volume' => $volume,
            'number' => $number,
            'portada' => $portada,
        ]);
    }
}
