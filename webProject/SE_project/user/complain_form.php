<div id="myDemoModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title justify-contgent-center">Complain For Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <!--Blue select-->
            </div>
            <div class="modal-body">
                <!-- CONTENT CONTENT CONTENT -->

                <form class="form-container" action="complain_submit.php"  method="GET">
                                    <div class="form-row">
                                       <div class="col">
                                       <label for="complain">Complain</label>
                                      <textarea id="complain" name="complain" rows="5" class="form-control" placeholder="Type your complain here"></textarea>
                                    </div>
                                   </div>

                                  <div class="form-row">
                                   
                                   <div class="col">
                                        <label for="date">Date</label>
                                         <input type="date" id="date" name="bday" max="3000-12-31" min="1000-01-01" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <input type="submit"  id="submit" class="btn btn-primary" value="Submit complain">
               </div>
            
                            </form>
            </div>
           
            
        </div>
    </div>
    