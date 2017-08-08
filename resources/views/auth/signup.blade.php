@extends('templates.default')

@section('title', '| signup')

@section('content')
  <div class="row">
      <div class="col-lg-6">
          <form class="form-vertical" role="form" method="post" action="{{ route('auth.signup') }}">
              <div class="form-group{{ $errors->has('email')?' has-error':'' }}">
                  <label for="email" class="control-label">Your email address</label>
                  <input type="text" name="email" class="form-control" id="email" value="{{ Request::old('email') ?:'' }}">
                  @if ($errors->has('email'))
                    <span class="help-block">{{ $errors->first('email') }}</span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('user')?' has-error':'' }}">
                  <label for="user" class="control-label">Choose a user</label>
                  <input type="text" name="user" class="form-control" id="user" value="{{ Request::old('user') ?:'' }}">
                  @if ($errors->has('user'))
                    <span class="help-block">{{ $errors->first('user') }}</span>
                  @endif
              </div>
              <div class="form-group{{ $errors->has('password')?' has-error':'' }}">
                  <label for="password" class="control-label">Choose a password</label>
                  <input type="password" name="password" class="form-control" id="password" value="">
                  @if ($errors->has('email'))
                    <span class="help-block">{{ $errors->first('password') }}</span>
                  @endif
              </div>
              <div class="form-group">
                  <button type="submit" class="btn btn-default">Sign up</button>
              </div>

              <input type="hidden" name="_token" value="{{ Session::token() }}">
          </form>
      </div>
  </div>

@endsection
