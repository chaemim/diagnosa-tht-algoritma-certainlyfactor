<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
	{{ Form::label('nama', 'Kerusakan', ['class' => 'control-label col-sm-4']) }}
	
	<div class="col-sm-6">
		{{ Form::textarea('nama', null, ['class' => 'form-control', 'placeholder' => 'Nama kerusakan', 'autocomplete' =>'off']) }}
		
		@if($errors->has('nama'))
			<span class="help-block">
				{{ $errors->first('nama') }}
			</span>
		@endif
	</div>
</div>