@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					{{ $label }}
				</div>

				{!! Form::open(['route' => ['konsultasi.proses', $riwayat->id], 'class' => 'form-horizontal']) !!}
					<div class="panel-body">
						<p class="text-center">
							<strong>Pilih Gejala</strong>
						</p>

						<div class="form-group {{ $errors->has('gejala') ? 'has-error' : '' }}">
							<div class="col-sm-12">
								{{ Form::select('gejala[]', $gejalas2, null, ['id' => 'gejala', 'class' => 'form-control', 'multiple' => true]) }}

								@if($errors->has('gejala'))
									<span class="help-block">
										{{ $errors->first('gejala') }}
									</span>
								@endif
							</div>
						</div>			
					</div>

					<div class="panel-footer">
						<div class="pull-right">
							<button type="submit" class="btn btn-primary btn-sm">Proses</button>
						</div>
				{!! Form::close() !!}

				{{ Form::open(['route' => ['konsultasi.identitas_destroy', $riwayat->id], 'method' => 'delete']) }}
					<button class="btn btn-default btn-xs" type="submit">Batal</button>
				{{ Form::close() }}
					</div>				
			</div>
		</div>
	</div>
@endsection

@section('js')
	<script>
		$('#gejala').select2({
			placeholder : 'Pilih gejala',
			allowClear: true
		});
	</script>
@endsection