@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
					<div class="panel-heading">{{ $label }}</div>
					<div class="panel-body">
						<div class="dl-horizontal">
							<dt>Nama</dt>
							<dd>{{ $user->name }}</dd>
							<dt>Email</dt>
							<dd>{{ $user->email }}</dd>
							<dt>Kontak</dt>
							<dd>{{ $user->kontak }}</dd>
							<dt>Dibuat</dt>
							<dd>{{ $user->created_at->diffForHumans() }}</dd>
							<dt>Diperbaharui</dt>
							<dd>{{ $user->updated_at->diffForHumans() }}</dd>
						</div>
					</div>
					<div class="panel-footer">
						<a href="{{ route('home.profil_edit') }}" class="btn btn-sm btn-primary">Edit</a>
					</div>
			</div>
		</div>
	</div>
@endsection