<!DOCTYPE html>
<html lang="tr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    @yield('teacher.seo')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="/bdadmin/css/ruang-admin.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="/bdadmin/css/theme.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/bdadmin/css/menu.css">
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

<body id="page-top">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div id="wrapper">
        <!-- Sidebar -->
        @include('teacher.include.left')
        <!-- Sidebar -->


        @yield('teacher.content')


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
        <script src="js/ruang-admin.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <!-- Select2 -->

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
