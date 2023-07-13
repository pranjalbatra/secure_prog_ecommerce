<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    
    h1 {
      text-align: center;
    }
    
    form {
      max-width: 400px;
      margin: 0 auto;
    }
    
    label {
      display: block;
      margin-bottom: 10px;
    }
    
    input[type="email"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    
    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    input[type="submit"]:hover {
      background-color: #45a049;
    }
    
    p {
      text-align: center;
      margin-top: 20px;
    }
    
    p a {
      text-decoration: none;
      color: #007bff;
    }
    
    p a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <h1>Forgot Password</h1>
  <form method="post" action="reset_password.php">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <input type="submit" value="Reset Password">
  </form>
  
  <p>Remembered your password? <a href="login.html">Login</a></p>
  <p>Don't have an account? <a href="create_account.html">Create an account</a></p>
</body>
</html>
