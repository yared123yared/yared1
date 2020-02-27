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
    <title>StoreKeeper</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="bootstrap.min.js"></script> 
<script src="jquery-3.4.1.js"></script>
<script  src="bootstrap-validate.js"></script>
    <link rel="stylesheet" type="text/css" href="brand.css">
</head>
<style>
     #head{
                        background-image: url("wallnew2.png");
                        background-repeat: no-repeat;
                        /*padding: 2%;*/
                        background-size: 80%;
                        background-position: center;
                    }
                     #left_nav>nav>ul>li>a>p{
                            color:#fff;
                            /*font-size:1.2em;*/
                            margin-top:-2px;
                            list-style-type:none;
                            }
                      #head>h1{
                            text-align: center;
                            color: rgb(255,255,255);
                           
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
    <div id="head" class="bg-primary row-5 col">
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
                <h1> AAIT Store Managment System</h1>

                   
            </head>
        </div>

<div>
                          <select  id="select" class="float-right">
                              <option value="None">-- select to see more --</option>
                              <option value="starter" selected>All </option>
                              <option value="ID000"> see Taken Item</option>
                              <option value="ID001"> see Not Taken Item</option>
                              <option value="ID002" >see requested item</option>
                              <option value="ID003"> ALL</option>
                              
                          </select>
                    </div>
        <div id="left">
            <div id="left_nav" class="bg-info col-2">
        <nav>
             <ul>
                <li><a href="storeKeeper.html">
                        <img src="storeKeeperHomeIcons/home.png" alt="">
                    <p>Home</p>
                        
                    </a>
                </li>
                <li><a href="stock.php">
                        <img src="storeKeeperHomeIcons/stock.png" alt="">
                    <p>Stock</p>

                    </a>
                </li>
                <li><a href="brand.php">
                        <img src="storeKeeperHomeIcons/stock.png" alt="">
                    <p>Brand</p>

                    </a>
                </li>
                <li><a href="category.php">
                        <img src="storeKeeperHomeIcons/stock.png" alt="">
                    <p>Category</p>

                    </a>
                </li>
                <li><a href="request.php">
                        <img src="storeKeeperHomeIcons/request.png" alt="">
                    <p>Request</p>

                    </a>
                </li>
                <li><a href="complain.html">
                        <img src="storeKeeperHomeIcons/complain.png" alt="">
                    <p>Complain</p>

                    </a>
                </li>
                <li><a href="user.php">
                        <img src="storeKeeperHomeIcons/other.png" alt="">
                    <p>Other</p>

                    </a>
                </li>   
                </ul>
        </nav>

    </div>
    <div id="image view">

    </div>
</body>

</html>