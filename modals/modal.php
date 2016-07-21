<!-- Modal -->
<div class="modal fade" id="programModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Program</h4>
      </div>
      <div class="modal-body">
        <form method="post" role="form" enctype="multipart/form-data" action="php/add_program.php">
            <div class="modal-div">
                <div class="form-group">
                    <div class="col-md-6">
                        <input id="number" type="text" name="number" class="form-control" placeholder="Program number" input-type="number" required/>
                    </div>
                </div>                              
                <div class="form-group" >
                    <div id="add-program-btn-box" class="row" align="center" style="margin-left:2%;margin-right:2%;">
                        <input id="add-program" type="submit" name="add-program" value="Add Program" class="form-control btn btn-success" style="margin-top: 4%;" />
                    </div>
                </div>
                
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>