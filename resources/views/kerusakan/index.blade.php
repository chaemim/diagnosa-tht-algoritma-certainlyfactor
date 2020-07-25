@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!! $label !!}

					<div class="pull-right">
						<a href="{{ route('kerusakan.cetakpdf') }}" class="btn btn-success btn-xs" target="_blank"><i class="fa fa-print"></i></a>
						<a href="{{ route('kerusakan.create') }}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i></a>
					</div>
				</div>
				<div class="panel-body">
					@if(count($kerusakans))
						{!! Form::open(['route' => 'kerusakan.search', 'method' => 'get']) !!}
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
										<th>Kerusakan</th>
										<th>Updated</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($kerusakans as $kerusakan)
										<tr>
											<td>{{ $no++ }}</td>
											<td><span class="label label-success">{{ $kerusakan->kd }}</span> {{ $kerusakan->nama }}</td>
											<td>{{ $kerusakan->updated_at->diffForHumans() }}</td>
											<td>
												{{ Form::open(['route' => ['kerusakan.destroy', $kerusakan->kd], 'method' => 'delete', 'class' => 'ask-delete']) }}
													<a href="{{ route('kerusakan.edit', $kerusakan->kd) }}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
													&nbsp;
													<button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash"></i></button>
												{{ Form::close() }}
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							{{ $kerusakans->links() }}
						</div>
					@else
						{!! Form::open(['route' => 'kerusakan.search', 'method' => 'get']) !!}
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