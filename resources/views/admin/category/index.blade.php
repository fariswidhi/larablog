@extends('includes.app')
@section('content')

  <div class="container">
  <a style="margin: 5px;" href="{{ url('/admin/category/create') }}" class="btn btn-primary">Create</a>
@if (count($datas) ==0)
    {{-- expr --}}
    <div class="jumbotron">
        <h3>Data Not Found</h3>
    </div>
   
@else
     <ul class="list-group">
      @foreach ($datas as $data)
          <li class="list-group-item">
        		<a class="pull-left text-secondary" href="#" style="font-size: 25px;">{{$data->category}}</a> <br>
  		      <a class="pull-left btn btn-success btn-sm" href="{{ url('/admin/category/'.$data->id.'/edit') }}">Edit</a>
              {!! Form::open(['method'=>'delete','route'=>['category.destroy',$data->id]]) !!}
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
  		        {!! Form::close() !!}
      	  </li>
     @endforeach
	</ul>
@endif

{{ $datas->links('vendor.pagination.bootstrap-4', ['foo' => 'bar']) }}

    </div>


@endsection

<style type="text/css">
	form{
		display: inline-block;
	}
</style>