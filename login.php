<?php

$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"woodland");

if(isset($_POST["click"]))
{

  $mobile=$_POST["mobile"];

  $password=$_POST["password"];

  $qry="select * from table_register where mobile='".$mobile."' and password='".$password."'";


  $tbl=mysqli_query($con,$qry);

  if($r=mysqli_fetch_array($tbl))
  {
    header("location:woodland.php");
  }
  else
  {
    echo "invalid data";
  }

}







?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <style>
    .row {
      border: 1px solid black;
    }

    .col,
    .col-1,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-10,
    .col-11,
    .col-12 {
      border: 1px solid red;
    }

    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Quicksand', sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: #000;
    }

    section {
      position: absolute;
      width: 100vw;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 2px;
      flex-wrap: wrap;
      overflow: hidden;
    }

    section::before {
      content: '';
      position: absolute;
      width: 100%;
      height: 100%;
      background: linear-gradient(#000, #0f0, #000);
      animation: animate 5s linear infinite;
    }

    @keyframes animate {
      0% {
        transform: translateY(-100%);
      }

      100% {
        transform: translateY(100%);
      }
    }

    section span {
      position: relative;
      display: block;
      width: calc(6.25vw - 2px);
      height: calc(6.25vw - 2px);
      background: #181818;
      z-index: 2;
      transition: 1.5s;
    }

    section span:hover {
      background: #0f0;
      transition: 0s;
    }

    section .signin {
      position: absolute;
      width: 400px;
      background: #222;
      z-index: 1000;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
      border-radius: 4px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 9);
    }

    section .signin .content {
      position: relative;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      gap: 40px;
    }

    section .signin .content h2 {
      font-size: 2em;
      color: #0f0;
      text-transform: uppercase;
    }

    section .signin .content .form {
      width: 100%;
      display: flex;
      flex-direction: column;
      gap: 25px;
    }

    section .signin .content .form .inputBox {
      position: relative;
      width: 100%;
    }

    section .signin .content .form .inputBox input {
      position: relative;
      width: 100%;
      background: #333;
      border: none;
      outline: none;
      padding: 25px 10px 7.5px;
      border-radius: 4px;
      color: #fff;
      font-weight: 500;
      font-size: 1em;
    }

    section .signin .content .form .inputBox i {
      position: absolute;
      left: 0;
      padding: 15px 10px;
      font-style: normal;
      color: #aaa;
      transition: 0.5s;
      pointer-events: none;
    }

    .signin .content .form .inputBox input:focus~i,
    .signin .content .form .inputBox input:valid~i {
      transform: translateY(-7.5px);
      font-size: 0.8em;
      color: #fff;
    }

    .signin .content .form .links {
      position: relative;
      width: 100%;
      display: flex;
      justify-content: space-between;
    }

    .signin .content .form .links a {
      color: #fff;
      text-decoration: none;
    }

    .signin .content .form .links a:nth-child(2) {
      color: #0f0;
      font-weight: 600;
    }

    .signin .content .form .inputBox input[type="submit"] {
      padding: 10px;
      background: #0f0;
      color: #000;
      font-weight: 600;
      font-size: 1.35em;
      letter-spacing: 0.05em;
      cursor: pointer;
    }

    input[type="submit"]:active {
      opacity: 0.6;
    }

    @media (max-width: 900px) {
      section span {
        width: calc(10vw - 2px);
        height: calc(10vw - 2px);
      }
    }

    @media (max-width: 600px) {
      section span {
        width: calc(20vw - 2px);
        height: calc(20vw - 2px);
      }
    }
  </style>



  <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>

    <div class="signin">

      <div class="content">
        <h2>Welcome </h2>

        <form method="post">

          <div class="form">

            <div class="inputBox">

              <input type="text" name="mobile" required> <i>Mobile</i>

            </div>

            <div class="inputBox">

              <input type="password" name="password" required> <i>Password</i>

            </div>

            <div class="links"> <a href="register.php">Create Account</a>

            </div>

            <div class="inputBox">

              <input type="submit" name="click" value="Login">

            </div>

          </div>
        </form>

      </div>

    </div>

  </section> <!-- partial -->























  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>