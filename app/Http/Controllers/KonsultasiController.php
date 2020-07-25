<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gejala;
use App\Kerusakan;
use App\Solusi;
use App\Aturan;
use App\Riwayat;
use PDF;
use Carbon\Carbon;

class KonsultasiController extends Controller
{
    public function identitas()
    {
        $label = 'Konsultasi';
        return view('konsultasi.identitas', compact('label'));
    }

    public function identitas_store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:3',
            //'email' => 'required|email',
            //'kontak' => 'required|numeric|digits_between:10,13',
        ]);

        $riwayat = new Riwayat;
        $riwayat->nama = $request->input('nama');
        //$riwayat->email = $request->input('email');
        //$riwayat->kontak = $request->input('kontak');
        $riwayat->save();

        return redirect()->route('konsultasi.gejala', $riwayat->id);
    }

    public function gejala($id)
    {
        $riwayat = Riwayat::findOrFail($id);

    	//$gejalas = Gejala::orderBy('nama', 'asc')->get();
        $gejalas2 = Gejala::orderBy('nama', 'asc')->pluck('nama', 'kd');

    	$label = 'Konsultasi';

    	return view('konsultasi.gejala2', compact('gejalas2', 'label', 'riwayat'));
    }

    public function proses(Request $request, $id)
    {
        $riwayat = Riwayat::findOrFail($id);

        $label = '<a href="'.route('konsultasi.gejala', $riwayat->id).'" class="btn btn-default btn-xs"><i class="fa fa-arrow-left"></i></a> Konsultasi';

    	$this->validate($request, [
            'gejala' => 'required|min:2|exists:gejalas,kd',
        ]);

        $kerusakans = Kerusakan::whereHas('aturans', function($aturans) use($request){
                $aturans->whereIn('gejala_kd', $request->input('gejala'));
            })
            ->get();

        $gejalas = Gejala::whereIn('kd', $request->input('gejala'))->orderBy('nama', 'asc')->get();

        $masterProses = collect([]);

        foreach ($kerusakans as $kerusakan) {
            $aturans = Aturan::with('gejala')->with('solusi')->where('kerusakan_kd', '=', $kerusakan->kd)
                ->whereIn('gejala_kd', $request->input('gejala'))
                ->get();

            if ($aturans->count() == 1) {
                //proses 1
                $cf =  $aturans[0]['mb'] - $aturans[0]['md'];

                //hasil
                $masterProses->push([
                    'kerusakan_kd' => $kerusakan->kd, 
                    'kerusakan_nama' => $kerusakan->nama, 
                    'cf' => number_format($cf, 3), 
                    'kepastian' => kepastian_cf(number_format($cf, 3)),
                    'gejala_count' => $aturans->count(),
                    'gejala_get' => $aturans
                ]);
            }
            elseif ($aturans->count() == 2) {
                //proses 1
                $mblama = $aturans[0]['mb'];
                $mdlama = $aturans[0]['md'];

                //proses 2
                $mbbaru = $aturans[1]['mb'];
                $mdbaru = $aturans[1]['md'];

                $mbsementara = $mblama + ($mbbaru * (1 - $mblama));
                $mdsementara = $mdlama + ($mdbaru * (1 - $mdlama));

                //hasil
                $cf = $mbsementara - $mdsementara;
                $masterProses->push([
                    'kerusakan_kd' => $kerusakan->kd, 
                    'kerusakan_nama' => $kerusakan->nama, 
                    'cf' => number_format($cf, 3), 
                    'kepastian' => kepastian_cf(number_format($cf, 3)),
                    'gejala_count' => $aturans->count(),
                    'gejala_get' => $aturans
                ]);
            }
            elseif ($aturans->count() == 3) {
                //proses 1
                $mblama = $aturans[0]['mb'];
                $mdlama = $aturans[0]['md'];

                //proses 2
                $mbbaru = $aturans[1]['mb'];
                $mdbaru = $aturans[1]['md'];

                $mbsementara = $mblama + ($mbbaru * (1 - $mblama));
                $mdsementara = $mdlama + ($mdbaru * (1 - $mdlama));

                //proses 3
                $mblama = $mbsementara;
                $mdlama = $mdsementara;

                $mbbaru = $aturans[2]['mb'];
                $mdbaru = $aturans[2]['md'];

                $mbsementara = $mblama + ($mbbaru * (1 - $mblama));
                $mdsementara = $mdlama + ($mdbaru * (1 - $mdlama));

                //hasil
                $cf = $mbsementara - $mdsementara;
                $masterProses->push([
                    'kerusakan_kd' => $kerusakan->kd, 
                    'kerusakan_nama' => $kerusakan->nama, 
                    'cf' => number_format($cf, 3), 
                    'kepastian' => kepastian_cf(number_format($cf, 3)),
                    'gejala_count' => $aturans->count(),
                    'gejala_get' => $aturans
                ]);
            }
            else {
                 //proses 1
                $mblama = $aturans[0]['mb'];
                $mdlama = $aturans[0]['md'];

                //proses 2
                $mbbaru = $aturans[1]['mb'];
                $mdbaru = $aturans[1]['md'];

                $mbsementara = $mblama + ($mbbaru * (1 - $mblama));
                $mdsementara = $mdlama + ($mdbaru * (1 - $mdlama));

                for ($i=2; $i < $aturans->count() ; $i++) { 
                    //proses 3++
                    $mblama = $mbsementara;
                    $mdlama = $mdsementara;

                    $mbbaru = $aturans[$i]['mb'];
                    $mdbaru = $aturans[$i]['md'];

                    $mbsementara = $mblama + ($mbbaru * (1 - $mblama));
                    $mdsementara = $mdlama + ($mdbaru * (1 - $mdlama));
                }

                //hasil
                $cf = $mbsementara - $mdsementara;
                $masterProses->push([
                    'kerusakan_kd' => $kerusakan->kd, 
                    'kerusakan_nama' => $kerusakan->nama, 
                    'cf' => number_format($cf, 3), 
                    'kepastian' => kepastian_cf(number_format($cf, 3)),
                    'gejala_count' => $aturans->count(),
                    'gejala_get' => $aturans
                ]);
            }
        }

        $result = $masterProses->sortByDesc(function($a, $b) {
            $c = $a['cf'] - $b['b'];

            return $c;
        })->values();

        $kesimpulan = $result->first();

        $dataGejala = null;
        foreach ($gejalas as $gejalaData) {
            $dataGejala .= $gejalaData->nama.'.<br>';
        }

        $dataSolusi = null;
        foreach($kesimpulan['gejala_get'] as $solusiData) {
             $dataSolusi = $solusiData->solusi->nama.'.<br>';
        }

        $riwayat->kerusakan = $kesimpulan['kerusakan_nama'];
        $riwayat->gejala = $dataGejala;
        $riwayat->solusi = $dataSolusi;
        $riwayat->kepastian = $kesimpulan['kepastian'];
        $riwayat->nilai = $kesimpulan['cf'];
        $riwayat->save();

        return view('konsultasi.result', compact('result', 'kesimpulan', 'gejalas', 'label', 'riwayat'))->with(['no' => 1]);
    }

    public function identitas_destroy($id)
    {
        $riwayat = Riwayat::findOrFail($id);
        $riwayat->delete();

        return redirect()->route('konsultasi.identitas');
    }

    public function cetakPDF($id)
    {
        $riwayat = Riwayat::findOrFail($id);

        $pdf = PDF::loadView('konsultasi.cetakpdf',compact('riwayat'))
            ->setPaper('a4', 'potrait');
 
        return $pdf->stream('report_konsultasi-'.$riwayat->nama.'-'.Carbon::now()->format('Y_m_d-U').'.pdf');
    }
}
