@extends('user.layouts.index')
@section('main')
<div class="py-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
    <h1 class="text-2xl font-semibold text-gray-900">Reset Password</h1>
  </div>
  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
    <form action="{{ route('user.dashboard.forgot-password') }}" method="post" autocomplete="off">
        @csrf
        <div class="card shadow">

            @if (Session::has("success"))
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ Session::get('success') }}
                </div>
            @elseif (Session::has("failed"))
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ Session::get('failed') }}
                </div>
            @endif

            <div class="card-header">
                <h5 class="card-title"> Forgot Password </h5>
            </div>

            <div class="card-body px-4">
                <div class="form-group py-2">
                    <label> Email </label>
                    <input type="email" name="email" class="form-control {{$errors->first('email') ? 'is-invalid' : ''}}" value="{{ old('email') }}" placeholder="Your Email">
                        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary"> Reset Password </button>
            </div>
        </div>
    </form>
  </div>
</div>

@endsection