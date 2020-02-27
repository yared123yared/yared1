
<?php
session_start();
if (isset($_GET["w1"])) {

    $hello = $_GET["w1"];
    $_SESSION["username"]=$hello;
    // echo($_SESSION["username"]);
    
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User home</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
    <script src="bootstrap.min.js"></script> 
<script src="jquery-3.4.1.js"></script>
<script  src="bootstrap-validate.js"></script>
    <link rel="stylesheet" type="text/css" href="notification.css">
      <style>
        #left_nav>nav>ul>li>a>p{
            color:#fff;
            /*font-size:1.2em;*/
            margin-top:-2px;
            list-style-type:none;
            }
            #left_nav{
                    background-color: #2980B9;
                    width: 12%;
                }
                #head>h1{
                  text-align: center;
                    color:#fff;
                }
         #head{
            background-image: url("wallnew2.png");
            background-repeat: no-repeat;
            background-size: 80%;
            background-position: center;
                        }
                        @media only screen and (max-width: 678px){
                #head{
                    background-size:100%;
                }

                }
    
           </style>
</head>

<body>
    
    <div id="body">
        <div id="head" class="bg-primary col row-5">

            <head>
              
                <div id="head_nave">
                        <nav>
                            <ul>
                                <li><img src="storeKeeperHomeIcons/" alt="fb"></li>
                                <li><img src="" alt="twiter"></li>
                                <li><img src="" alt="skypi"></li>
                            </ul>
                        </nav>
                         
                    </div>
                    <button id="btn">log out</button>
                      <h1> AAIT Store Managment System</h1>
                   
                
            </head>

        </div>
        <div id="left">
        
        <div id="left_nav">
            



        <nav>
        <ul>
            <li><a href="home_user.php">
                    <img src="storeKeeperHomeIcons/home.png" alt="">
                <p>Home</p>
                    
                </a>
            </li>
            <li><a href="item.php">
                    <img src="storeKeeperHomeIcons/stock.png" alt="">
                <p>Item</p>

                </a>
            </li>
            <li><a href="notification.php">
                    <img src="storeKeeperHomeIcons/notification.png" alt="">
                <p>Notification</p>

                </a>
            </li>
            <li><a href="complain.php">
                    <img src="storeKeeperHomeIcons/complain.png" alt="">
                <p>complain</p>

                </a>
            </li>
            <!-- <li><a href="other.php">
                    <img src="storeKeeperHomeIcons/request.png" alt="">
                <p>Other</p>

                </a>
            </li> -->
           

           
          
            </ul>
    </nav>

        </div>
        </div>
       
    </div>
    
    
            
</body>

</html>
