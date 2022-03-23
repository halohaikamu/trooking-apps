<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Styles -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
  <script src="https://kit.fontawesome.com/6adea09fab.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow sm:rounded-lg">
        <form action="{{ route('user.dashboard.reset-email') }}" method="post" autocomplete="off">
            @csrf
            @method('PUT')
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
                    <h5 class="card-title"> Change Email </h5>
                </div>
    
                <div class="card-body px-4">
    
                    <div class="form-group py-2">
                        <label> Email </label>
                        <input type="email" name="email" class="form-control {{$errors->first('email') ? 'is-invalid' : ''}}" value="{{ old('email') }}" placeholder="New Email">
                            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                </div>
    
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"> Change Email </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>