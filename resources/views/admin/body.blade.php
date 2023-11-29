<div class="main-panel">
    <div class="content-wrapper">
     
      
      <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$total_product}}</h3>
                    <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                   
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total Products</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$total_order}}</h3>
                    <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total reservations</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$total_user}}</h3>
                    <p class="text-danger ml-2 mb-0 font-weight-medium"></p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total customers</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">Kshs {{$total_revenue}}</h3>
                    <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                   
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Total revenue</h6>
            </div>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$total_delivered}}</h3>
                 
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Reservations Met</h6>
            </div>
          </div>
        </div>


        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{$total_processing}}</h3>
                  
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Reservations being processed</h6>
            </div>
          </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Transaction History</h4>
             
              <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                <div class="text-md-center text-xl-left">
                  <h6 class="mb-1">Total refunds</h6>
                  <p class="text-muted mb-0">10 Nov 2023, 09:12AM</p>
                </div>
                <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                  <h6 class="font-weight-bold mb-0">kshs 0</h6>
                </div>
              </div>
              <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                <div class="text-md-center text-xl-left">
                  <h6 class="mb-1">Tranfer to Stripe</h6>
                  <p class="text-muted mb-0">23 nov 2023, 09:12AM</p>
                </div>
                <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                  <h6 class="font-weight-bold mb-0">kshs 0</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
     
      <div class="row">
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>Revenue</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">Kshs {{$total_revenue}}</h2>
                    <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                  </div>
                 
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>Sales</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">Kshs {{$total_revenue}}</h2>
                    <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                  </div>
                 
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>

  
        <div class="col-md-12 col-xl-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">To do list</h4>
              <div class="add-items d-flex">
                <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                <button class="add btn btn-primary todo-list-add-btn">Add</button>
              </div>
              <div class="list-wrapper">
                <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                  <li>
                    <div class="form-check form-check-primary">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Send out invoice to customer </label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                  </li>
                  <li>
                    <div class="form-check form-check-primary">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Board Meeting at 5pm</label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                  </li>
                  <li class="completed">
                    <div class="form-check form-check-primary">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox" checked> Pick up a car for washing</label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                  </li>
                  <li>
                    <div class="form-check form-check-primary">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Refund customer Emmanuel </label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                  </li>
                  <li>
                    <div class="form-check form-check-primary">
                      <label class="form-check-label">
                        <input class="checkbox" type="checkbox"> Attend work shop</label>
                    </div>
                    <i class="remove mdi mdi-close-box"></i>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Visitors by Countries</h4>
              <div class="row">
                <div class="col-md-5">
                  <div class="table-responsive">
                   
                  </div>
                </div>
                <div class="col-md-7">
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © carwash 2023</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"></span>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>