<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Items</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="bootstrap.min.js"></script> 
<script src="jquery-3.4.1.js"></script>
<script  src="bootstrap-validate.js"></script>
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
                    <div  >
                
                <button  class="btn btn-danger" data-dismiss="modal"   onclick="logout()" id="btn"> logOut</button>
               
          </div >
                       <div class="modal-footer">
                         
                <!-- <button   id="submit" class="btn btn-primary" onclick="add_item()">Add Item</button> -->
            </div>
                <h1> AAIT Store Managment System</h1>

                    <div>
                          <!-- <select  id="select" class="float-right">
                              
                              <option value="None">-- select to see more --</option>
                              <option value="starter" selected>All </option>
                              <option value="ID000"> see Taken Item</option>
                              <option value="ID001"> see Not Taken Item</option>
                              <option value="ID002" >see requested item</option>
                              <option value="ID003"> ALL</option>
                              
                          </select> -->
                    </div>
            </head>

        </div>

        <div id="left">
            <div id="left_nav">
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
                        <img src="storeKeeperHomeIcons/brand.png" alt="">
                    <p>Brand</p>

                    </a>
                </li>
                <li><a href="category.php">
                        <img src="storeKeeperHomeIcons/category.png" alt="">
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
             <div id="table_view">
             <label for="table">These are the full stock</label>
           
                <div>
             <table id="table123" class="table table-hover">
                   
                   <tbody id="data">

                   </tbody>
               </table>
          
               </div>
               <div id="buttons">
               <div id="button"><a href="#myDemoModal" role="button" class="btn btn-large btn-success" data-toggle="modal">Add Item</a> </div>
               <div id="button"><a href="#myDemoModal" role="button" class="btn btn-large btn-success" data-toggle="modal" onclick="callPHP()">Remove Item</a> </div>
               </div>
             <?php   include('addItemDialog.php'); ?>
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