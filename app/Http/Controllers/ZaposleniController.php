<?php

namespace App\Http\Controllers;

use App\Zaposleni;
use DB;
use Illuminate\Http\Request;
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
                ->where('zaposlenis.ime', 'like', '%' . $search . '%')
                ->paginate(5);
        }
        $stampaj = Input::get('stampaj');
        return view('zaposleni.index', compact('zaposlenis', 'stampaj'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zaposleni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        request()->validate([
            'ime' => 'required',
            'prezime' => 'required',
            'email' => 'required',
            'broj_telefona' => 'required',
        ]);
        try {
            Zaposleni::create($request->all());
            DB::commit();
            return redirect()->route('zaposleni.index')
                ->with('success', 'Zaposleni je uspesno sacuvan.');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('zaposleni.index')
                ->with('error', 'Zaposleni nije sacuvan.');
        }

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
        DB::beginTransaction();
        try {
            Zaposleni::find($id)->delete();
            DB::commit();
            return redirect()->route('zaposleni.index')
                ->with('success', 'Zaposleni je uspesno
            obrisan.');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('zaposleni.index')
                ->with('error', 'Zaposleni nije uspesno
            obrisan.');
        }
    }
}
