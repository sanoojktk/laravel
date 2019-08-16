@extends('layout')
@section('content')

<div class="box-content">
						<form class="form-horizontal" action="{{url('insert-contact')}}" method="POST">
					  {{ csrf_field() }}  

							<input type="hidden" name="_token" value="{{ csrf_token() }}">
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="date01">Full Name</label>
							  <div class="controls">
								<input type="text"  class="input-file " name="name">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Email Address</label>
							  <div class="controls">
								<input class="input-file " id="fileInput" type="text" name="email">
							  </div>
							</div>    
							<div class="control-group">
							  <label class="control-label" for="fileInput">Mobile Number</label>
							  <div class="controls">
								<input class="input-file " id="fileInput" type="text" name="phone">
							  </div>
							</div>         
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Contact</button>
							  
							</div>
						  </fieldset>
						</form>   

					</div>

@endsection