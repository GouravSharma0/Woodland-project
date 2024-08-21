<?php 

$con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"woodland");

if(isset($_POST["click"]))
{

  $name=$_POST["name"];

  $password=$_POST["password"];

  $email=$_POST["email"];

  $mobile=$_POST["mobile"];

  $address=$_POST["address"];

  $pincode=$_POST["pincode"];

  $qry="insert into table_register(name,password,email,mobile,address,pincode) values('".$name."','".$password."','".$email."','".$mobile."','".$address."','".$pincode."')";

  mysqli_query($con,$qry);

  header("location:login.php");

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
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Montserrat', sans-serif;
    }

    body {
      background: #0C5423;
      padding: 0 10px;
    }

    .wrapper {
      max-width: 500px;
      width: 100%;
      background: #fff;
      margin: 50px auto;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.125);
      padding: 30px;
    }

    .wrapper .title {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 25px;
      color: #fec107;
      text-transform: uppercase;
      text-align: center;
    }

    .wrapper .form {
      width: 100%;
    }

    .wrapper .form .inputfield {
      margin-bottom: 15px;
      display: flex;
      align-items: center;
    }

    .wrapper .form .inputfield label {
      width: 200px;
      color: #757575;
      margin-right: 10px;
      font-size: 14px;
    }

    .wrapper .form .inputfield .input,
    .wrapper .form .inputfield .textarea {
      width: 100%;
      outline: none;
      border: 1px solid #d5dbd9;
      font-size: 15px;
      padding: 8px 10px;
      border-radius: 3px;
      transition: all 0.3s ease;
    }

    .wrapper .form .inputfield .textarea {
      width: 100%;
      height: 125px;
      resize: none;
    }

    .wrapper .form .inputfield .custom_select {
      position: relative;
      width: 100%;
      height: 37px;
    }

    .wrapper .form .inputfield .custom_select:before {
      content: "";
      position: absolute;
      top: 12px;
      right: 10px;
      border: 8px solid;
      border-color: #d5dbd9 transparent transparent transparent;
      pointer-events: none;
    }

    .wrapper .form .inputfield .custom_select select {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      outline: none;
      width: 100%;
      height: 100%;
      border: 0px;
      padding: 8px 10px;
      font-size: 15px;
      border: 1px solid #d5dbd9;
      border-radius: 3px;
    }


    .wrapper .form .inputfield .input:focus,
    .wrapper .form .inputfield .textarea:focus,
    .wrapper .form .inputfield .custom_select select:focus {
      border: 1px solid #fec107;
    }

    .wrapper .form .inputfield p {
      font-size: 14px;
      color: #757575;
    }

    .wrapper .form .inputfield .check {
      width: 15px;
      height: 15px;
      position: relative;
      display: block;
      cursor: pointer;
    }

    .wrapper .form .inputfield .check input[type="checkbox"] {
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
    }

    .wrapper .form .inputfield .check .checkmark {
      width: 15px;
      height: 15px;
      border: 1px solid #fec107;
      display: block;
      position: relative;
    }

    .wrapper .form .inputfield .check .checkmark:before {
      content: "";
      position: absolute;
      top: 1px;
      left: 2px;
      width: 5px;
      height: 2px;
      border: 2px solid;
      border-color: transparent transparent #fff #fff;
      transform: rotate(-45deg);
      display: none;
    }

    .wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark {
      background: #fec107;
    }

    .wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark:before {
      display: block;
    }

    .wrapper .form .inputfield .btn {
      width: 100%;
      padding: 8px 10px;
      font-size: 15px;
      border: 0px;
      background: #fec107;
      color: #fff;
      cursor: pointer;
      border-radius: 3px;
      outline: none;
    }

    .wrapper .form .inputfield .btn:hover {
      background: #ffd658;
    }

    .wrapper .form .inputfield:last-child {
      margin-bottom: 0;
    }

    @media (max-width:420px) {
      .wrapper .form .inputfield {
        flex-direction: column;
        align-items: flex-start;
      }

      .wrapper .form .inputfield label {
        margin-bottom: 5px;
      }

      .wrapper .form .inputfield.terms {
        flex-direction: row;
      }
    }
  </style>



  <div class="wrapper">
    <div class="title">
      Registration Form
    </div>

    <div class="form">
      <form method="post">
        <div class="inputfield">
          <label>Your Name</label>
          <input type="text" name="name" class="input">
        </div>

        <div class="inputfield">
          <label>Password</label>
          <input type="password" name="password" class="input">
        </div>

        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select>
              <option value="">Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
          </div>
        </div>
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" name="email" class="input">
        </div>
        <div class="inputfield">
          <label>Mobile Number</label>
          <input type="number" name="mobile" class="input" required>
        </div>
        <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address"></textarea>
        </div>
        <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" name="pincode" class="input">
        </div>
        <!-- <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div>  -->
        <div class="inputfield">
          <input type="submit" name="click" value="Register" class="btn">
        </div>
      </form>
    </div>
  </div>


















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>