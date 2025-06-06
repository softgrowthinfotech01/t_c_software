<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="assets/css/demo.css" />
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <?php include('sidebar.php'); ?>
      <!-- End Sidebar -->

    
        <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <?php include('header.php'); ?>
          <!-- End Navbar -->
        </div>

        <div class="container">
          <div class="page-inner">
            <div class="page-header">
              <h3 class="fw-bold mb-3">Forms</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="#">
                    <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Forms</a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="#">Basic Form</a>
                </li>
              </ul>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-title">College Details</div>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="row mb-2">
                        <div class="col-md-6 ">
                          <div class="form-group">
                            <label for="u-dies">College U-dies No.</label>
                            <input
                            type="text"
                            class="form-control"
                            id="u-dies"
                            placeholder="Enter College U-dies No."
                            />
                          </div>

                          <div class="form-group">
                             <label for="collegeName">College Name</label>
                             <input
                              type="text"
                              class="form-control"
                              id="collegeName"
                              placeholder="Enter College Name"
                              />
                           </div>

                           <div class="form-group">
                            <label for="collegeVillage">College Village Name</label>
                            <input
                            type="text"
                            class="form-control"
                            id="collegeVillage"
                            placeholder="Enter College Village Name"
                            />
                          </div>

                          <div class="form-group">
                             <label for="telephone">College Telephone No.</label>
                             <input
                              type="tel"
                              class="form-control"
                              id="telephone"
                              placeholder="Enter College Telephone No."
                              />
                           </div>
                           
                           <div class="form-group">
                            <label for="email">Email ID</label>
                            <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Enter Email ID"
                            />
                          </div>

                          <div class="form-group">
                             <label for="collegeWebsite">College Website</label>
                             <input
                              type="text"
                              class="form-control"
                              id="collegeWebsite"
                              placeholder="Enter College Website"
                              />
                           </div>

                            <div class="form-group">
                            <label for="cluster">Cluster</label>
                            <input
                            type="text"
                            class="form-control"
                            id="cluster"
                            placeholder="Enter Cluster"
                            />
                          </div>

                          <div class="form-group">
                             <label for="bit">Bit</label>
                             <input
                              type="text"
                              class="form-control"
                              id="bit"
                              placeholder="Enter Bit"
                              />
                           </div>

                            <div class="form-group">
                            <label for="taluka">Taluka</label>
                            <input
                            type="text"
                            class="form-control"
                            id="taluka"
                            placeholder="Enter Taluka"
                            />
                          </div>

                          <div class="form-group">
                             <label for="district">District</label>
                             <input
                              type="text"
                              class="form-control"
                              id="district"
                              placeholder="Enter District"
                              />
                           </div>

                         
                        </div>

                         <div class="col-md-6 ">

                          <div class="form-group">
                            <label for="pinCode">Pin Code</label>
                            <input
                            type="number"
                            class="form-control"
                            id="pinCode"
                            placeholder="Enter Pin Code"
                            />
                          </div>

                          <div class="form-group">
                            <label for="lowerClass">College Lower Class</label>
                            <input
                            type="text"
                            class="form-control"
                            id="lowerClass"
                            placeholder="Enter College Lower Class"
                            />
                          </div>

                          <div class="form-group">
                             <label for="higherClass">College Higher Class</label>
                             <input
                              type="text"
                              class="form-control"
                              id="higherClass"
                              placeholder="Enter College Higher Class"
                              />
                           </div>

                           <div class="form-group">
                             <label for="grantType">Grant Type</label>
                             <input
                              type="text"
                              class="form-control"
                              id="grantType"
                              placeholder="Enter Grant Type"
                              />
                           </div>

                          <div class="form-group">
                             <label for="registrationNo">College Final Registration No.</label>
                             <input
                              type="text"
                              class="form-control"
                              id="registrationNo"
                              placeholder="Enter College Final Registration No."
                              />
                           </div>
                           
                           <div class="form-group">
                            <label for="collegeCode">College Code</label>
                            <input
                            type="number"
                            class="form-control"
                            id="collegeCode"
                            placeholder="Enter College Code"
                            />
                          </div>

                          <div class="form-group">
                             <label for="boardName">Board Name</label>
                             <input
                              type="text"
                              class="form-control"
                              id="boardName"
                              placeholder="Enter Board Name"
                              />
                           </div>

                            <div class="form-group">
                            <label for="boardNo">Board Co-related No.</label>
                            <input
                              type="text"
                              class="form-control"
                              id="boardNo"
                              placeholder="Board Co-related No."
                              />
                          </div>

                          <div class="form-group">
                             <label for="managementNo">Management No.</label>
                             <input
                              type="text"
                              class="form-control"
                              id="managementNo"
                              placeholder="Management No."
                              />
                            </div>

                        </div>
                      </div> 

                         <div class="row mt-4">
                            <div class="col text-center">
                              <button type="submit" class="btn btn-primary px-5">Submit</button>
                            </div>
                         </div>
                    </form>

                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Footer -->
     
          <?php include('footer.php'); ?>
         <!-- End Footer -->
      </div>

    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <!-- <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script> -->
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  </body>
</html>
