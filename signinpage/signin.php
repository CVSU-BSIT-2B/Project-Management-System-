<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="signin.css" />
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
      <h1>Sign Up</h1>
      <p>Create your account below.</p>
      <form method="POST" action="consign.php">
        <label for="name" class="sr-only">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Full Name" required />

        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" placeholder="Email" required />

        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required />

        <button type="submit" class="login-submit">Sign Up</button>
      </form>
      <p class="switch-text">
        Do you have an account? 
        <a href="login.php" class="switch-link">Login</a>
      </p>
    </div>
  </main>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="signin.css" />
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
      <h1>Sign Up</h1>
      <p>Create your account below.</p>
      <form method="POST" action="consign.php">
        <label for="name" class="sr-only">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Full Name" required />

        <label for="email" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" placeholder="Email" required />

        <label for="password" class="sr-only">Password</label>
        <input type="password" id="password" name="password" placeholder="Password" required />

        <button type="submit" class="login-submit">Sign Up</button>
      </form>
      <p class="switch-text">
        Do you have an account? 
        <a href="login.php" class="switch-link">Login</a>
      </p>
    </div>
  </main>
</body>
</html>
>>>>>>> origin/main
