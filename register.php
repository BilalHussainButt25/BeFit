<?php
    include 'connection.php';

    if (isset($_POST['submit-btn'])) {
        $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $name = mysqli_real_escape_string($conn, $filter_name);

        $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $email = mysqli_real_escape_string($conn, $filter_email);

        $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $password = mysqli_real_escape_string($conn, $filter_password);

        $filter_cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
        $cpassword = mysqli_real_escape_string($conn, $filter_cpassword);

        $select_user = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' ") or die('query failed');


        if (mysqli_num_rows($select_user)>0) {
            $message[] = 'user already exist';
        }else{
            if ($password != $cpassword) {
                $message[] = 'wrong password';
            }else{
                mysqli_query($conn, "INSERT INTO users(name, email, password) VALUES ('$name', '$email', '$password')") or die('query failed');
                $message[] = 'registered successfully';
                header('location:index.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <style>
        .notify{
    text-align: center;
    text-transform: capitalize;
    margin: 0 auto;
    margin-bottom: 2rem;
    width: 59%;
    padding: 0.5rem 1.5rem;
    border-radius: 5px;
    display: flex;
    justify-content: space-between;
    background: #000;
    color: #fff;
}
.notify i{
    cursor: pointer;
}
body
{
margin: 0;
padding: 0;
background-image: url("img/banner-bg.jpg");
/* background-color: #030406; */
background-size: cover; 
font-family: sans-serif;

}
.title
{

text-align: center; 
padding: 50px 0 20px;

}

.title h1

{

margin: 0;
 padding: 0; 
 color: red; 
 text-transform: uppercase; 
 font-size: 36px;


}
.container

{

width: 70%;

height: 500px;

background: #fff; margin: 0 auto;

border: 2px solid #fff;

box-shadow: 0 15px 40px rgba(0,0,0,.5);

}

.container .left

{

float: left;

width: 50%;

height: 800px;

/* background: url(image/home-img-2.png); */

background-size: cover;

box-sizing: border-box;

}
.container.right

{

float: right;

width: 50%;

height: 400px;

box-sizing:border-box;

}
.form

{

width: 100%;

padding: 40px 20px;

box-sizing: border-box;

height: 400px;

background: #fff;

}

.form p

{

margin: 0;

padding: 0;

font-weight: bold;

color: red;
}

.form input

{
margin-bottom: 20px;
}

.form input[type="email"],

.form input[type="Password"],
.form input[type="text"]

{

border: none;

border-bottom: 2px solid #543F3A;

outline: none;

height: 40px;

}
.form input[type="text"]:focus, 
.form input[type="Password"]:focus 
{

border-bottom: 2px solid #543F3A;

}
.form input[type="submit"]

{

border: none;

outline: none;

height: 40px;

color: black;

background: red;

cursor: pointer;
font-weight: bold;

}
.form input[type="submit"]:hover

{
    background: #7C584A;
}



I

.form a

{

color: #262626;

font-size: 12px;

font-weight:bold;

}
img{
    width: 90%;
    height: 500px;
    border-radius: 25px;
  
 
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Register page</title>
</head>
<body>

    <section class="form-container">
        <?php
        if(isset($message)) {
            foreach($message as $message) {
               echo '
                <div class="notify">
                 <span>'.$message.'</span>
                <i class="bi bi-x-circle" onclick ="this.parentElement.remove()"></i>
              </div>';
            }
        }
    ?>
     <div class="title"> <h1>Register now</h1><br></div>
     <div class="container" >
        <div class="left"><img src="img/unsplash.jpg" alt=""></div>
        <div class="right">
            <div class="form">
        <form method="post">
           
          <p>Enter name</p>
           <input type="text" name="name" placeholder="Enter name" required>
           <p>Enter email</p>
           <input type="email" name="email" placeholder="Enter password" required>
           <p>Enter Password</p>
           <input type="password" name="password" placeholder="*******" required>
           <p>Reenter Password</p>
           <input type="password" name="cpassword" placeholder="*******" required><br>
           

           <input type="submit" name="submit-btn" value="Register-now" class="btn">
           

          </form>
          </div>
        </div>
     </div>
      
       
	</section>
    
</body>
</html>