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
                    <div class="card-title">Bonafide Certificate</div>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="row mb-2">
                        <div class="col-md-6 ">
                          <div class="form-group">
                            <label for="registerNo">General Register No.</label>
                            <input
                            type="text"
                            class="form-control"
                            id="RegisterNo"
                            placeholder="Enter General Register No."
                            />
                          </div>

                          <div class="form-group">
                             <label for="studentId">Student Serial ID</label>
                             <input
                              type="text"
                              class="form-control"
                              id="studentId"
                              placeholder="Enter Student Serial ID"
                              />
                           </div>

                           <div class="form-group">
                            <label for="studentName">Student Full Name</label>
                            <input
                            type="text"
                            class="form-control"
                            id="studentName"
                            placeholder="Enter Student Full Name"
                            />
                          </div>

                          <div class="form-group">
                             <label for="motherName">Mother's Name</label>
                             <input
                              type="text"
                              class="form-control"
                              id="motherName"
                              placeholder="Enter Mother's Name"
                              />
                           </div>
                           
                           <div class="form-group">
                            <label for="adhar">Adhar Card No.</label>
                            <input
                            type="text"
                            class="form-control"
                            id="adhar"
                            placeholder="Enter Adhar Card No."
                            />
                          </div>

                          <div class="form-group">
                             <label for="religion">Religion</label>
                             <input
                              type="text"
                              class="form-control"
                              id="religion"
                              placeholder="Enter Religion"
                              />
                           </div>

                            <div class="form-group">
                            <label for="caste">Caste</label>
                            <input
                            type="text"
                            class="form-control"
                            id="caste"
                            placeholder="Enter Caste"
                            />
                          </div>

                          <div class="form-group">
                             <label for="subCaste">Sub-Caste</label>
                             <input
                              type="text"
                              class="form-control"
                              id="subCaste"
                              placeholder="Enter Sub-Caste"
                              />
                           </div>

                          <div class="form-group">
                            <label for="birthplace">Place of Birth</label>
                            <input
                            type="text"
                            class="form-control"
                            id="birthplace"
                            placeholder="Enter Place Of Birth"
                            />
                          </div>

                          
                        </div>

                         <div class="col-md-6 ">

                         <div class="form-group">
                            <label for="DOB">Date of Birth (dd-mm-yyyy)</label>
                            <input
                            type="date"
                            class="form-control"
                            id="DOB"
                            />
                          </div>

                          <div class="form-group">
                             <label for="DOBwords">Date of Birth (In Words)</label>
                             <input
                              type="text"
                              class="form-control"
                              id="DOBwords"
                              placeholder="Enter Date of Birth (In Words)"
                              />
                           </div>

                           <div class="form-group">
                            <label for="class">Enter Class</label>
                             <select
                                 class="form-select"
                                 id="class"
                                 style="height:40px"
                                >
                                <option>8ᵗʰ</option>
                                <option>9ᵗʰ</option>
                                <option>10ᵗʰ</option>
                                <option>11ᵗʰ</option>
                                <option>12ᵗʰ</option>
                               </select>
                          </div>

                          <div class="form-group">
                             <label for="admissionDate">Date of Admission (dd-mm-yyyy)</label>
                             <input
                              type="date"
                              class="form-control"
                              id="admissionDate"
                              />
                           </div>

                          <div class="form-group">
                             <label for="lastClass">Present Class and Section</label>
                             <select
                                 class="form-select"
                                 id="lastClass"
                                 style="height:40px"
                                >
                                <option>8ᵗʰ</option>
                                <option>9ᵗʰ</option>
                                <option>10ᵗʰ</option>
                                <option>11ᵗʰ</option>
                                <option>12ᵗʰ</option>
                               </select>

                               <select
                                 class="form-select mt-3"
                                 id="lastClass"
                                 style="height:40px"
                                >
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                               </select>
                           </div>

                           <div class="form-group">
                            <label for="learning">Learning</label>
                             <select
                                 class="form-select"
                                 id="learning"
                                 style="height:40px"
                                >
                                <option>Learning</option>
                                <option>Was Learning</option>
                               </select>
                          </div>

                          <div class="form-group">
                            <label for="reason">Reason of Bonafide</label>
                             <select
                                 class="form-select"
                                 id="reason"
                                 style="height:40px"
                                >
                                <option>Adhar Card</option>
                                <option>Bus Pass</option>
                                <option>Bank Account</option>
                                <option>Caste Certificate</option>
                                <option>Caste Validity</option>
                                <option>Other</option>
                               </select>
                          </div>

                          <div class="form-group">
                             <label for="date">Date (dd-mm-yyyy)</label>
                             <input
                              type="date"
                              class="form-control"
                              id="date"
                              />
                           </div>
                        </div>
                      </div> 


                         <div class="row mt-4">
                            <div class="col text-center">
                              <button type="submit" class="btn btn-primary px-5">Print Bonafide Certificate</button>
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
