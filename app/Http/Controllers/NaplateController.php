<?php

namespace App\Http\Controllers;

use App\Zaposleni;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Symfony\Component\Console\Output\ConsoleOutput;


class NaplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $naplatas = DB::table('naplatas')
            ->select('naplatas.*')
            ->paginate(5);

        $stampaj = Input::get('stampaj');
        return view('naplate.index', compact('naplatas', 'stampaj'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zaposlenis = Zaposleni::pluck('ime');

        return view('naplate.create', compact('zaposlenis'));
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
        $naplata = Zaposleni::find($id);
        return view('naplate.show', compact('naplata'));
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
            Usluga::find($id)->delete();
            DB::commit();
            return redirect()->route('naplate.index')
                ->with('success', 'Naplata je uspesno
            obrisana.');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('naplate.index')
                ->with('error', 'Naplata nije uspesno
            obrisana.');
        }
    }
}
