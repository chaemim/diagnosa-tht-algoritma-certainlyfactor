<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Riwayat;
use PDF;
use Carbon\Carbon;

class RiwayatController extends Controller
{
    public function index(Request $request)
    {
        $message = 'Tidak ada data riwayat';

        $riwayats = Riwayat::orderBy('updated_at', 'desc')->paginate(20);

        if ($request->exists('page'))
        {
            $page = $request->input('page');;
        } else {
            $page = 1;
        }

        $no = (20*$page) - 19;

        $label = 'Index riwayat : '.$riwayats->total();

        return view('konsultasi.riwayat', compact('label', 'no', 'riwayats', 'message'));
    }

    public function destroy($id)
    {
        $riwayat = Riwayat::findOrFail($id);
        $riwayat->delete();

        session()->flash('notif', 'Data riwayat dihapus');

        return redirect()->route('riwayat.index');
    }

    public function search(Request $request)
    {
        if ($request->has('cari')) {

            $riwayats = Riwayat::where('nama', 'like', '%'.$request->input('cari').'%')
                ->orWhere('gejala', 'like', '%'.$request->input('cari').'%')
                ->orWhere('kerusakan', 'like', '%'.$request->input('cari').'%')
                ->orWhere('solusi', 'like', '%'.$request->input('cari').'%')
                ->orWhere('kepastian', 'like', '%'.$request->input('cari').'%')
                ->orWhere('nilai', 'like', '%'.$request->input('cari').'%')
                ->paginate(20);

            $riwayats->setPath('search?q='.$request->input('cari'));

            if ($request->exists('page'))
            {
                $page = $request->input('page');;
            } else {
                $page = 1;
            }

            $no = (20*$page) - 19;

            $label = '<a href="'.route('riwayat.index').'" class="btn btn-xs btn-default"><i class="fa fa-arrow-left"></i></a> Pencarian riwayat : '.$riwayats->total();

            $message = 'Pencarian <strong>'.$request->input('cari').'</strong> tidak ditemukan. <br>. <a href="'.route('riwayat.index').'">Kembali</a>';

            return view('konsultasi.riwayat', compact('riwayats', 'no', 'message', 'label'));
        }else{
            $this->validate($request, [
                'cari' => 'required'
            ]);
        }
    }

    public function cetakPDF()
    {
        $riwayats = Riwayat::orderBy('updated_at', 'desc')->get();

        $no = 1;

        $pdf = PDF::loadView('riwayat.cetakpdf',compact('riwayats', 'no'))
            ->setPaper('a4', 'potrait');
 
        return $pdf->stream('report_riwayat-'.Carbon::now()->format('Y_m_d-U').'.pdf');
    }
}
