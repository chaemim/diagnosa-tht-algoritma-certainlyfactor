<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Solusi;
use PDF;
use Carbon\Carbon;

class SolusiController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $solusis = Solusi::orderBy('updated_at', 'desc')
            ->paginate(20);

        if ($request->exists('page'))
        {
            $page = $request->input('page');;
        } else {
            $page = 1;
        }

        $no = (20*$page) - 19;

        $message = 'Tidak ada data solusi';

        $label = 'Index solusi : '.$solusis->total();

        return view('solusi.index', compact('solusis', 'no', 'message', 'label'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $label = 'Create solusi';

        return view('solusi.create', compact('label'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|unique:solusis,nama',
        ]);

        $latest = Solusi::latest('kd')->first();

        $new_kd = count($latest) ? substr($latest->kd, 0, 1).(substr($latest->kd, 1, 3)+1) : 'S01' ;

        $solusi = new solusi;
        $solusi->kd = $new_kd;
        $solusi->nama = $request->input('nama');
        $solusi->save();

        session()->flash('notif', 'Data solusi baru disimpan');

        return redirect()->route('solusi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solusi = Solusi::findOrFail($id);

        $label = 'Edit solusi : '.$solusi->kd;

        return view('solusi.edit', compact('solusi', 'label'));
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
        $solusi = Solusi::findOrFail($id);

        $this->validate($request, [
            'nama' => 'required|min:5|unique:solusis,nama,'.$solusi->id.',kd',
        ]);

        $solusi->nama = $request->input('nama');
        $solusi->save();

        session()->flash('notif', 'Data solusi lama diperbaharui');

        return redirect()->route('solusi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solusi = Solusi::findOrFail($id);
        $solusi->delete();

        session()->flash('notif', 'Data solusi dihapus');

        return redirect()->route('solusi.index');
    }

    /**
     * pencarian
     */
    public function search(Request $request)
    {
        if ($request->has('cari')) {

            $solusis = Solusi::where('nama', 'like', '%'.$request->input('cari').'%')
            	->orWhere('kd', 'like', '%'.$request->input('cari').'%')
                ->paginate(20);

            $solusis->setPath('search?q='.$request->input('cari'));

            if ($request->exists('page'))
            {
                $page = $request->input('page');;
            } else {
                $page = 1;
            }

            $no = (20*$page) - 19;

            $label = '<a href="'.route('solusi.index').'" class="btn btn-xs btn-default"><i class="fa fa-arrow-left"></i></a> Pencarian solusi : '.$solusis->total();

            $message = 'Pencarian <strong>'.$request->input('cari').'</strong> tidak ditemukan. <br>. <a href="'.route('solusi.index').'">Kembali</a>';

            return view('solusi.index', compact('solusis', 'no', 'message', 'label'));
        }else{
            $this->validate($request, [
                'cari' => 'required'
            ]);
        }
    }

    public function cetakPDF()
    {
        $solusis = Solusi::orderBy('kd', 'asc')->get();

        $no = 1;

        $pdf = PDF::loadView('solusi.cetakpdf',compact('solusis', 'no'))
            ->setPaper('a4', 'potrait');
 
        return $pdf->stream('report_solusi-'.Carbon::now()->format('Y_m_d-U').'.pdf');
    }
}
