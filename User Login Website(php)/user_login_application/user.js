var row_index_to_delete=" "; 

// thise is to populate the table with database values
var ajax = new XMLHttpRequest();

var method = "GET";
var url = "get_user_data_new.php";
var asynchronius = true;
ajax.open(method, url, asynchronius);
ajax.send();
// thise is reciving
ajax.onreadystatechange = function () {

    //  alert(this.responseText);
    var data = JSON.parse(this.responseText);


//     console.log(data);
// alert("i have finished the parsing");
for (var a = 0; a < data.length; a++) {
       
        var name = data[a].name;
        var email = data[a].email;

        var country = data[a].country;
        var gender = data[a].gender;
        var position = data[a].position;
        var phonenumber = data[a].phonenumber;
        var city = data[a].city;
        var description=data[a].descripton;
    //    alert(name);
    //    alert(email);
    //    alert(gender);
    //    alert(position);
    //    alert(city);
    //    alert(country);
       

       
       
        
}

       

   
 
    //alert("it is okay");
    document.getElementById("Genderrr").innerHTML = gender;
   
    document.getElementById("phoneeeee").innerHTML=phonenumber;
    
    document.getElementById("descriptionnn").innerHTML=description;
    document.getElementById("cityyyyy").innerHTML = city;
    document.getElementById("countryyyy").innerHTML = country;
    document.getElementById("person_name").innerHTML = name;
    document.getElementById("email").innerHTML = email;
    //document.getElementById("phone").innerHTML = phonenumber;
    document.getElementById("position").innerHTML = position;
    
    //alert(country);
    
    

    
}
// alert("every thing is fine now");
function logout(){
    alert("Are you sure you want to log out?");
    window.location.href="http://localhost/help/log.php";

} 