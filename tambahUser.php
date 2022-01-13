<?php
include 'config/koneksi.php';
include 'komponen/starting-pages.php';
include 'komponen/sidebar.php';
include 'komponen/navbar.php';
?>

<div class="pcoded-main-container">

        <div class="pcoded-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Data User</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="user.php">User</a></li>
                                    <li class="breadcrumb-item"><a href="">Tambah Data User</a></li>
                                <!-- <li class="breadcrumb-item"><a href="#!">Basic Initialization</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">

                            <form action="insertUser.php" method="POST" enctype="multipart/form-data" autocomplete="OFF"> 
                                <center><h4 class="heading-small text mb-4 ml-4 mt-5">Data Pasien</h4></center>
                                <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <label class="form-control-label">Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Isi Username">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Password</label>
                                            <input type="text" class="form-control" name="password" placeholder="Isi Password">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" name="fullname" placeholder="Isi Nama Lengkap Anda..">
                                    </div>
                                </div>
                                </div>
                                <hr class="my-4" />
                                <!-- Description -->
                                <h6 class="heading-small text-muted mb-4">Masukkan Foto Profil dengan format jpg, jpeg, dan png.</h6>
                                <div class="col-md-12">
									<div class="form-group">
										<label>Foto*</label>
										<div class="input-group mb-3">
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="image">
												<label class="custom-file-label">Choose file</label>
											</div>
										</div>
									</div>
								</div>
                                
                                <center><h6 class="heading-small text-muted mb-4">Setelah selesai menginput data tekan tombol simpan</h6>
                                <div class="col-md-12 ml">
                                                    
                                    <button class="btn btn-sm btn-success" type="submit"> Simpan Data User </button>
                                </div></center>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
include 'komponen/closing-pages.php';
?>
