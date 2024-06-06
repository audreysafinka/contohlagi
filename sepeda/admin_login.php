<?php
session_start();
  include 'class_sepeda.php';
  $admin = new sepeda();

  if (isset($_REQUEST['submit'])) {
    extract($_REQUEST);
      $login = $admin->check_login($emailusername, $password);
      if ($login) {
          // Registration Success
        echo "<script>alert('ANDA BERHASIL LOGIN!!');</script>";
        echo "<meta http-equiv='refresh' content='0; url=admin_index.php'>";
      } else {
          // Registration Failed
        echo "<script>alert('WRONG Username or Password!');</script>";
      }
  }
  ?>

<title>FORM LOGIN ADMIN</title>
    <link href="desain.css" rel="stylesheet" type="text/css">
  </head>
  <style>
   .footer{
    padding: 10px;
    margin-top: 10px;
    text-align: center;
    background-color:   #D3D3D3; }

     .atas_awal {
    background-color: #D3D3D3;
    height: 60px;
    width: 100%;
    border: 0; }
  
  .atas_awal div {
    display: flex;
    margin: 0 auto;
    width: 1200px;
    height: 100%; }

  .atas_awal div h1 {
    flex: 1;
    font-family: Algerian;
    font-size: 26px;
    padding: 0;
    margin: 0;
    color:  #2F4F4F;
    font-weight: bold; 
    display: inline-flex;
    align-items: center; }

  .atas_awal div a {
    padding: 0 20px;
    font-family: Cooper Black;
    font-size: 18px;
    text-decoration: none;
    color:  #2F4F4F;
    font-weight: bold;
  display: inline-flex;
    align-items: center;  }

  .atas_awal div a:hover {
    color: #E6E6FA; }

  </style>

  <body>

    <nav class="atas_awal">
    <div><h1>FORM LOGIN</h1>
      <a href = "index.php">BACK</a>
    </div>
    </nav>  

    <div class="login">
      <h1>LOGIN</h1>
      <form method="post" name=login>
        <label for="username"><i class="fas fa-user"></i></label>
        <td><input type="text" name="emailusername" required="" id="username" placeholder="Username OR Email"></td>

        <label for="password"><i class="fas fa-lock"></i></label>
        <input type="password" name="password" placeholder="Password" id="password" required="">
        
        <input type="submit" name=submit value="Login">
      </form>
    </div>
        <div class="footer">
    <p> &copy;  ANNISA NURUL PRATIWI - 20180810058 </p>
  </div>     
    
  </body>
</html>