<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zaposleni;
use Illuminate\Http\Request;
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
            $zaposlenis = DB::table('zaposlenis')
            ->select('zaposlenis.*')
            ->paginate(5);
            } else {
            $zaposlenis = DB::table('zaposlenis')
            ->select('zaposlenis.*')
            ->where('zaposlenis.ime', 'like', '%'.$search.'%')
            ->paginate(5);
            }
            $stampaj = Input::get('stampaj');
            return view('zaposlenis.index',compact('knjigas', 'stampaj'))
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
        return view('zaposlenis.show', compact('zaposleni'));
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
