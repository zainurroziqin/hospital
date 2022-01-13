<?php 
include 'config/koneksi.php';
include 'komponen/starting-pages.php';
include 'komponen/sidebar.php';
include 'komponen/navbar.php';

$user = query("SELECT * FROM user")
?>
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">user</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="Dashboard.php"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">user</a></li>
                            <!-- <li class="breadcrumb-item"><a href="#!">Basic Initialization</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h5>Kandang A</h5> -->
                    <a href="tambahuser.php">
                        <button type="button" class="btn btn-warning"><i class="feather mr-2 icon-plus"></i>Tambah Data user</button>
                        </a>
                </div>
                <div class="card-body">
                    <div class="dt-responsive table-responsive">
                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Image</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Opsi</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                    <?php $i =1; ?>
                        
                        <?php foreach ($user as $row ): ?>
                            <td><?=$i; ?></td>
                            <td>
                            <img src="assets/images/user/<?= $row["image"]; ?>" width= "60">
                                        </td>
                            </td>
                            <td><?= $row["fullname"]; ?></td>
                            <td><?= $row["username"]; ?></td>
                            <td>
                                <a href="#">
                                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> Detail</button>
                                </a>

                                <a href="#">
                                    <button type="button" class="btn btn-danger btn-sm tombol-hapus"><i class="fas fa-trash"></i> Hapus</button>
                                </a>
                            </td>
                            </tr>
                            <?php $i ++; ?>
                        <?php endforeach; ?>
                            </tbody>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'komponen/closing-pages.php';
?>