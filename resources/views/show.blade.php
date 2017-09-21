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
  <li class="breadcrumb-item ">{{$data->category->category}}</li>
    <li class="breadcrumb-item active">{{$data->title}}</li>
</ol>
    			<div class="card">                    
                      <div class="card-body">
{{--                       title aarticle --}}
                        <h4 class="card-title">{{$data->title}}</h4>
                        <p class="card-text">{{$data->content}}</p>
                      </div>
                  </div>
    		</div>
    	
    	</div>
    </div><!-- /.container -->


@endsection