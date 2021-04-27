@extends('teacher.welcome');

@section('teacher.seo')
<title>Admin Sayfası</title>
@endsection

@section('teacher.content')
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
                <i style="color:#000;" class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-profile rounded-circle" src="img/boy.png" style="max-width: 60px">
                        <span style="color:#000!important;" class="ml-2 d-none d-lg-inline text-white small">Admin</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="profileEdit.php">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profilim
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Çıkış
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Çıkış Yapmak İster Misiniz?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary" data-dismiss="modal">İptal</button>
                        <a href="logOut.php" class="btn btn-primary">Çıkış</a>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .card {
                position: relative;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-direction: column;
                flex-direction: column;
                min-width: 0;
                word-wrap: break-word;
                background-color: #8ac26e;
                background-clip: border-box;
                border: 1px solid #ffffff !important;
                border-radius: 1.25rem;
                margin-bottom: 20px;
                padding: 0 !important;
            }

            .txt {
                font-size: 20px;
                color: #000 !important;
                text-align: center;
                padding: 10px;
            }

            .sayi {
                color: #fff !important;
            }

            .ust {
                background: #fff;
                width: 346px;
                margin-left: -20px;
                height: 50px;
                margin-right: -20px;
            }

        </style>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-5">
                                <div class="ust">
                                    <span class="d-block txt text-dark font-weight-bold">Çevrimiçi Olanlar</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="d-block sayi display-4 text-dark mb-5">0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-5">
                                <div class="ust">
                                    <span class="d-block txt text-dark font-weight-bold">Toplam Üye Sayısı</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="d-block sayi display-4 text-dark mb-5">0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-5">
                                <div class="ust">
                                    <span class="d-block txt text-dark font-weight-bold">Toplam Satış</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="d-block sayi display-4 text-dark mb-5">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="sticky-footer bg-white">
            <div class="container my-auto">

            </div>
        </footer>
        <!-- Footer -->
    </div>
</div>




<div class="container">
    <div class="row">

        @foreach($packet as $packetkey)
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">{{$packetkey->packet_name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$packetkey->packet_name}}</h6>
                    <p class="card-text">{{$packetkey->packet_price}} TL</p>
                    <a href="{{ route('videowatch',$packetkey->packet_id) }}"><button type="button" class="btn btn-primary">İçeriğe git</button></a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>



@endsection
