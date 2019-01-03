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
        $title = $request->input('title', null);
        $journals = Journal::orderBy('short_title', 'ASC');
        
        if ($title) {
            $journals->where('short_title', 'like', '%' . $title . '%');    
        }

        $journals = $journals->paginate(20);
        return view('journal.index', compact('journals', 'title'))
               ->with('i', ($request->input('page', 1) - 1) * 20);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   
        $request->validate([
            'csv_journals' => 'required|mimes:csv,txt',
        ]);

        $path = $request->file('csv_journals')->getRealPath();
        try {
            $data = array_map('str_getcsv', file($path));
            $data = array_map(function($value) {
                return explode("\t", $value[0]);
            }, $data);            
        } catch (Exception $e) {
            $data = [];
        }
        foreach ($data as $key => $value) {
            if (count($value) > 5) {
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
        }

        return redirect('journals');
    }
}
