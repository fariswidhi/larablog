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
          {!! Form::open(['route'=>['article.update',$article->id],'method'=>'put','files'=>true]) !!}
              <div class="form-group">
              {{Form::label('title','Title')}}
              {{ Form::text('title',$article->title,['class'=>'form-control'])}}
             </div>
             <img src="{{ url('uploads/'.$article->photo) }}" class="img img-thumbnail">
             <div class="form-group">
              {{Form::label('file','Banner')}}
              {{ Form::file('file',['class'=>'form-control'])}}
             </div>
             <div class="form-group">
              {{Form::label('article','Article')}}
              {{ Form::textarea('article',$article->content,['class'=>'form-control'])}}
             </div>
             <div class="form-group">
              {{Form::label('category','Category')}}
                <select name="category" class="form-control">
                    @foreach ($categories as $category)
                      {{-- expr --}}
                      <option value="{{$category->id}}" {{ $idcat->contains($article->category_id) ? 'selected' :''}}>{{ $category->category}}</option>
                    @endforeach
                </select>
             </div>
             <button type="submit" class="btn btn-primary">Save</button>
            {!! Form::close() !!}
          </div>
      </div>
    </div>

@endsection

