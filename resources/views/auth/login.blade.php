<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #f0f4f8, #d9e4f5);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .container {
      width: 100%;
      max-width: 400px;
    }

    .login-box {
      background-color: #ffffff;
      padding: 40px 30px;
      border-radius: 20px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
      transition: 0.3s ease;
    }

    .login-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 25px 45px rgba(0, 0, 0, 0.15);
    }

    .form h2 {
      font-size: 26px;
      font-weight: 600;
      margin-bottom: 10px;
      color: #333;
      text-align: center;
    }

    .subtitle {
      font-size: 14px;
      color: #777;
      margin-bottom: 30px;
      text-align: center;
    }

    .input-group {
      position: relative;
      margin-bottom: 20px;
    }

    .input-group i {
      position: absolute;
      top: 12px;
      left: 15px;
      color: #aaa;
    }

    .input-group input {
      width: 100%;
      padding: 12px 15px 12px 40px;
      border: 1px solid #ddd;
      border-radius: 12px;
      background-color: #f9f9f9;
      font-size: 14px;
      transition: all 0.3s ease;
    }

    .input-group input:focus {
      border-color: #6a8dfc;
      background-color: #fff;
      outline: none;
    }

    .btn {
      width: 100%;
      padding: 12px;
      background: linear-gradient(135deg, #6a8dfc, #8eabff);
      border: none;
      border-radius: 12px;
      color: white;
      font-weight: 500;
      font-size: 15px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .btn:hover {
      background: linear-gradient(135deg, #597dff, #759eff);
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="login-box">
      <div class="form">
        <h2>Welcome Back 👋</h2>
        <p class="subtitle">Login to your account</p>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" placeholder="Email" required />
          </div>
          <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required />
          </div>
          <button type="submit" class="btn">Login</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>
