@extends('includes.app')
@section('content')
  	
  	<style type="text/css">
  		body{
  			background: #fafafa;
  		}
  	</style>

    <div class="container">
    	<div class="row">
    		<div class="col-lg-8">
    		<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Library</li>
</ol>
    			<div class="card">                    
                      <div class="card-body">
{{--                       title aarticle --}}
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                  </div>
    		</div>
    		<div class="col-lg-4">
    			<div class="card">
                    
                      <div class="card-body">
                        <h4 class="card-title">Related</h4>
                       
                      </div>
                  </div>
    		</div>
    	</div>
    </div><!-- /.container -->


@endsection