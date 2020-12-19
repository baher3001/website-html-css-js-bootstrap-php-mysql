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
    <?php
        if(isset($_GET['error']))
        {
            echo"<div class='alert alert-danger'> please login first to access  </div> ";
        }
    
    
    
    ?>




        <header>
            <div class="container h-100 d-flex align-items-center justify-content-center">
            <form action="" method="POST" class="w-100"> 
                <div class="row">
                <div class="col">
                    <h1 class="text-center"> LOGIN </h1>
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

                    <input type="submit" value="signup" name="log" class="btn btn-danger btn-block"> 
                
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
            inputs[1].type="text";
        }
        icons[1].onclick = function()
        {
            icons[1].style.display="none";
            icons[0].style.display="block";
            inputs[1].type="password";
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
if(isset($_POST['log']))
{
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM test WHERE mail='$mail' AND pass='$pass'";

    $result = $connection->query($sql);

    if($result->num_rows>0)
    {
        session_start();
        while($rows = $result->fetch_assoc())
        {
            $_SESSION['id']=$rows['id'];
        }
        header('location:home.php');
        echo"ok";
    }else
    {
        echo"error please try again";
    }

}







?>
