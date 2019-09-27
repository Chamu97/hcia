<div id="add" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" class="form-horizontal" role="form" name="myForm">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add a Lecturer</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="fname">First Name: </label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" id="fname" name="fname" autocomplete="off" onblur="validate()">
                          <span class="fname-validation validation-error"></span>
                        </div>

                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="lname">Last Name: </label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" id="lname" name="lname" autocomplete="off" onblur="validate()">
                  </div>

                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="email">Email: </label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" id="email" name="email" autocomplete="off" onblur="validate()">
                          <span class="email-validation validation-error"></span>
                      </div>

                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="NIC">NIC: </label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" id="NIC" name="NIC" autocomplete="off" onblur="validate()">
                      <span class="NIC-validation validation-error"></span></div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="phone">Contact No.: </label>
                      <div class="col-sm-5">
                          <input type="text" class="form-control" id="phone" name="phone" autocomplete="off" onblur="validate()">
                      <span class="phone-validation validation-error"></span></div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="phone">Academic Qualifications: </label>
                      <div class="col-sm-5">
                          <textarea name="qualify" class="form-control" id="qualify" rows="4" cols="20" onblur="validate()"></textarea>
                    </div>
                    </div>
                <div class="modal-footer">
                    <button disabled="disabled" type="submit" class="btn btn-success" name="add_lec" id="add_lec"><span class="glyphicon glyphicon-plus"></span> Add</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
