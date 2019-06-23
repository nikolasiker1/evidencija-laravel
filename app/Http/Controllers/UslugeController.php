<?php

namespace App\Http\Controllers;

use App\Usluga;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UslugeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uslugas = DB::table('uslugas')
            ->select('uslugas.*')
            ->paginate(5);

        $stampaj = Input::get('stampaj');
        return view('usluge.index', compact('uslugas', 'stampaj'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usluge.create');
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
            'tip' => 'required',
            'cena' => 'required',
            'trajanje' => 'required',
        ]);
        try {
            Usluga::create($request->all());
            DB::commit();
            return redirect()->route('usluge.index')
                ->with('success', 'Usluga je uspesno sacuvana.');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('usluge.index')
                ->with('error', 'Usluga nije sacuvana.');
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
        $usluga = Zaposleni::find($id);
        return view('usluge.show', compact('usluge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $usluga = Usluga::find($id);
        return view('usluge.edit', compact('usluga'));
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
        DB::beginTransaction();
        request()->validate([
            'tip' => 'required',
            'cena' => 'required',
            'trajanje' => 'required',
        ]);
        try {
            Usluga::find($id)->update($request->all());
            DB::commit();
            return redirect()->route('usluge.index')
                ->with('success', 'Usluga je uspesno sacuvana.');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('usluge.index')
                ->with('error', 'Usluga nije sacuvana.');
        }

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
            Usluga::find($id)->delete();
            DB::commit();
            return redirect()->route('usluge.index')
                ->with('success', 'Usluga je uspesno
            obrisana.');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('usluge.index')
                ->with('error', 'Usluga nije uspesno
            obrisana.');
        }
    }
}
