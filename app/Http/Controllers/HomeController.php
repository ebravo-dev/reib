<?php

namespace App\Http\Controllers;

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
        $year = currentYear();
        $currentMonth = toEsp(currentMonth());
        $nextMonth = toEsp((currentMonth() + 2) % 12);
        return view('home.home-index', [
            'year' => $year,
            'currentMonth' => $currentMonth,
            'nextMonth' => $nextMonth,
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
