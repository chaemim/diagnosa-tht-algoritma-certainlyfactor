@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!! $label !!}

					<div class="pull-right">
						<a href="{{ route('solusi.cetakpdf') }}" class="btn btn-success btn-xs" target="_blank"><i class="fa fa-print"></i></a>
						<a href="{{ route('solusi.create') }}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></a>
					</div>
				</div>
				<div class="panel-body">
					@if(count($solusis))
						{!! Form::open(['route' => 'solusi.search', 'method' => 'get']) !!}
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
										<th>Solusi</th>
										<th>Updated</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($solusis as $solusi)
										<tr>
											<td>{{ $no++ }}</td>
											<td><span class="label label-success">{{ $solusi->kd }}</span> {{ $solusi->nama }}</td>
											<td>{{ $solusi->updated_at->diffForHumans() }}</td>
											<td>
												{{ Form::open(['route' => ['solusi.destroy', $solusi->kd], 'method' => 'delete', 'class' => 'ask-delete']) }}
													<a href="{{ route('solusi.edit', $solusi->kd) }}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
													&nbsp;
													<button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash"></i></button>
												{{ Form::close() }}
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							{{ $solusis->links() }}
						</div>
					@else
						{!! Form::open(['route' => 'solusi.search', 'method' => 'get']) !!}
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