<?php

namespace App\Http\Controllers;

use App\Edition;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\Types\Object_;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

        return view('home.home-index', [
            'year' => $year,
            'currentYear' => $currentYear,
            'currentMonth' => $currentMonth,
            'nextMonth' => $nextMonth,
            'editions' => $export_editions,
        ]);
    }

    public function store(Request $request)
    {
        $nombre = $request['nombre'];
        $correo = $request['email'];
        $asunto = $request['subject'];
        $mensaje = $request['message'];
        mail('ederjgb94@gmail.com', "asunto", $mensaje);
        return 'Mensaje Enviado';
    }
}
