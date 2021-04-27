<!DOCTYPE html>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>BD AKADEMİ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="/admin/css/ruang-admin.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="/admin/css/theme.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/admin/css/menu.css">

    <!-- Stylesheet
    ========================= -->
    <link rel="stylesheet" type="text/css" href="/admin/login_css/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/login_css/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/admin/login_css/css/stylesheet.css">
</head>
<style>
    .sidebar .nav-item {
        position: relative;
        margin-bottom: 0px;
    }

    .nav-link svg {
        width: 25px;
        margin-top: -5px;
    }

</style>

<body>

    <!-- Preloader End -->

    <div id="main-wrapper" class="oxyy-login-register">
        <div class="hero-wrap d-flex align-items-center h-100">
            <div class="hero-mask opacity-4 bg-secondary"></div>
            <div class="hero-bg hero-bg-scroll" style="background-image:url('/admin/arkaplan/b.jpg');"></div>
            <div class="hero-content mx-auto w-100 h-100">
                <div class="container">
                    <div class="row no-gutters min-vh-100">
                        <!-- Welcome Text
                    ========================= -->
                        <div class="col-md-7 d-flex flex-column">
                            <div class="row no-gutters my-auto">
                                <div class="col-10 col-lg-9 mx-auto text-center">
                                </div>
                            </div>
                        </div>
                        <!-- Welcome Text End -->

                        <!-- Login Form
                    ========================= -->
                        <div class="col-md-5 d-flex">
                            <div class="container my-auto py-4 shadow-lg bg-white">
                                <div class="row">
                                    <div class="col-11 col-lg-11 mx-auto">
                                        <h3 class="text-9 font-weight-600 text-center mt-2 mb-3">GİRİŞ YAP</h3>
                                        <form id="loginForm" method="post">
                                            <div class="form-group">
                                                <label class="text-dark font-weight-600">Email</label>
                                                <input type="email" class="form-control rounded-0" name="email" required="" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label class="text-dark font-weight-600">Şifre</label>
                                                <input type="password" class="form-control rounded-0" name="sifre" required="" placeholder="Şifre">
                                            </div>
                                            <button class="btn btn-dark btn-block rounded-0 my-4" type="submit">GİRİŞ YAP</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Login Form End -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/ruang-admin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <!-- Select2 -->
    <script src="/admin/login_css/js/switcher.min.js"></script>
    <script src="/admin/login_css/js/theme.js"></script>
    <script>
        $(".js-example-tokenizer").select2({
            tags: true
            , tokenSeparators: [',', ' ']
        })
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });

    </script>

</body>
</html>
