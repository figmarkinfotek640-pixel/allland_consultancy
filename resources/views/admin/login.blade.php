<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Login - All Land Consultancy</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Manrope:wght@400;500;600;700;800&display=swap">
  
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'Manrope', system-ui, -apple-system, sans-serif;
      background: #0f172a;
      color: #334155;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 20px;
    }
    .login-card {
      background: #ffffff;
      border-radius: 20px;
      padding: 40px;
      width: 100%;
      max-width: 440px;
      box-shadow: 0 20px 50px rgba(0,0,0,0.3);
    }
    .login-brand {
      text-align: center;
      margin-bottom: 28px;
    }
    .login-brand img {
      height: 48px;
      margin-bottom: 12px;
    }
    .login-title {
      font-size: 22px;
      font-weight: 800;
      color: #0f172a;
    }
    .login-sub {
      font-size: 13px;
      color: #64748b;
      margin-top: 4px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-label {
      display: block;
      font-size: 12px;
      font-weight: 800;
      color: #0f172a;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      margin-bottom: 6px;
    }
    .form-control {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid #cbd5e1;
      border-radius: 10px;
      font-size: 14px;
      font-family: inherit;
    }
    .form-control:focus {
      outline: none;
      border-color: #0580C1;
      box-shadow: 0 0 0 3px rgba(5,128,193,0.15);
    }
    .btn-login {
      width: 100%;
      padding: 13px;
      background: #0580C1;
      color: #ffffff;
      border: none;
      border-radius: 10px;
      font-weight: 800;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.2s;
    }
    .btn-login:hover {
      background: #0369a1;
    }
    .alert {
      padding: 12px 14px;
      border-radius: 10px;
      font-size: 13px;
      font-weight: 600;
      margin-bottom: 20px;
    }
    .alert-danger {
      background: #fee2e2;
      color: #991b1b;
      border: 1px solid #fecaca;
    }
    .alert-success {
      background: #dcfce7;
      color: #166534;
      border: 1px solid #bbf7d0;
    }
    .demo-credentials {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 14px;
      margin-top: 24px;
      font-size: 12px;
      color: #64748b;
      line-height: 1.5;
    }
  </style>
</head>
<body>

  <div class="login-card">
    <div class="login-brand">
      <img src="{{ asset('images/all-land-logo.png') }}" alt="All Land Consultancy">
      <h1 class="login-title">Administrator Portal</h1>
      <p class="login-sub">Sign in to manage services, courses, events &amp; blogs</p>
    </div>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
      <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif

    <form action="{{ route('admin.login.submit') }}" method="POST">
      @csrf

      <div class="form-group">
        <label class="form-label" for="email">Admin Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', 'admin@alllandconsultancy.com') }}" required autofocus>
      </div>

      <div class="form-group">
        <label class="form-label" for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" value="admin123" required>
      </div>

      <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:20px;font-size:13px;">
        <label style="display:flex;align-items:center;gap:6px;cursor:pointer;">
          <input type="checkbox" name="remember" checked> Remember me
        </label>
        <a href="{{ route('home') }}" style="color:#0580C1;text-decoration:none;font-weight:700;">Back to site</a>
      </div>

      <button type="submit" class="btn-login">Sign In to Dashboard →</button>

      <div class="demo-credentials">
        <strong>Default Admin Credentials:</strong><br>
        Email: <code>admin@alllandconsultancy.com</code><br>
        Password: <code>admin123</code>
      </div>
    </form>
  </div>

</body>
</html>

