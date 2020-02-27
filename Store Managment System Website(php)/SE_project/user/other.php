<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Others</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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
                      <h1> AAIT Store Managment System</h1>
                    <div>
                    <select  id="select" onclick="select()" value="yared" class="float-right">
          
          <option value="None">-- select to see more --</option>
          <option value="starter" selected>All </option>
          <option value="ID000"> see Taken Item</option>
          <option value="ID001"> see Not Taken Item</option>
          <option value="ID002" >see requested item</option>
          <option value="ID003"> ALL</option>
          
      </select>
</div>
                
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
                        <img src="storeKeeperHomeIcons/stock.png" alt="">
                    <p>Notification</p>

                    </a>
                </li>
                <li><a href="complain.php">
                        <img src="storeKeeperHomeIcons/stock.png" alt="">
                    <p>complain</p>

                    </a>
                </li>
                <li><a href="other.php">
                        <img src="storeKeeperHomeIcons/request.png" alt="">
                    <p>Other</p>
                    </a>
                </li>
                </ul>
        </nav>

            </div>
            <div id="table_view">
                <div>  
                  
            <table class="table table-hover">
                   
                   <tbody id="data">

                   </tbody>
                   
                  
               </table>
               </div>
               <div id="button"><a href="#myDemoModal" role="button" class="btn btn-large btn-success" data-toggle="modal">Add Item</a> </div>
             <?php   
             // include('addItemDialog.php'); ?>
               <script src="stock.js"></script>
              
               
               
            </div>
          
           
           
           
           
        </div>
        
                

           
    </div>
    <script>
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
            </script>
    
            
</body>

</html>