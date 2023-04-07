<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta http-equiv=" X-UA-Compatible" content="IE=edge" />
    <title>Praktek Pertamaku</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="<?= base_url() ?>assets/img/icon.ico" type="image/x-icon" />
    <script src="<?= base_url() ?>assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": [
                    "Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['<?= base_url() ?>assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/atlantis.min.css">
    <script src="<?= base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <script src="<?= base_url() ?>assets/js/atlantis.min.js"></script>
</head>

<body>
    <div class="wrapper overlay-sidebar">
        <div class="main-header">
            <div class="logo-header" data-background-color="blue2">
                <a href="beranda" class="logo">
                    <img src="<?= base_url() ?>assets/img/logo.svg" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="icon-menu"></i></span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle sidenav-overlay-toggler"><i class="icon-menu"></i></button>
                </div>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="<?= base_url() ?>assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg">
                                                <img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded">
                                            </div>
                                            <div class="u-text">
                                                <h4>Hizrian</h4>
                                                <p class="text-muted">hello@example.com</p>
                                                <a href="jauharimtikhan" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="home"><i class="icon-layers"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pasaran"><i class="icon-note"></i>
                                <p>Form</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#"><i class="icon-tag"></i>
                                <p>Tentang</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="tugas"><i class="icon-tag"></i>
                                <p>Tugas</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">

                <div class="row mt-5" id="blokfilm" style="margin-left: 15px; margin-right: 15px; "></div>
            </div>
            <div class="modal fade" role="dialog" id="modaldetail">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header btn-primary">
                            <h5 class="modal-title">Detail Film</h5>
                        </div>
                        <div class="modal-body" id="blokdetail"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://drive.crazycode.my.id/datajs/film.js"></script>
        <script>
            ambildatafilm();

            function ambildatafilm() {
                let hasil = "";
                let x;
                for (x in datafilm) {
                    let cv = datafilm[x].cover;
                    let jd = datafilm[x].judul;
                    let pm = datafilm[x].pemain;
                    let th = datafilm[x].tahun;
                    let rt = datafilm[x].rating;
                    let sn = datafilm[x].sinopsis;
                    hasil += "<img src='" + cv + "' data-judul='" + jd + "' data-pemain='" + pm + "' data-tahun='" + th + "' data-rating='" + rt + "' data-sinopsis='" + sn + "' class='col-md-2' style='margin-bottom: 15px' onclick='tampildetail(this)'>";
                }
                $("#blokfilm").html(hasil);
            }

            function tampildetail(el) {
                let judul = $(el).data("judul");
                let pemain = $(el).data("pemain");
                let tahun = $(el).data("tahun");
                let rating = $(el).data("rating");
                let sinopsis = $(el).data("sinopsis");
                $("#blokdetail").html("<p style='font-size: 20px;'><b>Judul:</b><br>" + judul + "<p style='font-size:20px;'><b>Pemain:</b><br>" + pemain + "<p style='font-size: 20px;'><b>Tahun:</b><br>" + tahun + "<p style='font-size: 20px;'><b>Rating:</b><br>" + rating + "<p style='font-size: 20px; text-align:justify'><b>Sinopsis:</b><br>" + sinopsis);
                $("#modaldetail").modal("show");

            }
        </script>
    </div>
</body>

</html>