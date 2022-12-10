<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Ubuntu:400,400italic,500,700,700italic">
<link rel="stylesheet" href="{{asset('/css/style.css')}}">
<style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
</head>
<body>
    <div class="page-loader page-loader-variant-1">
      <div><img width='173' height='30' src='images/logo.png' alt=''/>
        <div class="offset-top-41 text-center">
          <div class="spinner"></div>
        </div>
      </div>
    </div>
    <div class="page text-center">
      <header class="page-head slider-menu-position" data-preset='{"title":"Header with slider","category":"header, slider","reload":true,"id":"header-1"}'>
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar container rd-navbar-floated rd-navbar-dark" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              </div>
              <div class="rd-navbar-panel">
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <button class="rd-navbar-top-panel-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-top-panel"><span></span></button>
                <div class="rd-navbar-brand"><a href="index.html"><img width='173' height='30' src='images/logo.png' alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <div class="rd-navbar-mobile-brand"><a href="index.html"><img width='173' height='30' src='images/logo.png' alt=''/></a></div>
                    <ul class="rd-navbar-nav" id="navbar">
                      <li class="active"><a href="/"><span>Home</span></a></li>
                      <li><a href="about-coach"><span>About Coach</span></a></li>
                      <li><a href="contacts"><span>Contact Us</span></a></li>
                      <li><a href="{{ route('modalidades.index') }}"><span>Manage</span></a></li>
                      <li><form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                      this.closest('form').submit(); " role="button">
                      <span>Log Out</span></a>
                    </form>
                      </li>
                  </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
          <div>
        @extends('modalidades.base')
        @section('main')
        <div class="row">
        <div class="col-sm-12">
            <h1 style="color: white" class="display-3">Category</h1>
            <div>
            <a href="{{ route('modalidades.create')}}" class="btn btn-primary mb-3">Add Category</a>
            </div>     
            @if(session()->get('success'))
            <div class="alert alert-success">
            {{ session()->get('success') }}  
            </div>
        @endif
        <table style="color: white" class="table table-striped">
            <thead>
                <tr>
                <td>Category</td>
                <td>Photo</td>
                <td>Link for Vídeo</td>
                </tr>
            </thead>
            <tbody>
                @foreach($modalidades as $modalidade)
                <tr>
                    <td>{{$modalidade->nomeModalidade}} </td>
                    <td><img width="480" height="480" src="{{asset('images/'.$modalidade->img)}}" alt=""/></td>
                    <td><iframe width="400" height="400" src="{{$modalidade->link}}" frameborder="0" allowfullscreen></iframe></td>
                    <td>
                        <a href="{{ route('modalidades.edit', $modalidade->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('modalidades.destroy', $modalidade->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
        </div>
        @endsection
        </div>
          </div>
          <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
 
