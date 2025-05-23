<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap');

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Patrick Hand', cursive;
      }

      body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url(img/login.jpg);
        background-size: cover;
        background-position: center;
      }

      .login-form {
        background: rgba(64, 64, 64, 0.15);
        border: 3px solid rgba(255, 255, 255, 0.3);
        padding: 30px;
        border-radius: 16px;
        backdrop-filter: blur(25px);
        text-align: center;
        color: white;
        width: 400px;
        box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.15);
      }

      .login-title {
        font-size: 40px;
        margin-bottom: 40px;
      }

      .input-box {
        margin: 20px 0;
        position: relative;
      }
      .input-box input {
        width: 100%;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        padding: 12px 12px 12px 45px;
        border-radius: 99px;
        outline: 3px solid transparent;
        transition: 0.3s;
        font-size: 17px;
        color: white;
        font-weight: 600;
      }
      .input-box input::placeholder {
        color: aliceblue;
        font-size: 17px;
        font-weight: 500;
      }
      .input-box input:focus {
        outline: 3px solid lightcyan;
      }

      .input-box i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
        color: aliceblue;
      }

      .remember-forgot-box {
        display: flex;
        justify-content: space-between;
        margin: 20px 0;
        font-size: 15px;
      }

      .remember-forgot-box label {
        display: flex;
        gap: 9px;
        cursor: pointer;
      }
      .remember-forgot-box input {
        color: white;
        cursor: pointer;
      }

      .remember-forgot-box a {
        color: white;
        text-decoration: none;
      }
      .remember-forgot-box a:hover {
        text-decoration: underline;
      }

      .login-btn {
        width: 100%;
        padding: 10px 0;
        background: #2f9cf4;
        border: none;
        border-radius: 99px;
        color: white;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: 0.3s;
      }
      .login-btn:hover {
        background: #0b87ec;
      }

      .register {
        margin-top: 15px;
        font-size: 15px;
      }
      .register a {
        color: white;
        text-decoration: none;
        font-weight: 500;
      }
      .register a:hover {
        text-decoration: underline;
      }

      /* media queries */

/* laptop */
@media (max-width: 1366px) {
    html {
        font-size: 75%;
    }
}

/* tablet */
@media (max-width: 768px) {
    html {
        font-size: 62.5%;
    }
}

/* android */
@media (max-width: 450px) {
    html {
        font-size: 55%;
    }
}
    </style>
  </head>
  <body>
    <form action="index.html" method="post" class="login-form">
      <h1 class="login-title">Login</h1>

      <div class="input-box">
        <i class="bx bxs-user"></i>
        <input type="text" placeholder="Username" />
      </div>
      <div class="input-box">
        <i class="bx bxs-lock-alt"></i>
        <input type="password" placeholder="Password" />
      </div>

      <div class="remember-forgot-box">
        <label for="remember">
          <input type="checkbox" id="remember" />
          Remember me
        </label>
        <a href="#">Forgot Password?</a>
      </div>

      <button type="submit" class="login-btn">Login</button>

      <p class="register">
        Don't have an account?
        <a href="register.php">Register</a>
      </p>
    </form>
  </body>
</html>
