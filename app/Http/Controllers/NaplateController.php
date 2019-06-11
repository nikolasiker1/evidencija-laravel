<?php

namespace App\Http\Controllers;

use App\Naplata;
use App\Usluga;
use App\Zaposleni;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Symfony\Component\Console\Output\ConsoleOutput;

class NaplateController extends Controller
{

    public $usluga = null;
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
    public function create(Request $request, $id)
    {
        $zaposlenis = Zaposleni::all();
        $usluga = Usluga::findOrFail($id);
        $datum = Carbon::now()->format('d-m-Y');
        $vreme = Carbon::now('Europe/Belgrade')->format('H:i');

        return view('naplate.create', compact(['zaposlenis', 'usluga', 'datum', 'vreme', 'request']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_usluge)
    {
        DB::beginTransaction();

        try {
            Naplata::create([
                'id_zaposlenog' => $request -> input('id_zaposlenog'),
                'id_usluge' => $id_usluge,
                'datum' => $request -> input('datum'),
                'vreme' => $request -> input('vreme')
            ]);
            DB::commit();
            return redirect()->route('naplate.index')
                ->with('success', 'Usluga je uspesno sacuvana.');
        } catch (Exception $e) {
            DB::rollback();
            return redirect()->route('naplate.index')
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
            Naplata::find($id)->delete();
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
