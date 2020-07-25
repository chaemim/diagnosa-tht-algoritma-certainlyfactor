@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					{!! $label !!}

					<div class="pull-right">
						@if(count($riwayats))
							<a href="{{ route('riwayat.cetakpdf') }}" class="btn btn-success btn-xs" target="_blank"><i class="fa fa-print"></i></a>
						@endif
					</div>
				</div>
				<div class="panel-body">
					@if(count($riwayats))
						{!! Form::open(['route' => 'riwayat.search', 'method' => 'get']) !!}
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
										<th>Identitas</th>
										<th>Gejala</th>
										<th>Kerusakan</th>
										<!-- <th>Solusi</th> -->
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									@foreach($riwayats as $riwayat)
										<tr>
											<td>{{ $no++ }}</td>
											<td>
												{{ $riwayat->nama }} <br>
												{{ $riwayat->updated_at->format('d F Y') }}
											</td>
											<td>
												{!! $riwayat->gejala !!}
											</td>
											<td>
												{{ $riwayat->kerusakan }} <br>
												{{ $riwayat->kepastian }} <br>
												{{ $riwayat->nilai }}												
											</td>
											<!-- <td>
												{!! $riwayat->solusi !!}
											</td> -->
											<td>
												{{ Form::open(['route' => ['riwayat.destroy', $riwayat->id], 'method' => 'delete', 'class' => 'ask-delete']) }}													
													<button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-trash"></i></button>
												{{ Form::close() }}
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
							{{ $riwayats->links() }}
						</div>
					@else
						{!! Form::open(['route' => 'riwayat.search', 'method' => 'get']) !!}
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