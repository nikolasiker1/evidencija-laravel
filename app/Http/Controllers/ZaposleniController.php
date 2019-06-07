<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zaposleni;
use DB;
use Illuminate\Support\Facades\Input;


class ZaposleniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        if ($search == '') {
            $zaposleni = DB::table('zaposleni')
            ->select('zaposleni.*')
            ->paginate(5);
            } else {
            $zaposleni = DB::table('zaposleni')
            ->select('zaposleni.*')
            ->where('zaposleni.ime', 'like', '%'.$search.'%')
            ->paginate(5);
            }
            $stampaj = Input::get('stampaj');
            return view('zaposleni.index',compact('zaposleni', 'stampaj'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $zaposleni = Zaposleni::find($id);
        return view('zaposleni.show', compact('zaposleni'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
