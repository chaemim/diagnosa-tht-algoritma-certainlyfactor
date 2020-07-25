<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aturan;
use App\Kerusakan;
use App\Gejala;
use App\Solusi;
use PDF;
use Carbon\Carbon;

class AturanController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $aturans = Aturan::orderBy('updated_at', 'desc')
            ->paginate(20);

        if ($request->exists('page'))
        {
            $page = $request->input('page');;
        } else {
            $page = 1;
        }

        $no = (20*$page) - 19;

        $message = 'Tidak ada data aturan';

        $label = 'Index aturan : '.$aturans->total();

        return view('aturan.index', compact('aturans', 'no', 'message', 'label'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $label = 'Create aturan';

        $kerusakan_list = Kerusakan::orderBy('nama', 'asc')->pluck('nama', 'kd');
        $gejala_list = Gejala::orderBy('nama', 'asc')->pluck('nama', 'kd');
        $solusi_list = Solusi::orderBy('nama', 'asc')->pluck('nama', 'kd');

        return view('aturan.create', compact('label', 'kerusakan_list', 'gejala_list', 'solusi_list'));
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
            'kerusakan_list' => 'required|exists:kerusakans,kd',
            'gejala_list' => 'required|exists:gejalas,kd',
            'solusi_list' => 'required|exists:solusis,kd',
            'mb' => 'required|numeric',
            'md' => 'required|numeric'
        ]);

        $cekAturan = Aturan::whereHas('kerusakan', function($kerusakan) use($request){
            		$kerusakan->where('kd', 'like', '%'.$request->input('kerusakan_list').'%');
            	})
            	->whereHas('gejala', function($gejala) use($request){
            		$gejala->where('kd', 'like', '%'.$request->input('gejala_list').'%');
            	})
            	->whereHas('solusi', function($solusi) use($request){
            		$solusi->where('kd', 'like', '%'.$request->input('solusi_list').'%');
            	})
            	->get();
        if (count($cekAturan)) {
        	session()->flash('notif', 'Maaf, data aturan telah ada sebelumnya');

        	return redirect()->back();
        }

        $aturan = new Aturan;
        $aturan->kerusakan_kd = $request->input('kerusakan_list');
        $aturan->gejala_kd = $request->input('gejala_list');
        $aturan->solusi_kd = $request->input('solusi_list');
        $aturan->mb = $request->input('mb');
        $aturan->md = $request->input('md');
        $aturan->save();

        session()->flash('notif', 'Data aturan baru disimpan');

        return redirect()->route('aturan.index');
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
        $aturan = Aturan::findOrFail($id);

        $label = 'Edit aturan : '.$aturan->kd;

        $kerusakan_list = Kerusakan::orderBy('nama', 'asc')->pluck('nama', 'kd');
        $gejala_list = Gejala::orderBy('nama', 'asc')->pluck('nama', 'kd');
        $solusi_list = Solusi::orderBy('nama', 'asc')->pluck('nama', 'kd');

        return view('aturan.edit', compact('aturan', 'label', 'kerusakan_list', 'gejala_list', 'solusi_list'));
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
        $aturan = Aturan::findOrFail($id);

        $this->validate($request, [
            'mb' => 'required|numeric',
            'md' => 'required|numeric'
        ]);

        $aturan->mb = $request->input('mb');
        $aturan->md = $request->input('md');
        $aturan->save();

        session()->flash('notif', 'Data aturan lama diperbaharui');

        return redirect()->route('aturan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aturan = Aturan::findOrFail($id);
        $aturan->delete();

        session()->flash('notif', 'Data aturan dihapus');

        return redirect()->route('aturan.index');
    }

    /**
     * pencarian
     */
    public function search(Request $request)
    {
        if ($request->has('cari')) {

            $aturans = Aturan::whereHas('kerusakan', function($kerusakan) use($request){
            		$kerusakan->where('kd', 'like', '%'.$request->input('cari').'%')
            			->orWhere('nama', 'like', '%'.$request->input('cari').'%');
            	})
            	->orWhereHas('gejala', function($gejala) use($request){
            		$gejala->where('kd', 'like', '%'.$request->input('cari').'%')
            			->orWhere('nama', 'like', '%'.$request->input('cari').'%');
            	})
            	->orWhereHas('solusi', function($solusi) use($request){
            		$solusi->where('kd', 'like', '%'.$request->input('cari').'%')
            			->orWhere('nama', 'like', '%'.$request->input('cari').'%');
            	})
                ->paginate(20);

            $aturans->setPath('search?q='.$request->input('cari'));

            if ($request->exists('page'))
            {
                $page = $request->input('page');;
            } else {
                $page = 1;
            }

            $no = (20*$page) - 19;

            $label = '<a href="'.route('aturan.index').'" class="btn btn-xs btn-default"><i class="fa fa-arrow-left"></i></a> Pencarian aturan : '.$aturans->total();

            $message = 'Pencarian <strong>'.$request->input('cari').'</strong> tidak ditemukan. <br>. <a href="'.route('aturan.index').'">Kembali</a>';

            return view('aturan.index', compact('aturans', 'no', 'message', 'label'));
        }else{
            $this->validate($request, [
                'cari' => 'required'
            ]);
        }
    }

    public function cetakPDF()
    {
    	$aturans = Aturan::orderBy('updated_at', 'desc')->get();

    	$no = 1;

    	$pdf = PDF::loadView('aturan.cetakpdf',compact('aturans', 'no'))
    		->setPaper('a4', 'potrait');
 
    	return $pdf->stream('report_aturan-'.Carbon::now()->format('Y_m_d-U').'.pdf');
    }
}
