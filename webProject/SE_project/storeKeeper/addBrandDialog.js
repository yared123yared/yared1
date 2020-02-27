
// alert("welcome to the javascript");
//  thise will be for category
var ajax = new XMLHttpRequest();

var method = "GET";
var url = "extract_only_category.php";
var asynchronius = true;
ajax.open(method, url, asynchronius);
ajax.send();
// thise is reciving
ajax.onreadystatechange = function () {

    var data = JSON.parse(this.responseText);


    console.log(data);
    var option_category = "";



    var category = [];
    for (var a = 0; a < data.length; a++) {
        category.push(data[a].category_name);


    }

    var select = document.getElementById("category");

    // alert("welcome to the for loop");
    var value = "";
    for (var i = 0; i < category.length; i++) {
        // alert("welcome to the for loop");
        value += '<option id="' + i + '">' + category[i] + '</option>';
         
    }
    document.getElementById("category").innerHTML = value;






    // thise will be for brand
//     var ajax = new XMLHttpRequest();

// var method = "GET";
// var url = "extract_only_brand.php";
// var asynchronius = true;
// ajax.open(method, url, asynchronius);
// ajax.send();
// // thise is reciving
// ajax.onreadystatechange = function () {

//     //  alert(this.responseText);
//     var data = JSON.parse(this.responseText);


//     console.log(data);
//     var option_category = "";



//     var brand = [];
//     for (var a = 0; a < data.length; a++) {
   
//         brand.push(data[a].brand_name);


//     }
//     // alert(brand);
  

//     // alert("welcome to the for loop");
//     var value = "";
//     for (var i = 0; i < brand.length; i++) {
//         // alert("welcome to the for loop");
//         value += '<option id="' + i + '">' + brand[i] + '</option>';
//         // alert('<option id="' + i + '">' + category[i] + '</option>');
//     }
//     document.getElementById("brand").innerHTML = value;






// }}


function add_item(){
    alert("i am on submit");
    var item_name=document.getElementById("itemname").value;
    var category_name=document.getElementById("brand").value;
    var brand_name=document.getElementById("brand").value;
    var date=document.getElementById("date").value;
    alert(date);
    descriptionn=document.getElementById("description").value;
    added_by="atr/8584/10";
    alert(category);
   
    var values=new Array();

    values+=item_name;
    values+=category_name;
    values+=brand_name;
    values+=date;
    values+=descriptionn;
    values+=added_by;

    var request=new XMLHttpRequest();
    // var formData=new FormData(values);
    request.open('POST','submit.php',true);
    request.send(values);
    alert("every thing is okay");
    


   
}}