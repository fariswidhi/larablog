@extends('includes.app')
@section('content')

    <div class="container">
      <div class="row">
          <div class="col-lg-6">
          @if (session('error'))
                 <div class="alert alert-danger" role="alert">
            {{session('error')}}
          </div>
          @endif
          {!! Form::open(['route'=>'category.store']) !!}
              <div class="form-group">
              {{Form::label('name','Category')}}
              {{ Form::text('name','',['class'=>'form-control','required'=>'required'])}}
             </div>
             <button type="submit" class="btn btn-primary">Save</button>
            {!! Form::close() !!}
          </div>
      </div>
    </div>

@endsection