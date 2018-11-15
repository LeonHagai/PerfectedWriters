<!--session starting -->
<?php
  session_start();

  $name=$_SESSION['name'];
  $email=$_SESSION['email']
?>
<?php include '../config/config.php'?>
<?php include '../config/inc/admin/headerAdminBootstrap.php'?>
    <!--home page <details-->
    <section id="home">
      <div class="row">
        <div class="col-md-2">
          <aside class="side-bar">
            <style>
              .ts{
                text-align:center !important;
                vertical-align:middle !important;
              }
            </style>
            <div>
              <img src="../data/img/avatar.png" alt="" class="d-block img-fluid mb-3">
            </div>
            <button class="btn btn-danger btn-block" value="change">Change Image</button>
          </aside>
        </div>
        <!--details of owner-->
        <div class="col-md-7">          
          <div class="row">
            <!--personal details-->
              <form class="form-control" method="post">
                <!--form header-->
                <div class="form-header bg-light">
                  <h4 class="lead">Own Details</h4>
                </div>
                <div class="row">
                  <!--divsion of form into two-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Name:</label>
                      <input type="OwnerName" name="OwnerName" class="form-control"required>
                    </div>
                    <div class="form-group">
                      <label>Email:</label>
                      <input type="Email" name="Email" class="form-control"required>
                    </div>
                    <div class="form-group">
                      <label>Mobile Phone:</label>
                      <input type="MobilePhone" name="MobilePhone" class="form-control"required>
                    </div>
                    <div class="form-group">
                      <label>Telephone:</label>
                      <input type="Telephone" name="Telephone" class="form-control"required>
                    </div>
                  </div>
                  <!--company details-->
                  <div class="col-md-6">
                      <div class="form-group">
                        <label>Twitter <i class=""></i>:</label>
                        <input type="OwnerName" name="OwnerName" class="form-control"required>
                      </div>
                      <div class="form-group">
                        <label>Instagram:</label>
                        <input type="Email" name="Email" class="form-control"required>
                      </div>
                      <div class="form-group">
                        <label>Facebook:</label>
                        <input type="MobilePhone" name="MobilePhone" class="form-control"required>
                      </div>
                  </div>                
                </div>
                <div class="ownerMessage">
                  <div class="form-group">
                    <label >Mission:</label>
                    <input type="" name="" class="form-control"required>                    
                  </div>
                  <div class="form-group">
                    <label >Vision:</label>
                    <input type="" name="" class="form-control">                    
                  </div>
                </div>

                <!--footer button-->
                <div class="form-footer pull-right">
                  <button class="btn btn-default" name="edit" value="edit">Edit</button>

                  <button class="btn btn-primary" name="submit" value="submit">Save</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </section>


    <!--portal section-->

    <section id="portal" class="my-5 py-5">
      <div class="container">
        <table class="table table-striped">
          <thead class="thead thead-inverse">
            <tr>
              <th>Email</th>
              <th>Sir Name</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Category</th>
            </tr>
          </thead>
        </table>
      </div> 
    </section>

    <!--principal footer-->
     <footer id="main-footer" class="text-center text-white p-2 bg-dark fixed-bottom">
       <div class="container">
         <div class="row">
           <div class="col">
             <p>Copyright 2018&copy; Perfected  Writers</p>
           </div>
         </div>
       </div>
     </footer>
     <!--modal settings-->


  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>
