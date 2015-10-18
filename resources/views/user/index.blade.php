<!-- views/user/index.blade.php -->

@extends('master')

@if (Session::has('active_id'))
	<input type="hidden" id="active_id" value="{{ Session::get('active_id') }}">
@endif

@section('content')

	<div class="text-center">
		<ul class="nav nav-tabs">
			<li><a data-toggle="tab" href="#validate">Validate</a></li>
			<li><a data-toggle="tab" href="#changeName">Change Name</a></li>
			<li><a data-toggle="tab" href="#changePass">Change Password</a></li>
			<li><a data-toggle="tab" href="#changeTheme">Theme</a></li>
			<li><a data-toggle="tab" href="#delAcc">Delete My Account</a></li>
		</ul>
	</div>

	<div class="tab-content">

		<div id="validate" class="tab-pane fade">
			<br/><br/>
			<div class="text-center">
				// Validate
			</div>
		</div>

		<div id="changeName" class="tab-pane fade">
			<br/><br/>
			<div class="text-center">
				{!! Form::open(['action' => 'UserController@changeName', 'class' => 'form-inline']) !!}
					<fieldset>
						<!-- name -->
						<div class="form-group">
							<input type="text" name="name" placeholder="Your Name" class="form-control" value="{{ Auth::user()->name }}" max="255">
						</div>
						
						<!-- submit -->
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Change Name</button>
						</div>
					</fieldset>
				{!! Form::close() !!}
			</div>
		</div>

		<div id="changePass" class="tab-pane fade">
			<br/><br/>
			<div class="text-center">
				// Change Pass
			</div>
		</div>

		<div id="changeTheme" class="tab-pane fade">
			<br/><br/>
			<div class="text-center">
				{!! Form::open(['action' => 'UserController@changeTheme', 'class' => 'form-inline']) !!}
					<fieldset>
						<!-- theme select -->
						<div class="form-group">
							<select class="form-control" name="theme">
								@foreach($themes as $theme)
									<option value="{{ $theme->id }}">{{ $theme->name }}</option>
								@endforeach
							</select>
						</div>
						
						<!-- submit -->
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Change Theme</button>
						</div>
					</fieldset>
				{!! Form::close() !!}
			</div>
		</div>

		<div id="delAcc" class="tab-pane fade">
			<br/><br/>
			<div class="text-center">
				// Delete Account
			</div>
		</div>

	</div>

@stop