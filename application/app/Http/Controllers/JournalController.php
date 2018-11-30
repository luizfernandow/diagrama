<?php

namespace App\Http\Controllers;

use App\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $journals = Journal::orderBy('short_title', 'ASC')->paginate(5);
        return view('journal.index', compact('journals'))
               ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $path = $request->file('csv_journals')->getRealPath();
        $data = array_map('str_getcsv', file($path));
        $data = array_map(function($value) {
            return explode("\t", $value[0]);
        }, $data);
        foreach ($data as $key => $value) {
            Journal::firstOrCreate([
                'symbol' => array_get($value, 0, null),
                'issn' => array_get($value, 1, null),
                'print_issn' => array_get($value, 2, null),
                'e_issn' => array_get($value, 3, null),
                'collection_name' => array_get($value, 4, null),
                'acronym' => array_get($value, 5, null),
                'short_title' => array_get($value, 6, null),
                'title' => array_get($value, 7, null),
                'short_title_nlm' => array_get($value, 8, null),
                'publisher' => array_get($value, 9, null),
                'url_journal_page' => array_get($value, 10, null),
                'license' => array_get($value, 11, null),
            ]);
        }

        return redirect('journals');
    }
}
