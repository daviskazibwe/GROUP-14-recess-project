@include('/admin/partials/header')
@include('/admin/partials/sidebar')
@include('/admin/partials/nav')

      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">
      
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="text-lg font-weight-bold text-primary text-uppercase mb-1">UFT member enrollment system</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>
         <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block ">
             <img src="logs/images/img/pc-2.jpg" width="500" height="580">
          </div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Payments Form</h1>
              </div>
                 <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" placeholder="Full Name:">
                  </div>
                  <div class="col-sm-6">
                    <select name="role">
                      <option value="selected">Select Role:</option>
                      <option>agent</option>
                      <option>agent-head</option>
                      <option>administrator</option>
                 </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" placeholder="Amount Paid:">
                </div>
                <div class="col-sm-6">
                   <input type="date" class="form-control form-control-user" placeholder="Date Of Payment:">
                </div>
              </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" placeholder="Expected Amount:">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" placeholder="Paid Amount:">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" placeholder="Balance:">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" placeholder="Paid By:">
                  </div>
                </div>
                <button class="btn btn-primary btn-user btn-block" name="add_donor">+Payment</button>
                  
               
              </form>
            </div>
          </div>
          
        </div>
        <!-- /.container-fluid -->

      </div>

 </div>
</div>
</div>
</div>
@include('/admin/partials/footer')
