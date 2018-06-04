
@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data User 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			
			  		<div class="form-group">
			  			<label class="control-label">Email</label>	
			  			<input type="text" name="user_id" class="form-control" value="{{ $a->User->email }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection



@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data User
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Name</label>	
			  			<input type="text" name="name" class="form-control" value="{{ $a->name }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Email</label>	
			  			<input type="text" name="email" class="form-control" value="{{ $a->email }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Password</label>	
			  			<input type="text" name="password" class="form-control" value="{{ $a->password }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Member</label>	
			  			<textarea rows="10" class="form-control" readonly>@foreach($a->Member as $data)-> {{ $data->email }} Dan {{ $data->nama_member }}
			  				@endforeach
			  			</textarea> 
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection