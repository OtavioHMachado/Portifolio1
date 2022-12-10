@extends('modalidades.base')
 
@section('main')
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
@endsection
