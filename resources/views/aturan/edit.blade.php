@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					{{ $label }}
				</div>

				{!! Form::model($aturan, ['route' => ['aturan.update', $aturan->id], 'class' => 'form-horizontal', 'method' => 'put']) !!}
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
			allowClear: true,
			disabled: true
		});

		$('#gejala_list').select2({
			placeholder : 'Pilih gejala',
			allowClear: true,
			disabled: true
		});

		$('#solusi_list').select2({
			placeholder : 'Pilih solusi',
			allowClear: true,
			disabled: true
		});
	</script>
@endsection