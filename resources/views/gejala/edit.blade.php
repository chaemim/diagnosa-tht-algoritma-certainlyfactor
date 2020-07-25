@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					{{ $label }}
				</div>

				{!! Form::model($gejala, ['route' => ['gejala.update', $gejala->kd], 'class' => 'form-horizontal', 'method' => 'put']) !!}
					<div class="panel-body">							
							@include('gejala._form')							
					</div>

					<div class="panel-footer">
						<a href="{{ route('gejala.index') }}" class="btn btn-default btn-sm">Batal</a>
							
						<div class="pull-right">
							<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection