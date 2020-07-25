@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					{{ $label }}
				</div>

				{!! Form::model($kerusakan, ['route' => ['kerusakan.update', $kerusakan->kd], 'class' => 'form-horizontal', 'method' => 'put']) !!}
					<div class="panel-body">							
							@include('kerusakan._form')							
					</div>

					<div class="panel-footer">
						<a href="{{ route('kerusakan.index') }}" class="btn btn-default btn-sm">Batal</a>
							
						<div class="pull-right">
							<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection