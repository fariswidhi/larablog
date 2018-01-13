@extends('includes.app')
@section('content')
  

    <div class="container">
      @if (count($datas) == 0)
        {{-- expr --}}
        <div class="jumbotron">
          <center><h1>Data Not Found</h1></center>
        </div>
        @else
          <h2>Result</h2>
          <div class="row">
      @foreach ($datas as $data)
        <div class="col-lg-4">
            <div style="padding: 15px;">
            <a href="{{ url(  strtolower($data->category->category).'/'.$data->id) }}">
              <div class="card">
                      <img class="card-img-top" src="{{ url('uploads/'.$data->photo) }}" alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">{{ $data->title}}</h4>
                      </div>
                  </div>
                  </a>
            </div>
          </div>
      @endforeach
          
{{ $datas->links('vendor.pagination.bootstrap-4', ['foo' => 'bar']) }}



      </div>
      @endif
    </div><!-- /.container -->


@endsection