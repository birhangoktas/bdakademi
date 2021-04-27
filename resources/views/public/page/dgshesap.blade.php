@extends('public.welcome')

@section('public.seo')
<title>BD Akademi | DGS Puan Hesaplama</title>
@endsection
@section('public.content')


        <div class="bg-color grey"  style="background-image: url(img/arkaplan.png);">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 ">
                        <div class="container contact ">
                            <form action="" name="f1" id="f1" class="phesap" onreset="" style="margin-left:0;">
                                <div class="row alert alert-warning">
                                    <div class="col-md-6 col-xs-12  text-center">
                                        <div class="label-on-input">
                                            <input onkeypress="return isNumber(event)" type="text" class="form-control"
                                                id="diploma" name="diploma">
                                            <label>Ağırlıklı Ön Lisans Başarı Puanı ( 40 ile 80 arasında )</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 clearfix" style="margin-bottom:0;">
                                        <div class="col-md-12 col-xs-12">
                                            <input class="form-check-input" type="checkbox" id="kirikOBP"
                                                name="kirikOBP" style="width: 20px; height:20px;font-size:66px;" />

                                            <label style="float: left; color: rgb(216, 122, 122); font-size: 18px;"
                                                for="vehicle3">&nbsp;
                                                <b>Daha Önce Bir Bölüme Yerleştim </b> </i></label>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="clearfix"></div>
                                <div class="row point-calculator">
                                    <div class="col-md-6 col-xs-12 point-mobile-row calculateRowResult">
                                        <div class="col-md-12 col-xs-12 point-title">
                                            <h4>Sözel Yetenek</h4>
                                            <span>(60 Soru)</span><br>
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"><label>Doğru</label>
                                            <input type="text" name="dgs-t-d" id="dgs-t-d" size="3" maxlength="2"
                                                class="form-control" onkeyup="hesapla()">

                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"><label>Yanlış</label>
                                            <input type="text" name="dgs-t-y" id="dgs-t-y" size="3" maxlength="2"
                                                class="form-control" onkeyup="hesapla()">

                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label class="">Net</label>
                                            <input type="text" name="dgs-t-n" id="dgs-t-n" size="3" maxlength="2"
                                                class="form-control" onkeyup="hesapla()" disabled>

                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 point-mobile-row calculateRowResult">
                                        <div class="col-md-12 col-xs-12 point-title">
                                            <h4>Sayısal Yetenek</h4>
                                            <span>(60 Soru)</span><br>
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Doğru</label>
                                            <input type="text" name="dgs-m-d" id="dgs-m-d" size="3" maxlength="2"
                                                class="form-control" onkeyup="hesapla()">

                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"><label>Yanlış</label>
                                            <input type="text" name="dgs-m-y" id="dgs-m-y" size="3" maxlength="2"
                                                class="form-control" onkeyup="hesapla()">

                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"><label class="">Net</label>
                                            <input type="text" name="dgs-m-n" id="dgs-m-n" size="3" maxlength="2"
                                                class="form-control" onkeyup="hesapla() " disabled>

                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">

                                    <div class="col-xs-12 col-md-12">
                                        <center>
                                            <h5> &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                                                &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                                                &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
                                        </center>
                                    </div>



                                    <div class="col-md-6 alert alert-success total-point clearfix">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="soz-ham"
                                                id="soz-ham" placeholder="0" size="7" disabled>
                                            <label>Sözel Yetenek Puanı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 alert alert-success total-point clearfix">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="say-ham"
                                                id="say-ham" size="7" placeholder="0" disabled>
                                            <label>Sayısal Yetenek Puanı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 alert alert-success total-point clearfix">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="ea-ham"
                                                id="ea-ham" placeholder="0" size="7" disabled>
                                            <label>Eşit Ağırlık Puanı</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script language="javascript">
            document.onkeypress = function (event) {
                event = (event || window.event);
                if (event.keyCode == 123) {
                    return false;
                }
            };
            document.onmousedown = function (event) {
                event = (event || window.event);
                if (event.keyCode == 123) {
                    return false;
                }
            };
            document.onkeydown = function (event) {
                event = (event || window.event);
                if (event.keyCode == 123) {
                    return false;
                }
            };
            document.onkeydown = function (e) {
                return !(e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117));
            };
            document.onmousedown = disableclick;

            function disableclick(event) {
                if (event.button == 2) {
                    return false;
                }
            }
        </script>
        <script type="text/javascript">
            function limit(name, name2, limit) {
                if (limit < Number(name.val())) {
                    name.val(limit);
                    name2.val(0);
                }
                if (limit < (Number(name.val()) + Number(name2.val()))) {
                    //name.val(limit); 
                    name2.val(0);
                }
                if (name.val() == undefined) {
                    name.val(0);
                }
                if (name2.val() == undefined) {
                    name2.val(0);
                }
            }


            function hesapla() {
                var diploma = $('input[name="diploma"]');
                var dgs_m_d = $('input[name="dgs-m-d"]');
                var dgs_t_d = $('input[name="dgs-t-d"]');

                var dgs_m_y = $('input[name="dgs-m-y"]');
                var dgs_t_y = $('input[name="dgs-t-y"]');

                var dgs_m_n = $('input[name="dgs-m-n"]');
                var dgs_t_n = $('input[name="dgs-t-n"]');

                var say_ham = $('input[name="say-ham"]');
                var soz_ham = $('input[name="soz-ham"]');
                var ea_ham = $('input[name="ea-ham"]');

                if (80 < Number(diploma.val())) {
                    diploma.val(80);
                }

                if ($('input[name="kirikOBP"]:checked').val() !== undefined) {
                    var diplomap = (Number(diploma.val()) * 0.45);
                } else {
                    var diplomap = (Number(diploma.val()) * 0.8);
                }

                limit(dgs_m_d, dgs_m_y, 60);
                limit(dgs_t_d, dgs_t_y, 60);

                dgs_m_n.val(dgs_m_d.val() - (dgs_m_y.val() * 0.25));
                dgs_t_n.val(dgs_t_d.val() - (dgs_t_y.val() * 0.25));

                dgs_sozel = 0.0;
                dgs_sayisal = 0.0;
                dgs_esit = 0.0;

                if (dgs_m_d.val() >= 0.5 || dgs_t_d.val() >= 0.5) {
                    dgs_sozel = ((dgs_t_n.val() * 0.6) + (dgs_m_n.val() * 3) + (diplomap)) + 60.747;
                    dgs_sayisal = ((dgs_t_n.val() * 3) + (dgs_m_n.val() * 0.6) + (diplomap)) + 132.536;
                    dgs_esit = ((dgs_t_n.val() * 1.8) + (dgs_m_n.val() * 1.8) + (diplomap)) + 96.642;

                }



                say_ham.val(parseFloat(dgs_sayisal).toFixed(3));
                soz_ham.val(parseFloat(dgs_sozel).toFixed(3));
                ea_ham.val(parseFloat(dgs_esit).toFixed(3));

            }

            $('input').on('keyup', function () {
                hesapla();
            });
            $('input').on('click', function () {
                hesapla();
            });
            $('input').click(
                function () {
                    $(this).val('');
                });
        </script>

@endsection
