@extends('includes.app')
@section('content')

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
      <a class="navbar-brand" href="#">Admin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Article <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Category</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container">
     <ul class="list-group">
  <li class="list-group-item">
  <a class="pull-left text-secondary" href="#" style="font-size: 25px;">Title</a> <br>
  <a class="pull-left text-secondary" href="#">Edit</a>
  <a class="pull-left text-secondary" href="#">Update</a>
  <a class="pull-left text-secondary" href="#">Delete</a>
  </li>

</ul>

    </div>

@endsection