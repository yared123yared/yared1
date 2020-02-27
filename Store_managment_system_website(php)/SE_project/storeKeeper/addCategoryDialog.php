<div id="myDemoModal" class="modal fade">
    <div class="modal-dialog modal-dialog-draggable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title justify-contgent-center">Add Category</h4>
              
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <!--Blue select-->
            </div>
            <div class="modal-body">
                <!-- CONTENT CONTENT CONTENT -->

                <form class="form-container" action="category_submit.php"  method="GET">
                                    <div class="form-row">
                                       <div class="col">
                                        <label for="categoryname">Category Name</label>
                                           <input type="text" id="categoryname" name="cat_name",class="form-control" placeholder="Category Name">                                            
                                      </div>
                                     <div class="col">
                                        <label for="date">Date</label>
                                         <input type="date" id="date" name="cday" max="3000-12-31" min="1000-01-01" class="form-control">
                                    </div>
                                  </div>

                                    <div class="col">
                                        <label for="description">Descripion</label>
                                      <textarea id="description" name="desc" rows="3" class="form-control" placeholder="Descripion"></textarea>

                                    </div>
                                    <div>
              <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
              <input type="submit"  id="submit" class="btn btn-primary" value="Add Item">
               </div>
        </div>
            
                            </form>
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
                var categoryname=$('#categoryname').val();
                var description=$('#description').val();
                var date=$('#date').val();

               if (categoryname.trim()=='') {
                  alert("Enter Item Category");
                  $("#categoryname").focus();
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