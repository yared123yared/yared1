// alert("heyy");

var row_index_to_delete=" "; 

// thise is to populate the table with database values
var ajax = new XMLHttpRequest();

var method = "GET";
var url = "get_full_brand_data.php";
var asynchronius = true;
ajax.open(method, url, asynchronius);
ajax.send();
// thise is reciving
ajax.onreadystatechange = function () {

    // alert(this.responseText);
    var data = JSON.parse(this.responseText);


    console.log(data);
    var html = "";
        
    html += "<tr>"

    html += "<th>" + "Brand Name" + "</th>"
    html += "<th>" + "Added By" + "</th>"
    html += "<th>" + "Date" + "</th>"
    html += "<th>" + "Description" + "</th>"
    html += "<th>" + "Category" + "</th>"
   

    html += "</tr>"
  
   
    for (var a = 0; a < data.length; a++) {
       
        var br_name = data[a].brand_name;
        var cat_name = data[a].category;

        var desc = data[a].descripton;
        var ad_by = data[a].added_by;
        var dt = data[a].date;

        html += "<tr>";
        
        html += "<td>" + br_name + "</td>";
        html += "<td>" + ad_by + "</td>";
        html += "<td>" + dt + "</td>";
        html += "<td>" + desc + "</td>";
        html += "<td>" + cat_name + "</td>";
       
       
        
      

        html += "</tr>";

    }
    // alert(html);
    
    document.getElementById("data").innerHTML = html;

    
}
var table=document.getElementById("table123"),rIndex;
   

// alert("i am in to in");
for(var i=0;i<table.rows.length;i++){
//    alert("i am in");

table.rows[i].onclick=function(){
    row_index_to_delete=this.cells[0].innerHTML;
    // alert(row_index_to_delete);
    
    // alert(this.cells[2].innerHTML);
rIndex=this.rowIndex;
// alert(rIndex);
console.log(rIndex);


}
}
 function logout(){
     alert("Are you sure you want to log out?");
     window.location.href="http://localhost/SE_project/storeKeeper/log.php";

 } 
    


function callPHP() {
    alert(row_index_to_delete);
            window.location.href = "brand_delete.php?w1=" +row_index_to_delete;
}
// 

function select() {
    

    var e = document.getElementById("select");
    var result = e.options[e.selectedIndex].text;



    switch (result) {
        case 'see Taken Item':
        alert("see Taken Item");
          
            var ajax = new XMLHttpRequest();

            var method = "GET";
            var url = "taken_item.php";
            var asynchronius = true;
            ajax.open(method, url, asynchronius);
            ajax.send();
            // thise is reciving
            ajax.onreadystatechange = function () {
                alert("thise is the function");
           

         alert(this.responseText);
                var data2 = JSON.parse(this.responseText);
           
                alert("the data have been retrieved");


                console.log(data2);
                var yared = "";
                yared += "<tr>"

                yared += "<th>" + "Stock Name" + "</th>"
                yared += "<th>" + "Stock Id" + "</th>"
                yared += "<th>" + "Brand Name" + "</th>"
                yared += "<th>" + "Category Name" + "</th>"
              

                yared += "</tr>"
                
                alert("here is the for");
                for (var b = 0; b < data1.length; b++) {
                    var st_nam = data1[b].stock_name;
                    var st_d = data1[b].item_id;
                    var brand_nam= data1[b].brand_name;
                    var ca_name = data1[b].category_name;
                   

                    yared += "<tr>";
                    yared += "<td>" + st_nam + "</td>";
                    yared += "<td>" + st_d + "</td>";
                    yared += "<td>" + brand_nam + "</td>";
                    yared += "<td>" + cat_name + "</td>";
                  


                    yared += "</tr>";
                    

                }
                
                document.getElementById("data").innerHTML = yared;
              
               
            }
             break;
        case 'see Not Taken Item':
            alert("see Not Taken Item");

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
        case 'see requested item':
            alert("see requested item");
            break;
        case ' ALL':
            alert("ALL");
            break;
        default:
            alert("ALL");
    }

}






















