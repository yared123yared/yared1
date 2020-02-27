<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="user.css" >
<!------ Include the above in your HEAD tag ---------->

<!--
-->
<div  >
                
                <button  class="btn btn-danger" data-dismiss="modal"   onclick="logout()" id="btn"> logOut</button>
               
          </div >
                       <div class="modal-footer">
                         
                <!-- <button   id="submit" class="btn btn-primary" onclick="add_item()">Add Item</button> -->
            </div>
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
				<?php 
				include('connection.php');
				$yared="select image from image where keyy='$user_name'";
     $result3=mysqli_query($conn,$yared);
     while ($row = $result3 -> fetch_assoc()) {
         
        echo '<img height="30" width="80" src="data:image;base64,'.$row['image'].'">';
       
       }?>
					<img src="" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div id="person_name" class="profile-usertitle-name">
						Marcus Doe
					</div>
					<div id="position" class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
					<li class="active">
						<li>
						
						Gender: <i id="Genderrr" class="glyphicon glyphicon-gender"></i>
						</a>
						</li>
						<li class="active">
						<li>
						
						Country: <i id="countryyyy" class="glyphicon glyphicon-ok"></i>
						</a>
						</li>
						
						Email: <i id="email" class="glyphicon glyphicon-home"></i>
						 </a>
						</li>
					
						<li>
						
						phone: <i  id="phoneeeee" class="glyphicon glyphicon-user"></i>
						</a>
						</li>
						
						<li>
						
						City: <i  id="cityyyyy" class="glyphicon glyphicon-flag"></i>
						 </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            Person Description:<div id="descriptionnn" class="profile-content">
	
            </div>
		</div>
	</div>
</div>

<strong>Powered by <a href="" target="_blank"></a></strong>
<script src="user.js"></script>
<br>
<br>


