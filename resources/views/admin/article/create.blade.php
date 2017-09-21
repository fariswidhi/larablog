@extends('includes.app')
@section('content')

    <div class="container">
      <div class="row">
          <div class="col-lg-6">
          @if ($errors->has('file'))
            {{-- expr --}}
            <div class="alert alert-danger" role="alert">
            Sorry, the uploaded file must be an image
          </div>
          @endif
          {!! Form::open(['route' => 'article.store','files'=>true]) !!}
              <div class="form-group">
              {{Form::label('title','Title')}}
              {{ Form::text('title','',['class'=>'form-control'])}}
             </div>
             <div class="form-group">
              {{Form::label('file','Banner')}}
              {{ Form::file('file','',['required'=>'required','class'=>'form-control'])}}
             </div>
             <div class="form-group">
              {{Form::label('article','Article')}}
              {{ Form::textarea('article','',['class'=>'form-control','name'=>'editor1'])}}
            
             </div>
             <div class="form-group">
              {{Form::label('category','Category')}}
                {!! Form::select('category', App\Category::pluck('category','id')->all(),'',['class'=>'form-control']) !!}
             </div>
             <button type="submit" class="btn btn-primary">Save</button>
            {!! Form::close() !!}
          </div>
      </div>
    </div>

@endsection
