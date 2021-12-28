@extends('layouts.main')

@section('container')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card mb-3">
			  <div class="row g-0">
			    <div class="col-md-2">
			      <img src="img/{{ $image }}" class="img-fluid rounded-start" alt="...">
			    </div>
			    <div class="col-md-10">
			      <div class="card-body">
			        <h5 class="card-title">Biodata</h5>
			        <table class="table table-striped table-hover">
					 <tr>
					 	<td>Nama</td>
					 	<td>{{ $nama }}</td>
					 </tr>
					 <tr>
					 	<td>Email</td>
					 	<td>{{ $email }}</td>
					 </tr>
					</table>
			    
			        
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
</div>

@endsection