<html lang="en">
<head>
	<title>Request Item</title>  
    <link href="bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="bootstrap.min.js"></script> 
      <script src="jquery-3.4.1.js"></script>
      <script  src="bootstrap-validate.js"></script>

</head>
<body>
<a href="#myDemoModal" role="button" class="btn btn-large btn-success" data-toggle="modal">Request Item</a>
<!-- Modal HTML -->
<div id="myDemoModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Request Item</h4>

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <!--Blue select-->
            </div>
            <div class="modal-body">
                <!-- CONTENT CONTENT CONTENT -->

                <form role="form" data-toggle="validator" class="form-container">
                                    <div class="form-row">
                                       <div class="col">
                                        <label for="itemname" class="control-label">Item Name</label>
                                           <input type="text" id="itemname" class="form-control" placeholder="Item Name">                                            
                                      </div>
                                     <!-- <div class="col">
                                        <label for="brand" class="control-label">Brand</label>
                                        <select id="brand" placeholder="Brand" class="form-control mdb-select md-form colorful-select dropdown-succes">
                                              <option value="1">Brand 1</option>
                                              <option value="2">Option 2</option>
                                              <option value="3">Option 3</option>
                                              <option value="4">Option 4</option>
                                              <option value="5">Option 5</option>
                                            </select>
                                    </div> -->
                                </div>
                                <!-- form row -->
                                    <div class="form-row">

                                    <!-- <div class="col">
                                        <label for="category" class="control-label">Category</label>
                                        <select id="catergory" placeholder="Catergory" class="form-control mdb-select md-form colorful-select dropdown-success">
                                              <option value="1">Category 1</option>
                                              <option value="2">Option 2</option>
                                              <option value="3">Option 3</option>
                                              <option value="4">Option 4</option>
                                              <option value="5">Option 5</option>
                                            </select>
                                    </div>
                                    <div class="col"> -->
                                        <label for="itemname" class="control-label">Quantity</label>
                                           <input type="number" id="quantity" class="form-control" placeholder="quantity">
                                        
                                    </div>
                                  </div>
                                   <div class="col-6">
                                        <label for="date" class="control-label">Date</label>
                                         <input type="date" name="date" id="date" max="3000-12-31" min="1000-01-01" class="form-control">
                                    </div>
                            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" id="submit" class="btn btn-primary">Send Request</button>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">
      // <!-- bootstrapValidate(['#itemname'], 'contains:Peter:Needs to Contain "Peter"|min:20:Enter 20 character!|max:40:Enter 40 chars at most!'); -->
      $(document).ready(function(){
        // console.log("hello hello");
        // alert("hello hello");

      $('#submit').on('click',function() {
        // alert("hello2")
        // body...
        var regex=/^[A-Za-z0-9._%+-]+@([A-Za-z0-9]+\.)+[a-z]{2,4}$/i;
                var name=$('#itemname').val();
                console.log(name);
                var brand=$('#brand').val();
                var catergory=$('#catergory').val();
                var quantity=$('#quantity').val();
                var date=$('#date').val();

                let emptyName='<span class="danger">Enter Item Name </span> ';

                if (name.trim()=='') {
                  alert("Enter Item Name");
                  // $(emptyName).insertBefore($("#itemname"));
                  $("#itemname").focus();
                  // $("#itemname").addClass("bg-danger");
                  return false;
                }
                else if (brand.trim()=='') {
                  alert("Select Item Brand");
                  $("#brand").focus();
                  return false;
                }
               else if (catergory.trim()=='') {
                  alert("Select Item Category");
                  $("#catergory").focus();
                  return false;
                }
               else if (quantity.trim()=='') {
                  alert("Enter Item Quantity");
                  $("#quantity").focus();
                  return false;
                }
                else if (date.trim()=='') {
                  alert("Enter date");
                  $("#date").focus();
                  return false;
                }
                else{
                  return true;
                }
      });
    });
    </script>
<!-- Modal HTML End -->
</body>
</html>