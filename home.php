<?php
  session_start();
    if(isset($_SESSION['id']))
    { 
        
    }
    else
    {
        header('location:login.php?error=1'); // send data in url in super global get 
    }




?>






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colories</title>
    <style>
       body
       {
           height:1000px;
       }
    </style>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" href="outline-calories-icon-isolated-black-simple-line-vector-28248504.jpg">
</head>
<body>
<!--start nav-->
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="#">Colories</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

        <a href="logout.php" class="btn btn-danger" id="ss"> Logout  </a>

  </div>
</nav>
<!--start nav-->
<header>
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col-lg-12 ">
            
                <h1>  START A NEW DAY   </h1>
            
            </div>
        </div>   
    </div>
</header>
<!--start section-->
    <section class="cul">
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="row w-100">
                <div class="col-lg-12  mt-3">
                    <div class="form-group">
                        <label for=""> Age </label>
                        <input type="number" id="age" class="form-control" placeholder="Enter your Age">
                    </div>
                </div>
                <div class="col-lg-12 mt-3">
                 <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <label for="  "> male </label>
                    <input type="radio" aria-label="Radio button for following text input" name="gender" id="male" >

                    <label for="  "> female </label>
                    <input type="radio" aria-label="Radio button for following text input" name="gender" id="female">

                    </div>
                </div>   
                                
                </div>
                <div class="col-lg-12 mt-3">
                    <label for=""> Active  </label>
                    <input type="text" class="form-control" id="active" placeholder="Enter your active">
                </div>
                <div class="col-lg-12  mt-3">
                    <input type="submit" value="Cal"  id="add1" class="btn btn-danger btn-block">
                    <input type="submit" value="Cal"  id="add2" class="btn btn-dark btn-block">


                </div>
                <div class="col-lg-12 mt-3">
                    <h1 id="result" class="text-center" >   </h1>
                </div>

            </div>
        </div>
    </section>



<!--end section-->


<!--footer-->

<footer>
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col">

                <h5> &copy; all rights to Baher &reg;teams </h5>

            </div>
        </div>
    </div>
</footer>









<script src="jquery-3.5.1.js"></script>
<script src="bootstrap.js"></script>
<script>
    let age = document.getElementById('age')
    let male = document.getElementById('male')
    let female = document.getElementById('female')
    let active = document.getElementById('active')
    let add1 = document.getElementById('add1')
    let add2 =document.getElementById('add2')
    let result = document.getElementById('result')

    male.onclick = function()
    {
        add1.style.display="block";
     

    }

    female.onclick = function()
    {
        add2.style.display="block"

    } 

   
    add1.onclick = function()
    {
        if(age.value <= 100 && age.value >= 1)
        {
        if(active.value=='weak')
        {
            result.innerHTML = age.value * 25 + 'colories'

        }
        else if(active.value=='average')
            {
                result.innerHTML = age.value * 35 + 'colories'
            }
                
       else if(active.value == 'high' )
            {
                result.innerHTML = age.value * 40 + 'colories'
            }

        else
        {
            result.innerHTML = 'please try again '
            result.style.color="red";

        }

        }
        else
        {
            result.innerHTML = 'please entry your information '
            result.style.color="red";
        }
        

    } 


    add2.onclick = function()
    {
        if(age.value <= 100 && age.value >= 1)
        {
        if(active.value=='weak')
        {
            result.innerHTML = age.value * 25 + 'colories'

        }
        else if(active.value=='average')
            {
                result.innerHTML = age.value * 35 + 'colories'
            }
                
    else if(active.value == 'high' )
            {
                result.innerHTML = age.value * 40 + 'colories'
            }

        else
        {
            result.innerHTML = 'please try again '
            result.style.color="red";

        }

        }
        else
        {
            result.innerHTML = 'please entry your information '
            result.style.color="red";
        }
        
    }





</script>
</body>
</html>