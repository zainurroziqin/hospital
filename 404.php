<!DOCTYPE html>
<html lang="en">

<?php 
    include 'komponen/starting-pages.php'
?>
<!-- [ offline-ui ] start -->
<div class="auth-wrapper maintance">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center">
                    <img src="assets/images/maintance/404.png" alt="" class="img-fluid">
                    <h5 class="text-muted my-4">Oops! Page not found!</h5>
                    <form action="http://localhost/hospital/dashboard.php">
                        <button class="btn waves-effect waves-light btn-primary mb-4"><i class="feather icon-refresh-ccw mr-2"></i>Reload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include 'komponen/closing-pages.php'
?>


</body>

<!-- Mirrored from ableproadmin.com/bootstrap/default/maint-error.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Nov 2021 19:01:19 GMT -->
</html>