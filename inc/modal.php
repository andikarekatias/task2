<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register or Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Login</a>
                </li>                
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <form action="proses/register.php" method="post" class="my-1">
                    <p>Insert username and password to Register</p>
                    <div class="form-group">
                        <label for="username">Username :</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                    </div>      
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="cf_password" class="form-control" placeholder="Confirm password">
                    </div>                 
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <form action="proses/login.php" method="post" class="my-1">
                <p>Insert username and password to Login</p>
                    <div class="form-group">
                        <label for="username">Username :</label>
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter password">
                    </div>                   
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>