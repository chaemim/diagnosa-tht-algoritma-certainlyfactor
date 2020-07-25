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
						@if($errors->has('gejala'))
							<p class="text-center text-danger">
								<span class="has-error">{{ $errors->first('gejala') }}</span>
							</p>
						@endif

						@foreach($gejalas as $gejala)
							<div class="form-group {{ $errors->has('mb') ? 'has-error' : '' }}">								
								<div class="col-sm-6">
									{{ Form::checkbox('gejala[]', $gejala->kd) }} 
									{{ $gejala->nama }}
								</div>
							</div>
						@endforeach				
					</div>

					<div class="panel-footer">
						<a href="{{ route('aturan.index') }}" class="btn btn-default btn-sm">Batal</a>
							
						<div class="pull-right">
							<button type="submit" class="btn btn-primary btn-sm">Proses</button>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection