<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Uploadarticle extends Controller
{
    public function index()
    {
        return view('partials.upload_article');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'fileurl' => 'max:35000|required|file|mimes:pdf,doc,docx',
                'name' => 'required',
                'contact' => 'required',
            ]
        );
        $namefile =  $request->file('fileurl')->store('mails');
        $header = "From: <xhonane.com>" . "\r\n";
        $header .= "Content-type: text/html;  charset=utf-8";
        // mail(
        //     'ederjgb94@gmail.com',
        //     $request['name'],
        //     'Envia: ' . $request['name'] . '<br>' .
        //         'Contacto: ' . $request['contact'] . '<br>' .
        //         'Artículo: http://www.xhonane.com/storage/app/' . $namefile,
        //     $header
        // );
        return redirect()->route('home.index', ['uploadflag' => 1]);
    }
}
