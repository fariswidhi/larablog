@extends('includes.app')
@section('content')

    <div class="container">
      <div class="row">
          <div class="col-lg-6">
          {!! Form::open(['url' => 'foo/bar']) !!}
              <div class="form-group">
              {{Form::label('name','Category')}}
              {{ Form::text('name','',['class'=>'form-control'])}}
             </div>
             <button type="submit" class="btn btn-primary">Save</button>
            {!! Form::close() !!}
          </div>
      </div>
    </div>

@endsection