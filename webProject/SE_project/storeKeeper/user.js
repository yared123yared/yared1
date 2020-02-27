
alert("welcome to thise class");

// thise is to populate the table with database values
var ajax = new XMLHttpRequest();

var method = "GET";
var url = "data.php";
var asynchronius = true;
ajax.open(method, url, asynchronius);
ajax.send();
// thise is reciving
ajax.onreadystatechange = function () {
 alert(this.responseText);
 alert("welcome to the parsing");
    var data = JSON.parse(this.responseText);
    alert("okay");

    console.log(data);
    var html = "";
    html += "<tr>"

    html += "<th>" + "First Name" + "</th>"
    html += "<th>" + "Last Name" + "</th>"
    html += "<th>" + "User Name" + "</th>"
    html += "<th id='yared' >" + "Role" + "</th>"

    html += "</tr>"
    for (var a = 0; a < data.length; a++) {
        var firstname = data[a].fname;
        var lastname = data[a].lname;
        var username = data[a].uname;
        var r = data[a].role;

        html += "<tr>";
        html += "<td>" + firstname + "</td>";
        html += "<td>" + lastname + "</td>";
        html += "<td>" + username + "</td>";
        html += "<td>" + r + "</td>";


        html += "</tr>";

    }
    
    document.getElementById("data").innerHTML = html;
    

    
}
// 
function logout(){
    alert("Are you sure you want to log out?");
    window.location.href="http://localhost/SE_project/storeKeeper/log.php";

} 
function select() {
    

    var e = document.getElementById("select");
    var result = e.options[e.selectedIndex].text;



    switch (result) {
        case 'item taken user':
          
            var ajax = new XMLHttpRequest();

            var method = "GET";
            var url = "taken_user.php";
            var asynchronius = true;
            ajax.open(method, url, asynchronius);
            ajax.send();
            // thise is reciving
            ajax.onreadystatechange = function () {
           

         
                var data1 = JSON.parse(this.responseText);
           
                


                console.log(data1);
                var yared = "";
                yared += "<tr>"

                yared += "<th>" + "First Name" + "</th>"
                yared += "<th>" + "Last Name" + "</th>"
                yared += "<th>" + "User Name" + "</th>"
                yared += "<th>" + "Item Id" + "</th>"
                yared += "<th>" + "Take Number" + "</th>"

                yared += "</tr>"
                
                
                for (var b = 0; b < data1.length; b++) {
                    var firstname = data1[b].fname;
                    var lastname = data1[b].lname;
                    var username = data1[b].uname;
                    var Item_id = data1[b].item_id;
                    var Take_no = data1[b].take_no;

                    yared += "<tr>";
                    yared += "<td>" + firstname + "</td>";
                    yared += "<td>" + lastname + "</td>";
                    yared += "<td>" + username + "</td>";
                    yared += "<td>" + Item_id + "</td>";
                    yared += "<td>" + Take_no + "</td>";


                    yared += "</tr>";
                    

                }
                
                document.getElementById("data").innerHTML = yared;
              
               
            }
             break;
        case 'Free user':
            alert("Free user");

            var ajax = new XMLHttpRequest();

            var method = "GET";
            var url = "user_not_taken.php";
            var asynchronius = true;
            ajax.open(method, url, asynchronius);
            ajax.send();
            // thise is reciving
            ajax.onreadystatechange = function () {
           

         
                var data1 = JSON.parse(this.responseText);
           
                


                console.log(data1);
                var yared = "";
                yared += "<tr>"

                yared += "<th>" + "First Name" + "</th>"
                yared += "<th>" + "Last Name" + "</th>"
                yared += "<th>" + "User Name" + "</th>"
               
                yared += "</tr>"
                
                
                for (var b = 0; b < data1.length; b++) {
                    var firstname = data1[b].fname;
                    var lastname = data1[b].lname;
                    var username = data1[b].uname;
                 
                    yared += "<tr>";
                    yared += "<td>" + firstname + "</td>";
                    yared += "<td>" + lastname + "</td>";
                    yared += "<td>" + username + "</td>";
                   

                    yared += "</tr>";
                    

                }
                
                document.getElementById("data").innerHTML = yared;
              
               
            }
            break;
        case 'ALL':
            alert("ALL");
            break;
        default:
            alert("ALL");
    }

}