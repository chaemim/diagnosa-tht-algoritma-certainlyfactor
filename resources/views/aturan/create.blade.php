@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					{{ $label }}
				</div>

				{!! Form::open(['route' => 'aturan.store', 'class' => 'form-horizontal']) !!}
					<div class="panel-body">							
							@include('aturan._form')							
					</div>

					<div class="panel-footer">
						<a href="{{ route('aturan.index') }}" class="btn btn-default btn-sm">Batal</a>
							
						<div class="pull-right">
							<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection

@section('js')
	<script>
		$('#kerusakan_list').select2({
			placeholder : 'Pilih kerusakan',
			allowClear: true
		});

		$('#gejala_list').select2({
			placeholder : 'Pilih gejala',
			allowClear: true
		});

		$('#solusi_list').select2({
			placeholder : 'Pilih solusi',
			allowClear: true
		});
	</script>
@endsection