@extends('includes.app')
@section('content')
  

    <div class="container">
      <div class="row">
      @foreach ($datas as $data)
        <div class="col-lg-4">
            <div style="padding: 15px;">
            <a href="{{ url('/'.$data->id) }}">
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
          


      </div>
    </div><!-- /.container -->


@endsection