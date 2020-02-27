

<div id="myDemoModal" class="modal fade">
    <div class="modal-dialog modal-dialog-draggable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title justify-contgent-center">Add Item</h4>
              
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <!--Blue select-->
            </div>
            <div class="modal-body">
                <!-- CONTENT CONTENT CONTENT -->

                <form class="form-container" action="submit.php"  method="GET">
                                    <div class="form-row">
                                       <div class="col">
                                        <label for="itemname">Item Name</label>
                                           <input type="text" name="name" id="itemname" class="form-control" placeholder="Item Name">                                            
                                      </div>
                                       <div class="col">
                                        <label for="brand">Brand</label>
                                        <select name="brand" id="brand" placeholder="Brand" class="form-control mdb-select md-form colorful-select dropdown-success">
                                             
                                            </select>
                                    </div>
                                </div>
                                <!-- form row -->
                                    <div class="form-row">

                                    <div class="col">
                                        <label for="category">Category</label>
                                        <select name="cat" id="category" onclick=" category_select()" placeholder="Catergory" class="form-control mdb-select md-form colorful-select dropdown-success">
                                             
                                            </select>
                                    </div>
                                     <div class="col">
                                        <label for="date">Date</label>
                                         <input name="dt" type="date" id="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                    </div>
                                  </div>
                                    <div class="form-row">

                                    <div class="col">
                                        <label for="description">Descripion</label>
                                      <textarea name="desc" id="description" rows="3" class="form-control" placeholder="Descripion"></textarea>

                                    </div>
                                  </div>
                                  <div class="modal-footer">
              
              <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
              <input type="submit"  id="submit" class="btn btn-primary" value="Add Item">
             
              <!-- <button   id="submit" class="btn btn-primary" onclick="add_item()">Add Item</button> -->
          </div>
                        
                            </form>
            </div>
            <script src="addItemDialog.js"></script>
           
        </div>
    </div>
</div>


<script src="jquery-3.4.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        // console.log("hello hello");
        // alert("hello hello");

      $('#submit').on('click',function() {
        // alert("hello2")
        // body...
        var regex=/^[A-Za-z0-9._%+-]+@([A-Za-z0-9]+\.)+[a-z]{2,4}$/i;
                var name=$('#itemname').val();
                var brand=$('#brand').val();
                var catergory=$('#catergory').val();
                var description=$('#description').val();

                // var quantity=$('#quantity').val();
                var date=$('#date').val();

                if (name.trim()=='') {
                  alert("Enter Item Name");
                  $("#itemname").focus();
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
               else if (description.trim()=='') {
                  alert("Enter Item Descripion");
                  $("#description").focus();
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
    
   
    
