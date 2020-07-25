@if(Auth::user())
	<div class="list-group">
		<a href="#" class="list-group-item disabled text-center"><i class="fa fa-tag"></i> Master</a>
		<a href="{{ route('gejala.index') }}" class="list-group-item {!! substr(Route::currentRouteName(), 0, 6) == 'gejala' ? 'active' : '' !!}">Gejala</a>
		<a href="{{ route('kerusakan.index') }}" class="list-group-item {!! substr(Route::currentRouteName(), 0, 9) == 'kerusakan' ? 'active' : '' !!}">Kerusakan</a>
<!-- 		<a href="{{ route('solusi.index') }}" class="list-group-item {!! substr(Route::currentRouteName(), 0, 6) == 'solusi' ? 'active' : '' !!}">Solusi</a> -->
		<a href="{{ route('aturan.index') }}" class="list-group-item {!! substr(Route::currentRouteName(), 0, 6) == 'aturan' ? 'active' : '' !!}">Aturan</a>

		<a href="#" class="list-group-item disabled text-center"><i class="fa fa-history"></i> Other</a>
		<a href="{{ route('riwayat.index') }}" class="list-group-item {!! substr(Route::currentRouteName(), 0, 7) == 'riwayat' ? 'active' : '' !!}">Riwayat</a>
	</div>
@endif

<div class="list-group">
	<a href="#" class="list-group-item disabled text-center"><i class="fa fa-paper-plane-o"></i> Menu</a>
	<a href="{{ route('konsultasi.identitas') }}" class="list-group-item {!! substr(Route::currentRouteName(), 0, 10) == 'konsultasi' ? 'active' : '' !!}">Konsultasi</a>
	<a href="{{ url('/informasi') }}" class="list-group-item {!! Route::currentRouteName() == 'informasi' ? 'active' : '' !!}">Informasi</a>
	{{-- <a href="{{ url('/kontak') }}" class="list-group-item {!! Route::currentRouteName() == 'kontak' ? 'active' : '' !!}">Kontak</a> --}}
</div>
