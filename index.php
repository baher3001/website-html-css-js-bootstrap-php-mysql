<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colories</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="outline-calories-icon-isolated-black-simple-line-vector-28248504.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
        <header>
            <div class="container h-100 d-flex align-items-center justify-content-center">
            <form action="" method="POST"> 
                <div class="row">
                <div class="col">
                    <h1 class="text-center"> SIGN UP </h1>
                </div>

                <div class="col-lg-12">
                    <div class="form-group">
                        <label for=""> Enter your Name:  </label>
                        <input type="text" name="name" class="form-control" placeholder=" Enter your name" required>
                        <p> Enter your name here  </p> 
                    </div>
                </div>
                <div class="col-lg-12">
                <div class="form-group">
                        <label for=""> Enter your Email:  </label>
                        <input type="email" name="mail" class="form-control" placeholder=" Enter your Email" required> 
                        <p> Enter your Email here  </p> 
                    </div>
                </div>
                <div class="col-lg-12">
                <div class="form-group">
                        <label for=""> Enter your Password:  </label>
                        <input type="password" name="pass" class="form-control" placeholder=" Enter your password" required> 
                        <p> Enter your password here  </p> 
                        <i class="fas fa-eye"></i>
                        <i class="fas fa-eye-slash" style="display:none;"></i>
                    </div>
                
                </div>
                <div class="col-lg-12">

                    <input type="submit" value="signup" name="sign" class="btn btn-danger btn-block"> 
                
                </div>   
                </div>
                </form>
             </div>
        </header>



    

    <script src="jquery-3.5.1.js"></script>
    <script src="bootstrap.js"></script>
    <script>
        var icons = document.querySelectorAll('i');
        var inputs = document.querySelectorAll('.form-control')
        icons[0].onclick = function()
        {
            icons[0].style.display="none";
            icons[1].style.display="block";
            inputs[2].type="text";
        }
        icons[1].onclick = function()
        {
            icons[1].style.display="none";
            icons[0].style.display="block";
            inputs[2].type="password";
        }
                
        for(let i = 0;i<inputs.length;i++)
            {   
                inputs[i].onblur = function(e)
                {
                    if(e.target.value.length<4)
                    {
                        e.target.nextElementSibling.style.display="block";
                    }else
                    {
                        e.target.nextElementSibling.style.display="none";
                    }
                }

            }


     
    </script>
</body>
</html>



<?php

 include('db.php');
if(isset($_POST['sign']))
  {
      $name = $_POST['name'];
      $mail = $_POST['mail'];
      $pass = $_POST['pass'];

   $sql = "INSERT INTO test(name,mail,pass)VALUES('$name','$mail','$pass')";

    if($connection->query($sql))
    {
       header('location:login.php');
    }else
    {
       
    }


  }          

  


?>