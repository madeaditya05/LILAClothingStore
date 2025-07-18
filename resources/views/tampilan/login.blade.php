<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lila - Clothing Store</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="icon" href="{{ asset('images/logoasli2.png') }}" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Video Background */
    .bg-video {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    body, html {
      height: 100%;
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .login-container {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-box {
      background: rgba(255, 255, 255, 1);
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .login-logo {
      width: 100px;
      margin-bottom: 20px;
    }

    .form-control {
      margin-bottom: 1rem;
    }

    .btn-login {
      width: 100%;
    }
  </style>
</head>
<body>

  <!-- Background Video -->
  <video autoplay muted loop class="bg-video">
    <source src="images/videobg.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="login-container">
    <div class="login-box">
      <img src="images/logoasli.png" alt="Logo" class="login-logo">
      

      <!-- Tambahan alert -->
                @if ($errors->any())
    <div class="mb-4" style="color: red; background-color: #ffe6e6; padding: 10px; border-radius: 8px; text-align: center;">
        <ul class="mb-0 list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


                      
      <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="mb-3">
                    <input type="name" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Username">
                  </div>
                  <div class="mb-4">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                 
                  <button type="submit" class="btn w-100 py-8 fs-4 mb-4 rounded-2" style="color: #b1568a; background-color: #FFF0F5;">Login</button>
                  <div class="d-flex align-items-center justify-content-center">
                  </div>
                </form>
    </div>
  </div>

</body>
</html>
