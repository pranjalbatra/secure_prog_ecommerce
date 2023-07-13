<!DOCTYPE html>
<html>
<head>
  <title>Create Account</title>
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
    
    input[type="text"],
    input[type="email"],
    input[type="password"] {
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
    }
  </style>
</head>
<body>
  <h1>Create Account</h1>
  <form method="post" action="create_account.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    
    <input type="submit" value="Create Account">
  </form>
  
  <p>Already have an account? <a href="login.html">Login</a></p>
</body>
</html>