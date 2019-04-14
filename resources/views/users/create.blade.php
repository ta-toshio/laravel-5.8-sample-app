@extends('layouts.default')
@section('title', 'Registered')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>Registered</h5>
    </div>
    <div class="panel-body">
      @include('shared._errors')

      <form method="POST" action="{{ route('users.store') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">name：</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
          </div>

          <div class="form-group">
            <label for="email">email：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password">password：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <div class="form-group">
            <label for="password_confirmation">password confirm：</label>
            <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
          </div>

          <button type="submit" class="btn btn-primary">Registered</button>
      </form>
    </div>
  </div>
</div>
@stop