<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kerusakan;
use PDF;
use Carbon\Carbon;

class KerusakanController extends Controller
{    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kerusakans = Kerusakan::orderBy('updated_at', 'desc')
            ->paginate(20);

        if ($request->exists('page'))
        {
            $page = $request->input('page');;
        } else {
            $page = 1;
        }

        $no = (20*$page) - 19;

        $message = 'Tidak ada data kerusakan';

        $label = 'Index kerusakan : '.$kerusakans->total();

        return view('kerusakan.index', compact('kerusakans', 'no', 'message', 'label'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $label = 'Create kerusakan';

        return view('kerusakan.create', compact('label'));
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
            'nama' => 'required|min:5|unique:kerusakans,nama',
        ]);

        $latest = Kerusakan::latest('kd')->first();

        $new_kd = count($latest) ? substr($latest->kd, 0, 1).(substr($latest->kd, 1, 3)+1) : 'K01' ;

        $kerusakan = new kerusakan;
        $kerusakan->kd = $new_kd;
        $kerusakan->nama = $request->input('nama');
        $kerusakan->save();

        session()->flash('notif', 'Data kerusakan baru disimpan');

        return redirect()->route('kerusakan.index');
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
        $kerusakan = Kerusakan::findOrFail($id);

        $label = 'Edit kerusakan : '.$kerusakan->kd;

        return view('kerusakan.edit', compact('kerusakan', 'label'));
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
        $kerusakan = Kerusakan::findOrFail($id);

        $this->validate($request, [
            'nama' => 'required|min:5|unique:kerusakans,nama,'.$kerusakan->id.',kd',
        ]);

        $kerusakan->nama = $request->input('nama');
        $kerusakan->save();

        session()->flash('notif', 'Data kerusakan lama diperbaharui');

        return redirect()->route('kerusakan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kerusakan = Kerusakan::findOrFail($id);
        $kerusakan->delete();

        session()->flash('notif', 'Data kerusakan dihapus');

        return redirect()->route('kerusakan.index');
    }

    /**
     * pencarian
     */
    public function search(Request $request)
    {
        if ($request->has('cari')) {

            $kerusakans = Kerusakan::where('nama', 'like', '%'.$request->input('cari').'%')
            	->orWhere('kd', 'like', '%'.$request->input('cari').'%')
                ->paginate(20);

            $kerusakans->setPath('search?q='.$request->input('cari'));

            if ($request->exists('page'))
            {
                $page = $request->input('page');;
            } else {
                $page = 1;
            }

            $no = (20*$page) - 19;

            $label = '<a href="'.route('kerusakan.index').'" class="btn btn-xs btn-default"><i class="fa fa-arrow-left"></i></a> Pencarian kerusakan : '.$kerusakans->total();

            $message = 'Pencarian <strong>'.$request->input('cari').'</strong> tidak ditemukan. <br>. <a href="'.route('kerusakan.index').'">Kembali</a>';

            return view('kerusakan.index', compact('kerusakans', 'no', 'message', 'label'));
        }else{
            $this->validate($request, [
                'cari' => 'required'
            ]);
        }
    }

    public function cetakPDF()
    {
        $kerusakans = Kerusakan::orderBy('kd', 'asc')->get();

        $no = 1;

        $pdf = PDF::loadView('kerusakan.cetakpdf',compact('kerusakans', 'no'))
            ->setPaper('a4', 'potrait');
 
        return $pdf->stream('report_kerusakan-'.Carbon::now()->format('Y_m_d-U').'.pdf');
    }
}
