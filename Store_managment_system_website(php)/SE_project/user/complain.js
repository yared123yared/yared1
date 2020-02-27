
// alert("i am in the javascript class for the complain");
var row_index_to_delete = " ";
// thise is to populate the table with database values
var ajax = new XMLHttpRequest();

var method = "GET";
var url = "get_data_complain.php";
var asynchronius = true;
ajax.open(method, url, asynchronius);
ajax.send();
ajax.onreadystatechange = function () {


    var data = JSON.parse(this.responseText);


    console.log(data);
    var html = "";

html += "<tr>"
html += "<th>" + "Complain No" + "</th>"
html += "<th>" + "User Name" + "</th>"
html += "<th>" + "Complain" + "</th>"
html += "<th>" + "Complain_date" + "</th>"
html += "<th>" + "Replier Id" + "</th>"
html += "<th>" + "Reply" + "</th>"
html += "<th>" + "Replay Date" + "</th>"


html += "</tr>"




    for (var a = 0; a < data.length; a++) {

        var complain_no = data[a].complain_no;
    
        var user_name = data[a].user_name;

        var complain = data[a].complain;
        if(complain==null){
            //  alert("the owner is empty");
            var complain_new=' ';
        }else{
            var complain_new=complain;
        }
        var complain_date = data[a].complain_date;

        var repley = data[a].repley;
        if(repley==null){
            //  alert("the owner is empty");
            var repley_new=' ';
        }else{
            var repley_new=repley;
        }
        var replier_id = data[a].replier_id;
        if(replier_id==null){
            //  alert("the owner is empty");
            var replier_id_new=' ';
        }else{
            var replier_id_new=replier_id;
        }
        var repley_date = data[a].repley_date;
        if(repley_date==null){
            //  alert("the owner is empty");
            var repley_date_new=' ';
        }else{
            var repley_date_new=repley_date;
        }
    

        html += "<tr>";

        html += "<td>" + complain_no + "</td>";
        html += "<td>" + user_name + "</td>";
        html += "<td>" + complain_new + "</td>";
        html += "<td>" + complain_date + "</td>";
        html += "<td>" + repley_new + "</td>";
        html += "<td>" + replier_id_new + "</td>";
        html += "<td>" + repley_date_new + "</td>";





        html += "</tr>";

    }
    document.getElementById("data").innerHTML = html;
    // alert(html);


}

var table = document.getElementById("table123"), rIndex;


// alert("i am in to in");
for (var i = 0; i < table.rows.length; i++) {
    alert("i am in");

    table.rows[i].onclick = function () {
        row_index_to_delete = this.cells[0].innerHTML;
        alert(row_index_to_delete);

        alert(this.cells[2].innerHTML);
        rIndex = this.rowIndex;
        alert(rIndex);
        console.log(rIndex);


    }
}




function callPHP() {
    // alert(row_index_to_delete);
    window.location.href = "brand_delete.php?w1=" + row_index_to_delete;
}
// 

function logout(){
    alert("Are you sure you want to log out?");
    window.location.href="http://localhost/SE_project/storeKeeper/log.php";

}  
  
function complain(){
    alert("thise is the complain class");
    window.location.href = "complain_for_item.php?w1=" + row_index_to_delete;

}























