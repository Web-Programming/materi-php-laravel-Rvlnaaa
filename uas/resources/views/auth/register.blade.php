<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }

    body {
      background: url('https://richeesefactory.com/media/thumb/banner/2025/4/28/e8zqeu7xxktdj4fiytghhq_size_1920x700_webp.webp') no-repeat center center fixed;
      background-size: cover;
    }
.login-container {
  position: relative;
  background: url('https://richeesefactory.com/media/thumb/banner/2025/4/11/uundvyyb8qkm626ogmtp6v_size_1920x700_webp.webp') no-repeat center center fixed;
  background-size: cover;
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.3);
  color: #000; /* teks label jadi hitam */
  overflow: hidden;
}

/* Overlay putih semi-transparan */
.login-container::before {
  content: '';
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background-color: rgba(255, 255, 255, 0.8); /* lapisan putih transparan */
  z-index: 1;
  border-radius: 15px;
}

/* Pastikan isi di atas overlay */
.login-container form,
.login-container h3,
.login-container label,
.login-container .form-text {
  position: relative;
  z-index: 2;
  color: #000; /* pastikan teks tetap gelap */
}

  </style>
</head>
<body>

<div class="row justify-content-center align-items-center min-vh-100 m-0">
  <div class="col-md-6 col-lg-5">
    <div class="login-container">
      <h3 class="text-center mb-4">Sign up</h3>

      @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if(session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      <form method="POST" action="{{ url('/register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name" value="{{old('name')}}">
          @error('name')
          <div class="form-text text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" value="{{old('email')}}">
          @error('email')
          <div class="form-text text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <div class="input-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter password">
            <span class="input-group-text bg-white border-start-0 show-password" data-target="#password" data-icon="#toggle-password-icon">
              <i class="fas fa-eye-slash text-muted" id="toggle-password-icon"></i>
            </span>
          </div>
          @error('password')
          <div class="form-text text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
          <label for="password-confirm" class="form-label">Confirm password</label>
          <div class="input-group">
            <input type="password" id="password-confirm" name="password-confirm" class="form-control" placeholder="Enter confirm password">
            <span class="input-group-text bg-white border-start-0 show-password" data-target="#password-confirm" data-icon="#toggle-confirm-password-icon">
              <i class="fas fa-eye-slash text-muted" id="toggle-confirm-password-icon"></i>
            </span>
          </div>
          @error('password-confirm')
          <div class="form-text text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Button -->
        <button type="submit" class="btn btn-primary w-100 mb-3">Register</button>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Password Toggle Script -->
<script>
  $(document).ready(function() {
    $('.show-password').on('click', function() {
      const targetInput = $($(this).data('target'));
      const icon = $($(this).data('icon'));

      if (targetInput.attr('type') === 'password') {
        targetInput.attr('type', 'text');
        icon.removeClass('fa-eye-slash').addClass('fa-eye');
      } else {
        targetInput.attr('type', 'password');
        icon.removeClass('fa-eye').addClass('fa-eye-slash');
      }
    });
  });
</script>

</body>
</html>
