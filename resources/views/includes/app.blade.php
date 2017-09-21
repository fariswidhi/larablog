@include('includes.__header')
	@if (Request::segment(1) == 'admin')
		{{-- expr --}}
		 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-secondary">
      <a class="navbar-brand" href="#">Admin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item  {{ (Request::segment(2)=='article') ? 'active' :'' }}">
            <a class="nav-link" href="{{ url('admin/article') }}">Article <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item  {{ (Request::segment(2)=='category') ? 'active' :'' }}">
            <a class="nav-link" href="{{ url('admin/category') }}">Category</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0" action="{{ route('admin.search') }}">
          <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search Article" aria-label="Search">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    @else
     <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="{{ url('/') }}">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
        @foreach ($menus as $menu)
          {{-- expr --}}
                    <li class="nav-item">
            <a class="nav-link" href="{{ url('/'.strtolower($menu->category)) }}">{{$menu->category}}</a>
          </li>

        @endforeach
    
        </ul>
        <form class="form-inline my-2 my-lg-0" action="{{ route('main.search') }}">
          <input class="form-control mr-sm-2" name="q" type="text" placeholder="Search" aria-label="Search" >
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
	@endif
	@yield('content')
@include('includes.__footer')