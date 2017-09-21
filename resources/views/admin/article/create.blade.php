@extends('includes.app')
@section('content')

    <div class="container">
      <div class="row">
          <div class="col-lg-6">
          {!! Form::open(['url' => 'foo/bar']) !!}
              <div class="form-group">
              {{Form::label('title','Title')}}
              {{ Form::text('title','',['class'=>'form-control'])}}
             </div>
             <div class="form-group">
              {{Form::label('file','Banner')}}
              {{ Form::file('file','',['class'=>'form-control'])}}
             </div>
             <div class="form-group">
              {{Form::label('article','Article')}}
              {{ Form::textarea('article','',['class'=>'form-control'])}}
             </div>
             <button type="submit" class="btn btn-primary">Save</button>
            {!! Form::close() !!}
          </div>
      </div>
    </div>

@endsection