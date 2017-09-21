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
  <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
  <li class="breadcrumb-item "><a href="{{ url('/'.$data->category->category) }}">{{$data->category->category}}</a></li>
    <li class="breadcrumb-item active">{{$data->title}}</li>
</ol>
    			<div class="card">                    
                      <div class="card-body">
{{--                       title aarticle --}}
                        <h4 class="card-title">{{$data->title}}</h4>
                        {{$data->created_at}}
                        @if ($data->photo != null)
                          {{-- expr --}}
                          <img src="{{ url('uploads/'.$data->photo) }}" class="img img-thumbnail">
                        @endif
                        <p class="card-text">{!!$data->content!!}</p>
                      </div>
                  </div>
    		</div>
    	
    	</div>
    </div><!-- /.container -->


@endsection