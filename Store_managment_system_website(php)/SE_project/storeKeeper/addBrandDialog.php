<div id="myDemoModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title justify-contgent-center">Add Brand</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <!--Blue select-->
            </div>
            <div class="modal-body">
                <!-- CONTENT CONTENT CONTENT -->

                <form class="form-container" action="brand_submit.php"  method="GET">
                                    <div class="form-row">
                                       <div class="col">
                                        <label for="brandname">Brand Name</label>
                                      <input type="text" name="brand_name" id="brandname" class="form-control" placeholder="Brand Name">
                                    </div>
                                     <div class="col">
                                        <label for="category">Catergory</label>
                                      <select name="cat" id="category" placeholder="Category" class="form-control mdb-select md-form colorful-select dropdown-success">
                                              <option value="1">Option 1</option>
                                              <option value="2">Option 2</option>
                                              <option value="3">Option 3</option>
                                              <option value="4">Option 4</option>
                                              <option value="5">Option 5</option>
                                            </select>
                                    </div>
                                   </div>

         
         
         
         
         
         
                                  <div class="form-row">
                                   
                                   <div class="col">
                                        <label for="date">Date</label>
                                         <input type="date" id="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                    </div>
                                </div>
                                    <div class="form-row">

                                     <div class="col">
                                        <label for="description">Descripion</label>
                                      <textarea id="description" name="description" rows="3" class="form-control" placeholder="Descripion"></textarea>
                                   
                                    </div>

                                  </div>
                                  <div class="modal-footer">
              
              <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
              <input type="submit"  id="submit" class="btn btn-primary" value="Add Item">
             
              <!-- <button   id="submit" class="btn btn-primary" onclick="add_item()">Add Item</button>
            </div> -->
            
                            </form>
            </div>
            <!-- <script src="addBrandDialog.js"></script> -->
            <script src="addBrandDialog.js"></script>
            
            
        </div>
    </div>
</div>
<script src="jquery-3.4.1.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
       // bootstrapValidate(['#input2', '#input3'], 'contains:Peter:Needs to Contain "Peter"|min:20:Enter 20 character!|max:40:Enter 40 chars at most!');
      $('#submit').on('click',function() {
        var regex=/^[A-Za-z0-9._%+-]+@([A-Za-z0-9]+\.)+[a-z]{2,4}$/i;
                var brandname=$('#brandname').val();
                var description=$('#description').val();
                var category=$('#category').val();


                // var quantity=$('#quantity').val();
                var date=$('#date').val();

                if (brandname.trim()=='') {
                  alert("Enter Brand Name");
                  $("#brandname").focus();
                  return false;
            }
               else if (category.trim()=='') {
                  alert("Select Brand Category");
                  $("#category").focus();
                  return false;
                }
               else if (description.trim()=='') {
                  alert("Enter Descripion");
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