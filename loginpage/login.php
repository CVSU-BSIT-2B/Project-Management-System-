<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css" />
</head>
<body>
  <header class="navbar">
    <div class="logo">
      <img src="logo.png" alt="Logo" />
    </div>
    <nav class="nav-links">
      <a href="homepage.php">Home</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    </nav>
    <div class="auth-buttons">
      <a href="login.php" class="login-btn">Log in</a>
      <a href="signin.php" class="signup-btn">Sign up</a>
    </div>
  </header>

  <main class="login-wrapper">
    <div class="login-box">
      <h1>Login</h1>
      <p>Welcome back! Login to your account.</p>

      <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
      <?php endif; ?>

      <form method="POST" action="conlog.php">
        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" placeholder="Email" required />

        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required />

        <div class="remember-me">
          <input type="checkbox" id="remember" name="remember" />
          <label for="remember">Remember Me</label>
        </div>

        <button type="submit" class="login-submit">Login</button>
      </form>
    </div>
  </main>
</body>
</html>
