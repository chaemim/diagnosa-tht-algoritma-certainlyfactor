@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!! $label !!}

					<div class="pull-right">
						<a href="{{ route('gejala.cetakpdf') }}" class="btn btn-success btn-xs" target="_blank"><i class="fa fa-print"></i></a>
						<a href="{{ route('gejala.create') }}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></a>
					</div>
				</div>
				<div class="panel-body">
					@if(count($gejalas))
						{!! Form::open(['route' => 'gejala.search', 'method' => 'get']) !!}
							<div class="input-group {{ $errors->has('cari') ? 'has-error' : 'has-warning' }}">
								{{ Form::text('cari', Request::has('cari') ? Request::input('cari') : null, ['placeholder' => 'Pencarian disini ...', 'class' => 'form-control']) }}

								<span class="input-group-btn">
									{{ Form::submit('Cari', ['class' => $errors->has('cari') ? 'btn btn-danger' : 'btn btn-warning' ]) }}
								</span>									
							</div>
							@if($errors->has('cari'))
								<span class="help-block text-center">
									{{ $errors->first('cari') }}
								</span>
							@endif								
						{!! Form::close() !!}

						<hr>

						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Gejala</th>
										<th>Updated</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($gejalas as $gejala)
										<tr>
											<td>{{ $no++ }}</td>
											<td><span class="label label-success">{{ $gejala->kd }}</span> {{ $gejala->nama }}</td>
											<td>{{ $gejala->updated_at->diffForHumans() }}</td>
											<td>
												{{ Form::open(['route' => ['gejala.destroy', $gejala->kd], 'method' => 'delete', 'class' => 'ask-delete']) }}
													<a href="{{ route('gejala.edit', $gejala->kd) }}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
													&nbsp;
													<button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash"></i></button>
												{{ Form::close() }}
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							{{ $gejalas->links() }}
						</div>
					@else
						{!! Form::open(['route' => 'gejala.search', 'method' => 'get']) !!}
							<div class="input-group {{ $errors->has('cari') ? 'has-error' : 'has-warning' }}">
								{{ Form::text('cari', Request::has('cari') ? Request::input('cari') : null, ['placeholder' => 'Pencarian disini ...', 'class' => 'form-control']) }}

								<span class="input-group-btn">
									{{ Form::submit('Cari', ['class' => $errors->has('cari') ? 'btn btn-danger' : 'btn btn-warning' ]) }}
								</span>									
							</div>
							@if($errors->has('cari'))
								<span class="help-block text-center">
									{{ $errors->first('cari') }}
								</span>
							@endif								
						{!! Form::close() !!}

						<hr>
						
						<p class="text-center">
							{!! $message !!}
						</p>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection