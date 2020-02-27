function submit(){
    // alert("hey dude");
    // var row_index_to_delete=" "; 
    // alert("login");
    row_index_to_delete="";
    var user_name=document.getElementById("name").value;
    // alert(user_name);
    var password=document.getElementById("pass").value;
    // alert(password);
    // alert("it is okay");
    // var url = "get_user_data.php";
    
// thise is to populate the table with database values
var row_index_to_delete=" "; 

// thise is to populate the table with database values
var ajax = new XMLHttpRequest();
// var data=[];
// data.push(user_name);
// data.push(password);
// alert(data);
// var user = {
//     'name': 'Wayne',
//     'country': 'Ireland',
//     'selected': new Array(1, 5, 9)
// };
// var userStr = '[{"name":"yared","gender":"male"}]';
//var userStr = JSON.stringify(user);
//var someJSON='[{"name":"yared","gender":"male"}]';
var method = "POST";
var url = "get_user_data.php";
var asynchronius = true;
ajax.open(method, url);
ajax.setRequestHeader("content-type","application/x-www-form-urlencoded");
ajax.send("name='"+user_name+"' &password='"+password+"'");
// thise is reciving
ajax.onreadystatechange = function () {
    // alert("i am in the ready state");

    // alert(this.responseText);
    var data = JSON.parse(this.responseText);


    console.log(data);
var submit=0;
// alert(data.length);
if(data.length==0){
    alert("incorrect user name or password");
}else{
    row_index_to_delete=user_name;
    window.location.href = "http://localhost/help/home_user.php?w1=" +row_index_to_delete;

}
    
}
}
function register(){
    row_index_to_delete="";
     
    //   alert("heyyy");
        window.location.href = "http://localhost/help/registration_form.php";
    
    
    }