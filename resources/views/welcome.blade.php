@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body text-center">

                  <div class="isi">
                    <marquee behavior="" direction="left">
                        {{-- <img src="/img/logo.png" alt="PT. Intraco Penta Prima Service" class="img-rounded"> --}}
                      <h2>Selamat Datang di Sistem Diagnosa Awal Penyakit THT</h2>
                    </marquee>
                    <div align="left">
                    <p>Panduan penggunaan sistem:</p>
                    <p>1. Pilih Menu Konsultasi untuk memulai program</p>
                    <p>2. Masukkan Nama Pasien dan Gejala yang dialami pada form yang disediakan</p>
                    <p>3. Tekan tombol Proses untuk melihat hasil diagnosa</p>
                    <p>4. Informasi mengenai penyakit THT dapat dilihat pada Menu Informasi.</p>
                    </div>
                  </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
<style media="screen">
  .isi {
    height :450px;
  }
  .isi h2{
    margin-top: 200px;
  }

</style>

@endsection
