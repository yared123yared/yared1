function submit(){
    row_index_to_delete="";
    var user_name=document.getElementById("name").value;
    // alert(user_name);
    var password=document.getElementById("pass").value;
    // alert(password);
    // alert("it is okay");
    var row_index_to_delete=" "; 
// thise is to populate the table with database values
var ajax = new XMLHttpRequest();

var method = "GET";
var url = "get_user_data.php";
var asynchronius = true;
ajax.open(method, url, asynchronius);
ajax.send();
// thise is reciving
ajax.onreadystatechange = function () {
    //  alert("inside the ready function");

    // alert(this.responseText);
    var data = JSON.parse(this.responseText);


    console.log(data);
var submit=0;
    for (var a = 0; a < data.length; a++) {
        var U_N=data[a].uname;
        row_index_to_delete=U_N;
        if(U_N==user_name){
            var PASS=data[a].password;
            if(password==PASS){
                submit+=1;
                var rol=data[a].role;
                if(rol=="user"){
                    
                    
                    // alert(U_N);
                    window.location.href = "http://localhost/SE_project/user/home_user.php?w1=" +row_index_to_delete;


    // window.location.href="http://localhost/SE_project/user/home_user.php";


                }else {
                    // alert(row_index_to_delete);
                    window.location.href = "http://localhost/SE_project/storeKeeper/storeKeeper.php?w1=" +row_index_to_delete;

                    
    // window.location.href="http://localhost/SE_project/storeKeeper/storeKeeper.html";
                }
            }
        }
       
}
if(submit==0){
    alert("incorrect user name and password");
}
}
}
