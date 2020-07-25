<div class="form-group {{ $errors->has('kerusakan_list') ? 'has-error' : '' }}">
	{{ Form::label('kerusakan_list', 'Kerusakan', ['class' => 'control-label col-sm-4']) }}

	<div class="col-sm-6">
		{{ Form::select('kerusakan_list', $kerusakan_list, null, ['id' => 'kerusakan_list', 'class' => 'form-control', 'placeholder' => 'Pilih kerusakan']) }}

		@if($errors->has('kerusakan_list'))
			<span class="help-block">
				{{ $errors->first('kerusakan_list') }}
			</span>
		@endif
	</div>
</div>

<div class="form-group {{ $errors->has('gejala_list') ? 'has-error' : '' }}">
	{{ Form::label('gejala_list', 'Gejala', ['class' => 'control-label col-sm-4']) }}

	<div class="col-sm-6">
		{{ Form::select('gejala_list', $gejala_list, null, ['id' => 'gejala_list', 'class' => 'form-control', 'placeholder' => 'Pilih gejala']) }}

		@if($errors->has('gejala_list'))
			<span class="help-block">
				{{ $errors->first('gejala_list') }}
			</span>
		@endif
	</div>
</div>

<div class="form-group {{ $errors->has('solusi_list') ? 'has-error' : '' }}">
	{{ Form::label('solusi_list', 'Solusi', ['class' => 'control-label col-sm-4']) }}

	<div class="col-sm-6">
		{{ Form::select('solusi_list', $solusi_list, null, ['id' => 'solusi_list', 'class' => 'form-control', 'placeholder' => 'Pilih solusi']) }}

		@if($errors->has('solusi_list'))
			<span class="help-block">
				{{ $errors->first('solusi_list') }}
			</span>
		@endif
	</div>
</div>

<div class="form-group {{ $errors->has('mb') ? 'has-error' : '' }}">
	{{ Form::label('mb', 'MB', ['class' => 'control-label col-sm-4']) }}
	
	<div class="col-sm-6">
		{{ Form::text('mb', null, ['class' => 'form-control', 'placeholder' => 'Nilai MB', 'autocomplete' =>'off']) }}
		
		@if($errors->has('mb'))
			<span class="help-block">
				{{ $errors->first('mb') }}
			</span>
		@endif
	</div>
</div>

<div class="form-group {{ $errors->has('md') ? 'has-error' : '' }}">
	{{ Form::label('md', 'MD', ['class' => 'control-label col-sm-4']) }}
	
	<div class="col-sm-6">
		{{ Form::text('md', null, ['class' => 'form-control', 'placeholder' => 'Nilai MD', 'autocomplete' =>'off']) }}
		
		@if($errors->has('md'))
			<span class="help-block">
				{{ $errors->first('md') }}
			</span>
		@endif
	</div>
</div>