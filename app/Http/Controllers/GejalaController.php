<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gejala;
use PDF;
use Carbon\Carbon;

class GejalaController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $gejalas = Gejala::orderBy('updated_at', 'desc')
            ->paginate(20);

        if ($request->exists('page'))
        {
            $page = $request->input('page');;
        } else {
            $page = 1;
        }

        $no = (20*$page) - 19;

        $message = 'Tidak ada data gejala';

        $label = 'Index gejala : '.$gejalas->total();

        return view('gejala.index', compact('gejalas', 'no', 'message', 'label'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $label = 'Create gejala';

        return view('gejala.create', compact('label'));
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
            'nama' => 'required|min:5|unique:gejalas,nama',
        ]);

        $latest = Gejala::latest('kd')->first();

        $new_kd = count($latest) ? substr($latest->kd, 0, 1).(substr($latest->kd, 1, 3)+1) : 'G01' ;

        $gejala = new Gejala;
        $gejala->kd = $new_kd;
        $gejala->nama = $request->input('nama');
        $gejala->save();

        session()->flash('notif', 'Data gejala baru disimpan');

        return redirect()->route('gejala.index');
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
        $gejala = Gejala::findOrFail($id);

        $label = 'Edit gejala : '.$gejala->kd;

        return view('gejala.edit', compact('gejala', 'label'));
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
        $gejala = Gejala::findOrFail($id);

        $this->validate($request, [
            'nama' => 'required|min:5|unique:gejalas,nama,'.$gejala->id.',kd',
        ]);

        $gejala->nama = $request->input('nama');
        $gejala->save();

        session()->flash('notif', 'Data gejala lama diperbaharui');

        return redirect()->route('gejala.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();

        session()->flash('notif', 'Data gejala dihapus');

        return redirect()->route('gejala.index');
    }

    /**
     * pencarian
     */
    public function search(Request $request)
    {
        if ($request->has('cari')) {

            $gejalas = Gejala::where('nama', 'like', '%'.$request->input('cari').'%')
            	->orWhere('kd', 'like', '%'.$request->input('cari').'%')
                ->paginate(20);

            $gejalas->setPath('search?q='.$request->input('cari'));

            if ($request->exists('page'))
            {
                $page = $request->input('page');;
            } else {
                $page = 1;
            }

            $no = (20*$page) - 19;

            $label = '<a href="'.route('gejala.index').'" class="btn btn-xs btn-default"><i class="fa fa-arrow-left"></i></a> Pencarian gejala : '.$gejalas->total();

            $message = 'Pencarian <strong>'.$request->input('cari').'</strong> tidak ditemukan. <br>. <a href="'.route('gejala.index').'">Kembali</a>';

            return view('gejala.index', compact('gejalas', 'no', 'message', 'label'));
        }else{
            $this->validate($request, [
                'cari' => 'required'
            ]);
        }
    }

    public function cetakPDF()
    {
        $gejalas = Gejala::orderBy('kd', 'asc')->get();

        $no = 1;

        $pdf = PDF::loadView('gejala.cetakpdf',compact('gejalas', 'no'))
            ->setPaper('a4', 'potrait');
 
        return $pdf->stream('report_gejala-'.Carbon::now()->format('Y_m_d-U').'.pdf');
    }
}
