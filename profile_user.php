<?php
    session_start();
    include('adminPanel/includes/db.php');
    include("include/header.php");
    include("mainjacket.php");
?>

<section style="background-color: #000;">
  <div class="container py-5" style="background: #000000;">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="rounded-3 p-3 mb-4" style="background: #111111;">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4 bg-dark">
          <div class="card-body text-center">
            <img src="profile.png   " alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Vishal Rai</h5>
            <p class="text-muted mb-1">Fashion Designer</p>
            <p class="text-muted mb-4">Mumbai</p>
            <div class="d-flex justify-content-center mb-2">
              <button type="button" class="btn btn-primary">Follow</button>
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0 bg-dark">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fas fa-instagram fa-lg text-warning"></i>
                <p class="mb-0">pinterest</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                <p class="mb-0">instagram</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">facebook</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                <p class="mb-0">twitter</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">social media</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4 bg-dark text-primary">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Johnatan Smith</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">example@example.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Bay Area, San Francisco, CA</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row h-50 mt-5">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0 bg-dark text-primary">
              <div class="card-body">
                <p class="mb-4"><span class="text-danger font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                </p>
                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <div id="artist_products">
    <div class="container">
        <div class="row">
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
            <div class="card">
            <div class="d-flex justify-content-between p-3">
                <p class="lead mb-0">Today's Combo Offer</p>
                <div
                class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                style="width: 35px; height: 35px;">
                <p class="text-white mb-0 small">x4</p>
                </div>
            </div>
            <img src="images/prodcts/t-shirts.webp"
                class="card-img-top" alt="Laptop" />
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                <p class="small text-danger"><s>$1099</s></p>
                </div>

                <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">HP Notebook</h5>
                <h5 class="text-dark mb-0">$999</h5>
                </div>

                <div class="d-flex justify-content-between mb-2">
                <p class="text-muted mb-0">Available: <span class="fw-bold">6</span></p>
                <div class="ms-auto text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
            <div class="card">
            <div class="d-flex justify-content-between p-3">
                <p class="lead mb-0">Today's Combo Offer</p>
                <div
                class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                style="width: 35px; height: 35px;">
                <p class="text-white mb-0 small">x2</p>
                </div>
            </div>
            <img src="images/prodcts/t-shirts.webp"
                class="card-img-top" alt="Laptop" />
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                <p class="small text-danger"><s>$1199</s></p>
                </div>

                <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">HP Envy</h5>
                <h5 class="text-dark mb-0">$1099</h5>
                </div>

                <div class="d-flex justify-content-between mb-2">
                <p class="text-muted mb-0">Available: <span class="fw-bold">7</span></p>
                <div class="ms-auto text-warning">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
            <div class="card">
            <div class="d-flex justify-content-between p-3">
                <p class="lead mb-0">Today's Combo Offer</p>
                <div
                class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
                style="width: 35px; height: 35px;">
                <p class="text-white mb-0 small">x3</p>
                </div>
            </div>
            <img src="images/prodcts/t-shirts.webp"
                class="card-img-top" alt="Gaming Laptop" />
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
                <p class="small text-danger"><s>$1399</s></p>
                </div>

                <div class="d-flex justify-content-between mb-3">
                <h5 class="mb-0">Toshiba B77</h5>
                <h5 class="text-dark mb-0">$1299</h5>
                </div>

                <div class="d-flex justify-content-between mb-2">
                <p class="text-muted mb-0">Available: <span class="fw-bold">5</span></p>
                <div class="ms-auto text-warning">
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
  </div>

</section>