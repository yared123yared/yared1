
var row_index_to_delete=" ";
var owner_user_name=" ";

// thise is to populate the table with database values
var ajax = new XMLHttpRequest();

var method = "GET";
var url = "requested_user_data.php";
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

    html += "<th>" + "Requested_Id" + "</th>"
    html += "<th>" + "User Name" + "</th>"

    html += "<th>" + "Item Id" + "</th>"
    html += "<th>" + "Request Date" + "</th>"
    html += "<th>" + "Approved" + "</th>"
    html += "<th>" + "Approved By" + "</th>"
    html += "<th>" + "Approved Date" + "</th>"


    html += "</tr>"
    for (var a = 0; a < data.length; a++) {
        var req_id = data[a].request_id;
        var us_name = data[a].user_name;
        var itm_id = data[a].item_id;
        var req_date = data[a].request_date;
        var app = data[a].aproved;
        var app_by = data[a].approved_by;
        var app_date = data[a].aprove_date;
        if(app==null){
            //  alert("the owner is empty");
            var app_new=' ';
        }else{
            var app_new=app;
        }
        if(app_by==null){
            //  alert("the owner is empty");
            var app_by_new=' ';
        }else{
            var app_by_new=app_by;
        }
        if(app_date==null){
            //  alert("the owner is empty");
            var app_date_new=' ';
        }else{
            var app_date_new=app_date;
        }

        html += "<tr>";
        html += "<td>" + req_id + "</td>";
        html += "<td>" + us_name + "</td>";
        html += "<td>" + itm_id + "</td>";
        html += "<td>" + req_date + "</td>";
        html += "<td>" + app_new + "</td>";
        html += "<td>" + app_by_new + "</td>";
        html += "<td>" + app_date_new + "</td>";

        html += "</tr>";

    }

    document.getElementById("data").innerHTML = html;



// alert("welcome to the script");
var table = document.getElementById("table123"), rIndex;



for (var i = 0; i < table.rows.length; i++) {
    // alert("i am in");

    table.rows[i].onclick = function () {
        row_index_to_delete = this.cells[2].innerHTML;
       
        owner_user_name=this.cells[1].innerHTML;
        // alert(row_index_to_delete);
        // alert(owner_user_name);

        rIndex = this.rowIndex;

        console.log(rIndex);


    }
}


}

function callPHP() {
    alert(row_index_to_delete);
    window.location.href = "request_approve.php?w1=" + row_index_to_delete+"&w2="+owner_user_name;
  
}
// 
function logout(){
    alert("Are you sure you want to log out?");
    window.location.href="http://localhost/SE_project/storeKeeper/log.php";

} 

function select() {


    var e = document.getElementById("select");
    var result = e.options[e.selectedIndex].text;

alert(result);

    switch (result) {
        case 'Request Not Approved':
        alert(" Request Not Approved");
        

            var ajax = new XMLHttpRequest();

            var method = "GET";
            var url = "select_only_not_approved_requestes.php";
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

                html += "<th>" + "Requested_Id" + "</th>"
                html += "<th>" + "User Name" + "</th>"

                html += "<th>" + "Item Id" + "</th>"
                html += "<th>" + "Request Date" + "</th>"
                html += "<th>" + "Approved" + "</th>"
                html += "<th>" + "Approved By" + "</th>"
                html += "<th>" + "Approved Date" + "</th>"


                html += "</tr>"
                for (var a = 0; a < data.length; a++) {
                    var req_id = data[a].request_id;
                    var us_name = data[a].user_name;
                    var itm_id = data[a].item_id;
                    var req_date = data[a].request_date;
                    var app = data[a].approved;
                    var app_by = data[a].approved_by;
                    var app_date = data[a].approved_date;
                    ;

                    html += "<tr>";
                    html += "<td>" + req_id + "</td>";
                    html += "<td>" + us_name + "</td>";
                    html += "<td>" + itm_id + "</td>";
                    html += "<td>" + req_date + "</td>";
                    html += "<td>" + app + "</td>";
                    html += "<td>" + app_by + "</td>";
                    html += "<td>" + app_date + "</td>";

                    html += "</tr>";

                }

                document.getElementById("data").innerHTML = html;


            }
            alert("welcome to the script");
            var table = document.getElementById("table123"), rIndex;



            for (var i = 0; i < table.rows.length; i++) {
                alert("i am in");

                table.rows[i].onclick = function () {
                    row_index_to_delete = this.cells[2].innerHTML;
                    alert(row_index_to_delete);

                    rIndex = this.rowIndex;

                    console.log(rIndex);


                }
            }



            break;
        case 'Request Approved':
        alert("Request Approved");
            var ajax = new XMLHttpRequest();

            var method = "GET";
            var url = "requested_user_data.php";
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

                html += "<th>" + "Requested_Id" + "</th>"
                html += "<th>" + "User Name" + "</th>"

                html += "<th>" + "Item Id" + "</th>"
                html += "<th>" + "Request Date" + "</th>"
                html += "<th>" + "Approved" + "</th>"
                html += "<th>" + "Approved By" + "</th>"
                html += "<th>" + "Approved Date" + "</th>"


                html += "</tr>"
                for (var a = 0; a < data.length; a++) {
                    var req_id = data[a].request_id;
                    var us_name = data[a].user_name;
                    var itm_id = data[a].item_id;
                    var req_date = data[a].request_date;
                    var app = data[a].approved;
                    var app_by = data[a].approved_by;
                    var app_date = data[a].approved_date;
                    ;

                    html += "<tr>";
                    html += "<td>" + req_id + "</td>";
                    html += "<td>" + us_name + "</td>";
                    html += "<td>" + itm_id + "</td>";
                    html += "<td>" + req_date + "</td>";
                    html += "<td>" + app + "</td>";
                    html += "<td>" + app_by + "</td>";
                    html += "<td>" + app_date + "</td>";

                    html += "</tr>";

                }

                document.getElementById("data").innerHTML = html;


            }
            alert("welcome to the script");
            var table = document.getElementById("table123"), rIndex;



            for (var i = 0; i < table.rows.length; i++) {
                alert("i am in");

                table.rows[i].onclick = function () {
                    row_index_to_delete = this.cells[2].innerHTML;
                    alert(row_index_to_delete);

                    rIndex = this.rowIndex;

                    console.log(rIndex);


                }
            }



            break;
        case 'ALL':
            alert("ALL");
            break;
        default:
            alert("ALL");
    }

}
