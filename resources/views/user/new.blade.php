@extends('user.master')
@section('title', 'short')
@section('content')
<div class="container">
  <div class="row">
  <div class="col-md-12"><br/>
  <h3 align="center"></h3><br/>
  @if(count($errors) > 0)
  <div class="alert alert-danger">
    <ul>@foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
    <p>{{\Session::get('success')}}</p>
  </div>
  @endif

  <form method="post" action="{{url('short')}}"> {{csrf_field()}}
    <div class="form-group">
      <input type="text" name="url" class="form-control" placeholder="LONG URL"/></div>
      
      <div class="form-group"><input type="CREATE SHORT URL" class="btn btn-primary"/></div>


  </form>
</div>
  </div>
</div>


@endsection
