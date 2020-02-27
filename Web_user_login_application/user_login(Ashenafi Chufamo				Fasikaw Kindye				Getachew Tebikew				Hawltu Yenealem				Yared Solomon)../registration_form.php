
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="jquery-3.4.1.js"></script>
    <script src="bootstrap-validate.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>

    </style>
    <style>

    </style>
</head>

<body>
    <div id="container">
        <div id="header">

        </div>

        <div id="form">



            <form class="form-container" method="POST" action="formSubmit.php" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col">
                        <label for="fullname">Full Name</label>
                        <input type="text" name="fullname" id="itemname" class="form-control" placeholder="Enter Full Name">
                    </div>
                    <div class="col">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="user@gmail.com">


                    </div>
                </div>
                <!-- form row -->
                <div class="form-row">

                    <div class="col">
                        <label for="position">position</label>
                        <select name="position" placeholder="worker" class="form-control mdb-select md-form colorful-select dropdown-success">
                                <option value="worker">Worker</option>
                                <option value="worker">Campus Student</option>
                                <option value="worker">HighSchool Student</option>
                                <option value="worker">Priparatory</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="password">password</label>
                        <input type="password"  name="password" class="form-control">
                    </div>
                    <div class="col">
                            <label for="REpassword">Re enter Password</label>
                            <input type="password" name="Repassword" class="form-control">
                        </div>
                </div>
               
                <div class="form-row">
                        <div class="col">
                                <label for="country">country</label>
                                <select name="country" id="country" placeholder="country" class="form-control mdb-select md-form colorful-select dropdown-success">
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="America">America</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Nework">Nework</option>
                                        <option value="sudan">sudan</option>
                                        <option value="kenya">kenya</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Nework">Nework</option>
                                    </select>
                            </div>
                            <div class="col">
                                    <label for="city">city</label>
                                    <select name="city" id="city" placeholder="city" class="form-control mdb-select md-form colorful-select dropdown-success">
                                            <option value="Addise Ababa">Addise Ababa</option>
                                            <option value="Dessie">Dessie</option>
                                            <option value="Bahirdar">Bahirdar</option>
                                            <option value="Hawasa">Hawasa</option>
                                            <option value="Debre Mrkose">Debre Mrkose</option>
                                            <option value="Debre zayte">Debre zayte</option>
                                            <option value="Zewaye">Zewaye</option>
                                            <option value="Dere">Dere/option>
                                            <option value="Harar">Harar</option>
                                            <option value="Sidama">Sidama</option>
                                        </select>
                                </div>
                                <div class="col">
                            <label for="phone_number">phone Number</label>
                            <input type="tel" name="phone" class="form-control">
                        </div>
                    <div class="col">
                        <label for="description">say some thing about you</label>
                        <textarea name="description" rows="3" class="form-control" placeholder="Descripion"></textarea>

                    </div>
                    
                </div>
                <div class="col">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" placeholder="gender" class="form-control mdb-select md-form colorful-select dropdown-success">
                                <option value="male">male</option>
                                <option value="female">female</option>
                               
                            </select>
                    </div>
            

                        <div class="col">
                                      <input type="file" name="yared" value="select image">
                        </div>
                        
                    
                        <input name="submit" type="submit"  id="submit" class="btn btn-primary" value="Submit">
         
            </form>



        </div>


    </div>
</body>

</html>