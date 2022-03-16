<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/6adea09fab.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:p-6">
            <h3 class="text-lg leading-6 font-medium text-gray-900">Dashboard</h3>
            @if (session('resent'))
                <div class="mt-2 max-w-xl text-sm text-gray-500">
                    A fresh verification link has been sent to your email address.
                </div>
            @endif
            <div class="mt-5">
                <p>Before proceeding, please check your email for a verification link. If you did not receive the email,</p>
                <form action="{{ route('verification.resend') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-green-700 bg-green-100 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:text-sm">
                        click here to request another
                    </button>
                </form>
            </div>
        </div>
    </div>
  
</body>
</html>