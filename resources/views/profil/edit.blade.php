@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				{!! Form::open(['route' => 'home.profil_update', 'class' => 'form-horizontal', 'method' => 'put']) !!}
					<div class="panel-heading">Edit Profile {{ $user->name }}</div>
					<div class="panel-body">
						<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
							{{ Form::label('name', 'Nama', ['class' => 'control-label col-sm-4']) }}
								
							<div class="col-sm-6">
								{{ Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nama lengkap', 'autocomplete' =>'off']) }}
								
								@if($errors->has('name'))
									<span class="help-block">
										{{ $errors->first('name') }}
									</span>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
							{{ Form::label('email', 'Email', ['class' => 'control-label col-sm-4']) }}
							
							<div class="col-sm-6">
								{{ Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'Email valid', 'autocomplete' =>'off']) }}
									
								@if($errors->has('email'))
									<span class="help-block">
										{{ $errors->first('email') }}
									</span>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('kontak') ? 'has-error' : '' }}">
							{{ Form::label('kontak', 'kontak', ['class' => 'control-label col-sm-4']) }}
							
							<div class="col-sm-6">
								{{ Form::text('kontak', $user->kontak, ['class' => 'form-control', 'placeholder' => 'Nomor handphone', 'autocomplete' =>'off']) }}
									
								@if($errors->has('kontak'))
									<span class="help-block">
										{{ $errors->first('kontak') }}
									</span>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('old_password') || Session::has('old_password') ? 'has-error' : '' }}">
							{{ Form::label('old_password', 'Sandi Lama', ['class' => 'control-label col-sm-4']) }}
								
							<div class="col-sm-6">
								{{ Form::password('old_password', ['class' => 'form-control', 'placeholder' => 'Kata sandi lama', 'autocomplete' =>'off']) }}
								
								@if($errors->has('old_password') || Session::has('old_password'))
									<span class="help-block">
										{{ $errors->first('old_password') }} {{ Session::get('old_password') }}
									</span>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('new_password') ? 'has-error' : '' }}">
							{{ Form::label('new_password', 'Sandi Baru', ['class' => 'control-label col-sm-4']) }}
							
							<div class="col-sm-6">
								{{ Form::password('new_password', ['class' => 'form-control', 'placeholder' => 'Kata sandi baru', 'autocomplete' =>'off']) }}
									
								@if($errors->has('new_password'))
									<span class="help-block">
										{{ $errors->first('new_password') }}
									</span>
								@endif
							</div>
						</div>

						<div class="form-group {{ $errors->has('new_password_confirmation') ? 'has-error' : '' }}">
							{{ Form::label('new_password_confirmation', 'Ulangi Sandi Baru', ['class' => 'control-label col-sm-4']) }}
							
							<div class="col-sm-6">
								{{ Form::password('new_password_confirmation', ['class' => 'form-control', 'placeholder' => 'Ulangi kata sandi baru', 'autocomplete' =>'off']) }}
								
								@if($errors->has('new_password_confirmation'))
									<span class="help-block">
										{{ $errors->first('new_password_confirmation') }}
									</span>
								@endif
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<a href="{{ route('home.profil') }}" class="btn btn-sm btn-default">Batal</a>

						<div class="pull-right">
							<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
						</div>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection