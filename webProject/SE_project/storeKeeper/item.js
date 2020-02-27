var row_index_to_delete=" "; 
// thise is to populate the table with database values
var ajax = new XMLHttpRequest();

var method = "GET";
var url = "get_item_data.php";
var asynchronius = true;
ajax.open(method, url, asynchronius);
ajax.send();
// thise is reciving
ajax.onreadystatechange = function () {
    // alert("inside the ready function");

//    alert(this.responseText);
    var data = JSON.parse(this.responseText);


    console.log(data);
    var html = "";
        
    html += "<tr>"
    html += "<th>" + "Item Id" + "</th>"
    html += "<th>" + "Stock Name" + "</th>"
    html += "<th>" + "Brand Name" + "</th>"
    html += "<th>" + "Category Name" + "</th>"
    html += "<th>" + "Description"+"</th>"
 
  

    html += "</tr>"
  
   
    for (var a = 0; a < data.length; a++) {
        var owner=data[a].owner;
        alert(owner);
        
        var item_id=data[a].item_id;
        var st_name = data[a].stock_name;
        var br_name = data[a].brand_name;
        var cat_name = data[a].category_name;
        var desc = data[a].describtion;
     
        // if(owner==null){
            html += "<tr>";
        
            html += "<td>" + item_id+ "</td>";
            html += "<td>" + st_name+ "</td>";
            html += "<td>" + br_name + "</td>";
            html += "<td>" +cat_name + "</td>";
            html += "<td>" + desc+ "</td>";
           
    
            html += "</tr>";
        // }else{
        //     alert("thise value have owner");
        // }
       

    }
    // alert(html);
    
    document.getElementById("data").innerHTML = html;
  
    
}
  alert("welcome to the script");
var table=document.getElementById("table123"),rIndex;


alert("hey1");
for(var i=0;i<table.rows.length;i++){
alert("i am in");

table.rows[i].onclick=function(){
row_index_to_delete=this.cells[0].innerHTML;
alert(row_index_to_delete);

alert(this.cells[2].innerHTML);
rIndex=this.rowIndex;
alert(rIndex);
console.log(rIndex);


}
}



// 
function logout(){
    alert("Are you sure you want to log out?");
    window.location.href="http://localhost/SE_project/storeKeeper/log.php";

} 

 function request(){
     alert("heyy");
     window.location.href = "request_for_item.php?w1=" +row_index_to_delete;

 }
 




















