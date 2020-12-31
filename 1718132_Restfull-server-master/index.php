<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Roti Enak</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center klik_menu" id="#dashboard" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-birthday-cake"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Roti Enak</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link klik_menu" id="dashboard" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link klik_menu" id="barang" href="#">
                    <i class="fas fa-birthday-cake"></i>
                    <span>Barang</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link klik_menu" id="roti" href="#">
                    <i class="fas fa-book-reader"></i>
                    <span>Jenis Roti</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                                <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid val">

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Roti Enak 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.val').load('dashboard.php');
            $('.klik_menu').on('click', function() {
                let menu = $(this).attr('id');
                console.log(menu);
                if (menu == "dashboard") {
                    $('.val').load('dashboard.php');
                } else if (menu == "barang") {
                    $('.val').load('barang.php');
                    loadTableBarang();
                } else if (menu == "roti") {
                    $('.val').load('roti.php');
                    loadTableJenisRoti();
                }
            });
            $('.val').on('click', '.addbarang', function() {
                var barang = $('[name="createBarang"]').val();
                var id = $('[name="createId"]').val();
                var nama = $('[name="createNama"]').val();
                var jenis = $('[name="createJenis"]').val();
                var ukuran = $('[name="createUkuran"]').val();
                var topping = $('[name="createTopping"]').val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/1718132_Restfull-server-master/barang",
                    data: {
                        id_barang: barang,
                        jenis_id: id,
                        nama_barang: nama,
                        jenis_barang: jenis,
                        ukuran_barang: ukuran,
                        topping_barang: topping
                    },
                    dataType: "JSON",
                    headers: {
                        'ROTI-TOKEN': "ROTI"
                    },
                    success: function(response) {
                        loadTableBarang();
                        var barang = $('[name="createBarang"]').val("");
                        var id = $('[name="createId"]').val("");
                        var nama = $('[name="createNama"]').val("");
                        var jenis = $('[name="createJenis"]').val("");
                        var ukuran = $('[name="createUkuran"]').val("");
                        var topping = $('[name="createTopping"]').val("");
                    }
                });
            });
            $('.val').on('click', '.editbarang', function() {
                var id = $(this).attr('key');
                $.ajax({
                    type: "GET",
                    url: `http://localhost/1718132_Restfull-server-master/barang?id_barang=${id}`,
                    dataType: "JSON",
                    headers: {
                        'ROTI-TOKEN': "ROTI"
                    },
                    success: function(response) {
                        response.data.forEach(element => {
                            $('[name="updateBarang"]').val(element.id_barang);
                            $('[name="updateId"]').val(element.jenis_id);
                            $('[name="updateNama"]').val(element.nama_barang);
                            $('[name="updateJenis"]').val(element.jenis_barang);
                            $('[name="updateUkuran"]').val(element.ukuran_barang);
                            $('[name="updateTopping"]').val(element.topping_barang);
                        });
                    }
                });
            });
            $('.val').on('click', '.updatebarang', function() {
                var barang = $('[name="updateBarang"]').val();
                var id = $('[name="updateId"]').val();
                var nama = $('[name="updateNama"]').val();
                var jenis = $('[name="updateJenis"]').val();
                var ukuran = $('[name="updateUkuran"]').val();
                var topping = $('[name="updateTopping"]').val();
                $.ajax({
                    type: "PUT",
                    url: "http://localhost/1718132_Restfull-server-master/barang",
                    data: {
                        id_barang: barang,
                        jenis_id: id,
                        nama_barang: nama,
                        jenis_barang: jenis,
                        ukuran_barang: ukuran,
                        topping_barang: topping
                    },
                    dataType: "JSON",
                    headers: {
                        'ROTI-TOKEN': "ROTI"
                    },
                    success: function(response) {
                        loadTableBarang();
                        $('[name="updateBarang"]').val("");
                        $('[name="updateId"]').val("");
                        $('[name="updateNama"]').val("");
                        $('[name="updateJenis"]').val("");
                        $('[name="updateUkuran"]').val("");
                        $('[name="updateTopping"]').val("");
                        console.log(response);
                    }
                });
            });
            $('.val').on('click', '.deletebarang', function() {
                var id = $(this).attr('key');
                var kondisi = confirm(`apa anda yakin ingin menghapus data ${id}`);
                if (kondisi == false) {
                    return;
                } else {
                    $.ajax({
                        type: "DELETE",
                        url: "http://localhost/1718132_Restfull-server-master/barang",
                        data: {
                            id_barang: id
                        },
                        dataType: "JSON",
                        headers: {
                            'ROTI-TOKEN': "ROTI"
                        },
                        success: function(response) {
                            loadTableBarang();
                        }
                    });
                }

            });



            function loadTableBarang() {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: `http://localhost/1718132_Restfull-server-master/barang`,
                    dataType: "JSON",
                    headers: {
                        'ROTI-TOKEN': "ROTI"
                    },
                    success: function(response) {
                        let i = 1;
                        response.data.forEach(element => {
                            console.log(element);
                            html += `<tr>
                                        <th scope="row">${i}</th>
                                        <td>${element.id_barang}</td>
                                        <td>${element.jenis_id}</td>
                                        <td>${element.nama_barang}</td>
                                        <td>${element.jenis_barang}</td>
                                        <td>${element.ukuran_barang}</td>
                                        <td>${element.topping_barang}</td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button key="${element.id_barang}" class="btn btn-success btn-sm rounded-0 editbarang" type="button" data-toggle="modal" data-target="#updateModalCenterbarang"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button key="${element.id_barang}" class="btn btn-danger btn-sm rounded-0 deletebarang" type="button"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#table_barang').html(html);
                    }
                });
            }

            $('.val').on('click', '.create', function() {
                $.ajax({
                    type: "GET",
                    url: `http://localhost/1718132_Restfull-server-master/barang`,
                    dataType: "JSON",
                    headers: {
                        'ROTI-TOKEN': "ROTI"
                    },
                    success: function(response) {
                        var html = "<option>Pilih barang</option>`";
                        response.data.forEach(element => {
                            html += `<option value ="${element.id_barang}">${element.nama_barang}</option>`;
                        });
                        $('.inputbarang').html(html);
                    }
                });
            });

            $('.val').on('click', '.addroti', function() {
                var id = $('[name="id_jenis"]').val();
                var tanggal = $('[name="createBarang"]').val();
                var mulai = $('[name="createNama"]').val();
                var selesai = $('[name="createKet"]').val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/1718132_Restfull-server-master/roti",
                    data: {
                        id_jenis: id,
                        jenis_barang: barang,
                        jenis_nama_barang: nama,
                        keterangan: ket
                    },
                    dataType: "JSON",
                    headers: {
                        'ROTI-TOKEN': "ROTI"
                    },
                    success: function(response) {
                        loadTableRoti();
                        $('[name="id_jenis"]').val("");
                        $('[name="createBarang"]').val("");
                        $('[name="createNama"]').val("");
                        $('[name="createKet"]').val("");
                    }
                });
            });

            $('.val').on('click', '.editroti', function() {
                $.ajax({
                    type: "GET",
                    url: `http://localhost/1718132_Restfull-server-master/roti`,
                    dataType: "JSON",
                    headers: {
                        'ROTI-TOKEN': "ROTI"
                    },
                    success: function(response) {
                        var html = "<option>Pilih Roti</option>`";
                        response.data.forEach(element => {
                            html += `<option value ="${element.id_barang}">${element.nama_barang}</option>`;
                        });
                        $('.inputUpUst').html(html);
                    }
                });
                var id = $(this).attr('key');

                $.ajax({
                    type: "GET",
                    url: `http://localhost/1718132_Restfull-server-master/roti?id_jenis=${id}`,
                    dataType: "JSON",
                    headers: {
                        'ROTI-TOKEN': "ROTI"
                    },
                    success: function(response) {
                        response.data.forEach(element => {
                            $('[name="id_jenis"]').val(element.id_jenis);
                            $('[name="updateBarang"]').val(element.jenis_barang);
                            $('[name="updateNama"]').val(element.jenis_nama_barang);
                            $('[name="updateKet"]').val(element.keterangan);
                        });
                    }
                });
            });

            $('.val').on('click', '.updateroti', function() {
                var id = $('[name="id_jenis"]').val();
                var id_ust = $('[name="updateBarang"]').val();
                var tanggal = $('[name="updateNama"]').val();
                var mulai = $('[name="updateKet"]').val();
                $.ajax({
                    type: "PUT",
                    url: "http://localhost/1718132_Restfull-server-master/roti",
                    data: {
                        id_jenis: id,
                        jenis_barang: barang,
                        jenis_nama_barang: nama,
                        keterangan: ket,
                    },
                    dataType: "JSON",
                    headers: {
                        'ROTI-TOKEN': "ROTI"
                    },
                    success: function(response) {
                        loadTableroti();
                        $('[name="id_jenis"]').val("");
                        $('[name="updateBarang"]').val("");
                        $('[name="updateNama"]').val("");
                        $('[name="updateKet"]').val("");

                    }
                });
            });

            $('.val').on('click', '.deleteroti', function() {
                var id = $(this).attr('key');
                var kondisi = confirm(`apa anda yakin ingin menghapus data ${id}`);
                if (kondisi == false) {
                    return;
                } else {
                    $.ajax({
                        type: "DELETE",
                        url: "http://localhost/1718132_Restfull-server-master/roti",
                        data: {
                            id_roti: id
                        },
                        dataType: "JSON",
                        headers: {
                            'ROTI-TOKEN': "ROTI"
                        },
                        success: function(response) {
                            loadTableroti();
                        }
                    });
                }

            });

            function loadTableroti() {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: `http://localhost/1718132_Restfull-server-master/roti`,
                    dataType: "JSON",
                    headers: {
                        'ROTI-TOKEN': "ROTI"
                    },
                    success: function(response) {
                        let i = 1;
                        response.data.forEach(element => {
                            console.log(element);
                            html += `<tr>
                                        <th scope="row">${i}</th>
                                        <td>${element.id_jenis}</td>
                                        <td>${element.jenis_barang}</td>
                                        <td>${element.jenis_nama_barang}</td>
                                        <td>${element.keterangan}</td>
                                        <td>
                                        <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button key="${element.id_jenis}" class="btn btn-success btn-sm rounded-0 editMsj" type="button" data-toggle="modal" data-target="#updateModalCenterroti"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button key="${element.id_jenis}" class="btn btn-danger btn-sm rounded-0 deleteroti" type="button"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#table_roti').html(html);
                    }
                });
            }
        });
    </script>
    <td></td>
</body>

</html>