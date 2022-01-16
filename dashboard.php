<?php
session_start();
if (!isset($_SESSION['ID'])) {
  echo "
    <script>
      alert('Harap login terlebih dahulu sebelum mengakses halaman ini!');
      document.location.href = 'login.php';
    </script>
  ";
}
include 'komponen/starting-pages.php';
include 'komponen/sidebar.php';
include 'komponen/navbar.php';
//coba git

?>



<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Hospital Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Hospital</a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- customar project  start -->
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-md f-36 text-c-purple"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Doctor</h6>
                                <h2 class="m-b-0">35</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-injured f-36 text-c-red"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Patient</h6>
                                <h2 class="m-b-0">368</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-nurse f-36 text-c-green"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Nurse</h6>
                                <h2 class="m-b-0">79</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-prescription-bottle-alt f-36 text-c-blue"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Pharmacist</h6>
                                <h2 class="m-b-0">10</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-flask f-36 text-c-yellow"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Laboratories</h6>
                                <h2 class="m-b-0">35</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-user-tie f-36 text-c-blue"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Accountant</h6>
                                <h2 class="m-b-0">368</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-file-invoice-dollar f-36 text-c-red"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Payment</h6>
                                <h2 class="m-b-0">79</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fas fa-pills f-36 text-c-purple"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Medicine</h6>
                                <h2 class="m-b-0">10</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customar project  end -->
            <!-- subscribe start -->
            <div class="col-md-12 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-procedures text-c-blue d-block f-40"></i>
                        <h4 class="m-t-20 m-b-20"><span class="text-c-blue">8.62k</span> Operation</h4>
                        <button class="btn btn-primary btn-sm btn-round" data-toggle="modal" data-title="Operation" data-target="#modal-report">View Report</button>
                    </div>
                    <div id="operation-chart"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-skull-crossbones text-c-green d-block f-40"></i>
                        <h4 class="m-t-20 m-b-20"><span class="text-c-green">+40</span> Death</h4>
                        <button class="btn btn-success btn-sm btn-round" data-toggle="modal" data-title="Death" data-target="#modal-report">View Report</button>
                    </div>
                    <div id="death-chart"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-baby text-c-red d-block f-40"></i>
                        <h4 class="m-t-20 m-b-20"><span class="text-c-red">+40</span> Birth</h4>
                        <button class="btn btn-danger btn-sm btn-round" data-toggle="modal" data-title="Birth" data-target="#modal-report">View Report</button>
                    </div>
                    <div id="birth-chart"></div>
                </div>
            </div>
            <!-- subscribe end -->

        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
<div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table id="report-table" class="table table-bordered table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Sex</th>
                                <th>Birth Date</th>
                                <th>Age</th>
                                <th>Blood Group</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="assets/images/user/avatar-1.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-2.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-3.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-4.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-1.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-2.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-3.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-4.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-1.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-2.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-3.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Tanvir Hasan</td>
                                <td>patient@example.com</td>
                                <td>9876543</td>
                                <td>female</td>
                                <td>13/09/1994</td>
                                <td>54</td>
                                <td>o+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="assets/images/user/avatar-4.jpg" class="img-radius" width="30px" height="30px"></td>
                                <td>Joseph William</td>
                                <td>Joseph@example.com</td>
                                <td>1234567</td>
                                <td>male</td>
                                <td>09/10/1990</td>
                                <td>27</td>
                                <td>B+</td>
                                <td>
                                    <a href="#!" class="btn btn-info btn-sm">Edit</a>
                                    <a href="#!" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
<?php
include 'komponen/closing-pages.php';
?>