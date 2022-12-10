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
    <div class="page text-center">
          @extends('modalidades.base') 
          @section('main')
          <div class="context-dark">
          <div class="row">     
            <div class="col-sm-8 offset-sm-2">

              <h1 class="display-3">Add Stock</h1>
            <div>
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                </div><br />
              @endif
                <form enctype="multipart/form-data" method="post" action="{{ route('modalidades.store') }}">
                    @csrf
                    <div class="form-group">    
                        <label for="nomeModalidade">nomeModalidade:*</label>
                        <input type="text" class="form-control" name="nomeModalidade"/>
                    </div>
            
                    <div class="form-group">
                        <label for="image">img*</label>
                        <input type="file" class="form-control" name="image"/>
                    </div>
            
                    <div class="form-group">
                        <label for="link">link</label>
                        <input type="text" class="form-control" name="link"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Criar</button>
                </form>
            </div>
          </div>
          </div>
          </div>
          @endsection 
        </div>
        <div class="snackbars" id="form-output-global"></div>
        <script src="js/core.min.js"></script>
        <script src="js/script.js"></script>
 
