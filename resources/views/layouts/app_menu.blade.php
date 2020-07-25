@if(Auth::user())
	<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Master <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li {!! substr(Route::currentRouteName(), 0, 6) == 'gejala' ? 'class="active"' : '' !!}><a href="{{ route('gejala.index') }}">Gejala</a></li>
			<li {!! substr(Route::currentRouteName(), 0, 9) == 'kerusakan' ? 'class="active"' : '' !!}><a href="{{ route('kerusakan.index') }}">Kerusakan</a></li>
			<li {!! substr(Route::currentRouteName(), 0, 6) == 'solusi' ? 'class="active"' : '' !!}><a href="{{ route('solusi.index') }}">Solusi</a></li>
			<li {!! substr(Route::currentRouteName(), 0, 6) == 'aturan' ? 'class="active"' : '' !!}><a href="{{ route('aturan.index') }}">Aturan</a></li>
        </ul>
    </li>
    <li {!! substr(Route::currentRouteName(), 0, 7) == 'riwayat' ? 'class="active"' : '' !!}><a href="{{ route('riwayat.index') }}">Riwayat</a></li>

@endif

<li {!! substr(Route::currentRouteName(), 0, 10) == 'konsultasi' ? 'class="active"' : '' !!}><a href="{{ route('konsultasi.identitas') }}">Konsultasi</a></li>
<li {!! Route::currentRouteName() == 'informasi' ? 'class="active"' : '' !!}><a href="{{ url('/informasi') }}">Informasi</a></li>
{{-- <li {!! Route::currentRouteName() == 'kontak' ? 'class="active"' : '' !!}><a href="{{ url('/kontak') }}">Kontak</a></li> --}}
