<?php

namespace App\Http\Controllers;

use App\Edition;
use App\Article;
use App\Notice;
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
    public function index(Request $request)
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

        $notices = Notice::orderBy('created_at', 'DESC')->get();

        return view('home.home-index', [
            'year' => $year,
            'currentYear' => $currentYear,
            'currentMonth' => $currentMonth,
            'nextMonth' => $nextMonth,
            'editions' => $export_editions,
            'uploadflag' => $request['uploadflag'],
            'lastnotice' => $notices[0],
        ]);
    }

    public function store(Request $request)
    {


        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]
        );

        $nombre = $request['name'];
        $correo = $request['email'];
        $asunto = $request['subject'];
        $mensaje = $request['message'];

        $header = "From: <xhonane.com>" . "\r\n";
        $header .= "Content-type: text/html;  charset=utf-8";

        mail(
            'ederjgb94@gmail.com',
            $asunto,
            'Envia: ' . $nombre . '<br>' .
                'Contacto: ' . $correo . '<br><br>' .
                'Mensaje:<br>' . $mensaje,
            $header
        );
        return redirect()->route('home.index', ['uploadflag' => 2]);
    }
}
