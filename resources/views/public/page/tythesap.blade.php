@extends('public.welcome')

@section('public.seo')
<title>BD Akademi | TYT Puan Hesaplama</title>
@endsection
@section('public.content')


   <script language="javascript" type="text/javascript">

            function isNumber(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
            }
            //-->
        </script>
        <div class="bg-color grey">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12  " style="margin-top:-3%">
                        <div class="container contact ">
                            <form action="" name="f1" id="f1" class="phesap" onreset="" style="margin-left:0;">
                                <div class="row alert alert-warning">
                                    <div class="col-md-6 col-xs-12  text-center">
                                        <div class="label-on-input">
                                            <input onkeypress="return isNumber(event)" style="margin-top:5px;"
                                                type="tel" class="form-control" id="diploma" name="diploma" />
                                            <label>Diploma Puanı(50 - 100)</label>
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
                                    <div class="col-md-3 col-xs-12 point-mobile-row">
                                        <div class="col-md-12 col-xs-12 point-title">
                                            <h4>Türkçe</h4>
                                            <span>(40 Soru)</span>
                                        </div><br>
                                        <div class="col-md-12 col-xs-4 point-row">
                                            <label>Doğru</label>
                                            <input type="tel" class="form-control" name="tyt-t-d" id="tyt-t-d"
                                                onkeyup="hesapla()" />

                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row">
                                            <label>Yanlış</label>
                                            <input type="tel" class="form-control" name="tyt-t-y" id="tyt-t-y"
                                                onkeyup="hesapla()" />

                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row">
                                            <label class="">Net</label>
                                            <input type="tel" class="form-control active" name="tyt-t-n" id="tyt-t-n"
                                                onkeyup="hesapla()" disabled />

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12 point-mobile-row">
                                        <div class="col-md-12 col-xs-12 point-title">
                                            <h4><span class="hidden-xs">Temel</span><span
                                                    class="visible-xs-inline">T.</span> Matematik</h4>
                                            <span>(40 Soru)</span>
                                        </div><br>
                                        <div class="col-md-12 col-xs-4 point-row">
                                            <label>Doğru</label>
                                            <input type="tel" class="form-control" name="tyt-m-d" id="tyt-m-d"
                                                onkeyup="hesapla()" />

                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row">
                                            <label>Yanlış</label>
                                            <input type="tel" class="form-control" name="tyt-m-y" id="tyt-m-y"
                                                onkeyup="hesapla()" />
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row">
                                            <label class="">Net</label>
                                            <input type="tel" class="form-control active" name="tyt-m-n" id="tyt-m-n"
                                                onkeyup="hesapla()" disabled />

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12 point-mobile-row">
                                        <div class="col-md-12 col-xs-12 point-title">
                                            <h4>Sosyal <span class="hidden-xs">Bilimler</span></h4>
                                            <span>(20 Soru)</span>
                                        </div><br>
                                        <div class="col-md-12 col-xs-4 point-row">
                                            <label>Doğru</label>
                                            <input type="tel" class="form-control" name="tyt-s-d" id="tyt-s-d"
                                                onkeyup="hesapla()" />
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row">
                                            <label>Yanlış</label>
                                            <input type="tel" class="form-control" name="tyt-s-y" id="tyt-s-y"
                                                onkeyup="hesapla()" />
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row">
                                            <label class="">Net</label>
                                            <input type="tel" class="form-control active" name="tyt-s-n" id="tyt-s-n"
                                                onkeyup="hesapla()" disabled />
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12 point-mobile-row">
                                        <div class="col-md-12  col-xs-12 point-title">
                                            <h4>Fen <span class="hidden-xs">Bilimleri</span></h4>
                                            <span>(20 Soru)</span>
                                        </div><br>
                                        <div class="col-md-12 col-xs-4 point-row">
                                            <label for="">Doğru</label>
                                            <input type="tel" class="form-control" name="tyt-f-d" id="tyt-f-d"
                                                onkeyup="hesapla()" />
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row">
                                            <label for="">Yanlış</label>
                                            <input type="tel" class="form-control" name="tyt-f-y" id="tyt-f-y"
                                                onkeyup="hesapla()" />
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row">
                                            <label class="">Net</label>
                                            <input type="tel" class="form-control active" name="tyt-f-n" id="tyt-f-n"
                                                onkeyup="hesapla()" disabled />
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">




                                    <div class="col-md-6 alert alert-success total-point clearfix">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="tyt-ham"
                                                id="tyt-ham" size="7" placeholder="0" style="margin-bottom:0;"
                                                disabled />
                                            <label>TYT Ham Puan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 alert alert-success total-point clearfix">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="tyt-yer"
                                                id="tyt-yer" size="7" placeholder="0" style="margin-bottom:0;"
                                                disabled />
                                            <label>TYT Yerleştirme Puanı</label>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#diploma").blur(function () {
                    var $this = $(this);
                    if ($this.val() !== "" && Number($this.val()) < 50)
                        $this.val(50);
                });
            });
            function limit(name, name2, limit) {
                if (limit < Number(name.val())) {
                    name.val(limit);
                    name2.val(0);
                }
                if (limit < (Number(name.val()) + Number(name2.val()))) {
                    //name.val(limit);
                    name2.val(0);
                }
                if (name.val() == undefined) { name.val(0); }
                if (name2.val() == undefined) { name2.val(0); }
            }


            function hesapla() {
                var diploma = $('input[name="diploma"]');
                var tyt_m_d = $('input[name="tyt-m-d"]');
                var tyt_t_d = $('input[name="tyt-t-d"]');
                var tyt_s_d = $('input[name="tyt-s-d"]');
                var tyt_f_d = $('input[name="tyt-f-d"]');
                var tyt_m_y = $('input[name="tyt-m-y"]');
                var tyt_t_y = $('input[name="tyt-t-y"]');
                var tyt_s_y = $('input[name="tyt-s-y"]');
                var tyt_f_y = $('input[name="tyt-f-y"]');
                var tyt_m_n = $('input[name="tyt-m-n"]');
                var tyt_t_n = $('input[name="tyt-t-n"]');
                var tyt_s_n = $('input[name="tyt-s-n"]');
                var tyt_f_n = $('input[name="tyt-f-n"]');
                var tyt_ham = $('input[name="tyt-ham"]');
                var tyt_yer = $('input[name="tyt-yer"]');

                var tum_net = $('input[name="tum-net"]');


                if (100 < Number(diploma.val())) {
                    diploma.val(100);
                }

                if ($('input[name="kirikOBP"]:checked').val() !== undefined) {
                    var diplomap = (Number(diploma.val()) * 0.6) / 2;
                }
                else {
                    var diplomap = (Number(diploma.val()) * 0.6);
                }

                limit(tyt_m_d, tyt_m_y, 40);
                limit(tyt_t_d, tyt_t_y, 40);
                limit(tyt_s_d, tyt_s_y, 20);
                limit(tyt_f_d, tyt_f_y, 20);

                tyt_m_n.val(tyt_m_d.val() - (tyt_m_y.val() / 4));
                tyt_t_n.val(tyt_t_d.val() - (tyt_t_y.val() / 4));
                tyt_s_n.val(tyt_s_d.val() - (tyt_s_y.val() / 4));
                tyt_f_n.val(tyt_f_d.val() - (tyt_f_y.val() / 4));

                tum_net = (tyt_t_n.val()) + (tyt_m_n.val()) + (tyt_s_n.val()) + (tyt_f_n.val());
                var tum_net = 0.00, tyt = 0.0;
                if (tyt_m_d.val() >= 0.5 || tyt_t_d.val() >= 0.5) {
                    tyt = (tyt_t_n.val() * 3.3) + (tyt_m_n.val() * 3.3) + (tyt_s_n.val() * 3.4) + (tyt_f_n.val() * 3.4) + 100;


                    tyt_y = parseFloat(tyt) + parseFloat(diplomap);

                    var tytUzun = String(tyt).length;
                    if (tytUzun => 8) {
                        tyt = String(tyt).substring(0, 7);
                    }
                    var tytYer = parseFloat(tyt) + parseFloat(diplomap);
                    var tytYerUzun = String(tytYer).length;
                    if (tytYerUzun => 8) {
                        tytYer = String(tytYer).substring(0, 7);
                    }
                    tyt_ham.val(tyt)
                    tyt_yer.val(tyt_y);

                }
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
