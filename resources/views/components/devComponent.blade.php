<!-- Transactions -->
<div class="col-lg-12">
  <div class="card">
      <div class="card-header">
          <div class="d-flex align-items-center justify-content-between">
              <h5 class="card-title m-0 me-2">Transactions</h5>
              <div class="dropdown">
                  <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <i class="mdi mdi-dots-vertical mdi-24px"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                      <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                      <a class="dropdown-item" href="javascript:void(0);">Share</a>
                      <a class="dropdown-item" href="javascript:void(0);">Update</a>
                  </div>
              </div>
          </div>
          <p class="mt-3"><span class="fw-medium">Total 48.5% growth</span> 😎 this month</p>
      </div>
      <div class="card-body">
          <div class="row g-3">
              <div class="col-md-3 col-6">
                  <div class="d-flex align-items-center">
                      <div class="avatar">
                          <div class="avatar-initial bg-primary rounded shadow">
                              <i class="mdi mdi-trending-up mdi-24px"></i>
                          </div>
                      </div>
                      <div class="ms-3">
                          <div class="small mb-1">Sales</div>
                          <h5 class="mb-0">245k</h5>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-6">
                  <div class="d-flex align-items-center">
                      <div class="avatar">
                          <div class="avatar-initial bg-success rounded shadow">
                              <i class="mdi mdi-account-outline mdi-24px"></i>
                          </div>
                      </div>
                      <div class="ms-3">
                          <div class="small mb-1">Customers</div>
                          <h5 class="mb-0">12.5k</h5>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-6">
                  <div class="d-flex align-items-center">
                      <div class="avatar">
                          <div class="avatar-initial bg-warning rounded shadow">
                              <i class="mdi mdi-cellphone-link mdi-24px"></i>
                          </div>
                      </div>
                      <div class="ms-3">
                          <div class="small mb-1">Product</div>
                          <h5 class="mb-0">1.54k</h5>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 col-6">
                  <div class="d-flex align-items-center">
                      <div class="avatar">
                          <div class="avatar-initial bg-info rounded shadow">
                              <i class="mdi mdi-currency-usd mdi-24px"></i>
                          </div>
                      </div>
                      <div class="ms-3">
                          <div class="small mb-1">Revenue</div>
                          <h5 class="mb-0">$88k</h5>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!--/ Transactions -->
<!-- Weekly Overview Chart -->
<div class="col-xl-12 col-md-12">
  <div class="card">
      <div class="card-header">
          <div class="d-flex justify-content-between">
              <h5 class="mb-1">Weekly Overview</h5>
              <div class="dropdown">
                  <button class="btn p-0" type="button" id="weeklyOverviewDropdown" data-bs-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical mdi-24px"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklyOverviewDropdown">
                      <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                      <a class="dropdown-item" href="javascript:void(0);">Share</a>
                      <a class="dropdown-item" href="javascript:void(0);">Update</a>
                  </div>
              </div>
          </div>
      </div>
      <div class="card-body">
          <div id="weeklyOverviewChart"></div>
          <div class="mt-1 mt-md-3">
              <div class="d-flex align-items-center gap-3">
                  <h3 class="mb-0">45%</h3>
                  <p class="mb-0">Your sales performance is 45% 😎 better compared to last month</p>
              </div>
              <div class="d-grid mt-3 mt-md-4">
                  <button class="btn btn-primary" type="button">Details</button>
              </div>
          </div>
      </div>
  </div>
</div>
<!--/ Weekly Overview Chart -->