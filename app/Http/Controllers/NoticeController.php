<?php

namespace App\Http\Controllers;

use App\Edition;
use App\Article;
use App\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
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

        $notices = Notice::orderBy('created_at', 'DESC')->get();


        // return $notices;
        return view('notices.notices-index', [
            'year' => $year,
            'currentYear' => $currentYear,
            'currentMonth' => $currentMonth,
            'nextMonth' => $nextMonth,
            'editions' => $export_editions,
            'notices' => $notices,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notices.notices-create', [
            'notice' => new Notice(),
        ]);
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
            'bodytext' => 'required',
        ]);
        Notice::create($fields);
        return redirect()->route('new-notice.index', [
            'notice' => new Notice(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        //
    }
}
