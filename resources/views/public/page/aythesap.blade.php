@extends('public.welcome')

@section('public.seo')
<title>BD Akademi | AYT Puan Hesaplama</title>
@endsection
@section('public.content')

     <div class="bg-color grey">
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 ">
                        <div class="container contact ">
                            <form action="#" name="f1" id="f1" class="phesap" onreset="">
                                <div class="row alert alert-warning" style="margin-right:0;margin-left:0;">
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
                                                <b> Daha Önce Bir Bölüme Yerleştim </b> </i></label>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="row text-center visible-xs">
                                </div>
                                <div class="row point-calculator mt-5 mb-5" >
                                    <div class="col-md-3 col-xs-12 point-mobile-row">
                                        <div class="col-md-12 col-xs-12 point-title">
                                            <h4>Türkçe</h4>
                                            <span>(40 Soru)</span>
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Doğru</label>
                                            <input type="tel" class="form-control" name="tyt-t-d" id="tyt-t-d"
                                                onkeyup="hesapla()" />
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Yanlış</label>
                                            <input type="tel" class="form-control" name="tyt-t-y" id="tyt-t-y"
                                                onkeyup="hesapla()" />

                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Net</label>
                                            <input type="tel" class="form-control active" name="tyt-t-n" id="tyt-t-n"
                                                onkeyup="hesapla()" disabled />

                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12 point-mobile-row">
                                        <div class="col-md-12 col-xs-12 point-title">
                                            <h4><span class="hidden-xs">Temel</span><span
                                                    class="visible-xs-inline">T.</span> Matematik</h4>
                                            <span>(40 Soru)</span>
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Doğru</label>
                                            <input type="tel" class="form-control" name="tyt-m-d" id="tyt-m-d"
                                                onkeyup="hesapla()" />
                                           
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"><label>Yanlış</label>
                                            <input type="tel" class="form-control" name="tyt-m-y" id="tyt-m-y"
                                                onkeyup="hesapla()" />
                                            
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Net</label>
                                            <input type="tel" class="form-control active" name="tyt-m-n" id="tyt-m-n"
                                                onkeyup="hesapla()" disabled />
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12 point-mobile-row">
                                        <div class="col-md-12 col-xs-12 point-title">
                                            <h4>Sosyal <span class="hidden-xs">Bilimler</span></h4>
                                            <span>(20 Soru)</span>
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Doğru</label>
                                            <input type="tel" class="form-control" name="tyt-s-d" id="tyt-s-d"
                                                onkeyup="hesapla()" />
                                           
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Yanlış</label>
                                            <input type="tel" class="form-control" name="tyt-s-y" id="tyt-s-y"
                                                onkeyup="hesapla()" />
                                           
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"><label>Net</label>
                                            <input type="tel" class="form-control active" name="tyt-s-n" id="tyt-s-n"
                                                onkeyup="hesapla()" disabled />
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-xs-12 point-mobile-row">
                                        <div class="col-md-12  col-xs-12 point-title">
                                            <h4>Fen <span class="hidden-xs">Bilimleri</span></h4>
                                            <span>(20 Soru)</span>
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Doğru</label>
                                            <input type="tel" class="form-control" name="tyt-f-d" id="tyt-f-d"
                                                onkeyup="hesapla()" />
                                           
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"><label>Yanlış</label>
                                            <input type="tel" class="form-control" name="tyt-f-y" id="tyt-f-y"
                                                onkeyup="hesapla()" />
                                            
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row">  <label>Net</label>
                                            <input type="tel" class="form-control active" name="tyt-f-n" id="tyt-f-n"
                                                onkeyup="hesapla()" disabled />
                                          
                                        </div>
                                    </div>
                                </div>

                                <div class="row point-calculator big-title mt-5 mb-5">
                                    <div class="col-md-5-1 col-12 col-xs-12 point-mobile-row">
                                        <div class="col-md-12 col-xs-12 point-title" style="height: 130px; padding:10%">
                                            <h4>Matematik</h4>
                                            <span>(40 Soru)</span>
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row">  <label>Doğru</label>
                                            <input type="tel" class="form-control" name="yks-m-d" id="yks-m-d"
                                                onkeyup="hesapla()" />
                                          
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Yanlış</label>
                                            <input type="tel" class="form-control" name="yks-m-y" id="yks-m-y"
                                                onkeyup="hesapla()" />
                                           
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Net</label>
                                            <input type="tel" class="form-control active" name="yks-m-n" id="yks-m-n"
                                                onkeyup="hesapla()" disabled />
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-5-1 col-12 col-xs-12 point-mobile-row">
                                        <div class="col-md-12 col-xs-12 point-title" style="height: 130px;  padding:10%">
                                            <h4>Fen <span class="hidden-xs">Bilimleri</span><span
                                                    class="visible-xs-inline"></span></h4>
                                            <span>(40 Soru)</span>
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row">   <label>Doğru</label>
                                            <input type="tel" class="form-control" name="yks-f-d" id="yks-f-d"
                                                onkeyup="hesapla()" />
                                         
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"><label>Yanlış</label>
                                            <input type="tel" class="form-control" name="yks-f-y" id="yks-f-y"
                                                onkeyup="hesapla()" />
                                            
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Net</label>
                                            <input type="tel" class="form-control active" name="yks-f-n" id="yks-f-n"
                                                onkeyup="hesapla()" disabled />
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-5-1 col-12 col-xs-12 point-mobile-row">
                                        <div class="col-md-12 col-xs-12 point-title" style="height: 130px;  padding:10%">
                                            <h4>Edebiyat <span class="hidden-xs">/ Sosyal Bilimler</span> I</h4>
                                            <span>(40 Soru)</span>
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Doğru</label>
                                            <input type="tel" class="form-control" name="yks-e-d" id="yks-e-d"
                                                onkeyup="hesapla()" />
                                           
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Yanlış</label>
                                            <input type="tel" class="form-control" name="yks-e-y" id="yks-e-y"
                                                onkeyup="hesapla()" />
                                           
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"><label>Net</label>
                                            <input type="tel" class="form-control active" name="yks-e-n" id="yks-e-n"
                                                onkeyup="hesapla()" disabled />
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-5-1 col-12 col-xs-12 point-mobile-row">
                                        <div class="col-md-12  col-xs-12 point-title" style="height: 130px; padding:10% ">
                                            <h4>Sosyal <span class="hidden-xs">Bilimler</span> II</h4>
                                            <span>(40 Soru)</span>
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"><label>Doğru</label>
                                            <input type="tel" class="form-control" name="yks-s-d" id="yks-s-d"
                                                onkeyup="hesapla()" />
                                            
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Yanlış</label>
                                            <input type="tel" class="form-control" name="yks-s-y" id="yks-s-y"
                                                onkeyup="hesapla()" />
                                           
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Net</label>
                                            <input type="tel" class="form-control active" name="yks-s-n" id="yks-s-n"
                                                onkeyup="hesapla()" disabled />
                                           
                                        </div>
                                    </div>
                                    <div class="col-md-5-1 col-12 col-xs-12 point-mobile-row">
                                        <div class="col-md-12  col-xs-12 point-title" style="height: 130px; padding:10%">
                                            <h4><span class="hidden-xs">Yabancı</span><span
                                                    class="visible-xs-inline"></span> Dil</h4>
                                            <span>(80 Soru)</span>
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"><label>Doğru</label>
                                            <input type="tel" class="form-control" name="yks-d-d" id="yks-d-d"
                                                onkeyup="hesapla()" />
                                            
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Yanlış</label>
                                            <input type="tel" class="form-control" name="yks-d-y" id="yks-d-y"
                                                onkeyup="hesapla()" />
                                           
                                        </div>
                                        <div class="col-md-12 col-xs-4 point-row"> <label>Net</label>
                                            <input type="tel" class="form-control active" name="yks-d-n" id="yks-d-n"
                                                onkeyup="hesapla()" disabled />
                                        </div>
                                    </div>
                                </div>


                                <div class="row" style="margin-right:0;margin-left:0;">
                                    <div class="col-md-6 alert alert-success total-point clearfix"
                                        style="margin-bottom:0">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="tyt-ham"
                                                id="tyt-ham" size="7" placeholder="0" style="margin-bottom:0;"
                                                disabled />
                                            <label>TYT Ham Puan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 alert alert-success total-point clearfix"
                                        style="margin-bottom:0">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="tyt-yer"
                                                id="tyt-yer" size="7" placeholder="0" style="margin-bottom:0;"
                                                disabled />
                                            <label>TYT Yerleştirme Puanı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 alert alert-success total-point clearfix"
                                        style="margin-bottom:0">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="yks-say-ham"
                                                id="yks-say-ham" size="7" placeholder="0" style="margin-bottom:0;"
                                                disabled />
                                            <label>Sayısal Ham Puanı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 alert alert-success total-point clearfix"
                                        style="margin-bottom:0">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="yks-say-yer"
                                                id="yks-say-yer" size="7" placeholder="0" style="margin-bottom:0;"
                                                disabled />
                                            <label>Sayısal Yerleştirme Puanı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 alert alert-success total-point clearfix"
                                        style="margin-bottom:0">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="yks-ea-ham"
                                                id="yks-ea-ham" size="7" placeholder="0" style="margin-bottom:0;"
                                                disabled />
                                            <label>Eşit Ağırlık Ham Puanı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 alert alert-success total-point clearfix"
                                        style="margin-bottom:0">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="yks-ea-yer"
                                                id="yks-ea-yer" size="7" placeholder="0" style="margin-bottom:0;"
                                                disabled />
                                            <label>Eşit Ağırlık Yerleştirme Puanı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 alert alert-success total-point clearfix"
                                        style="margin-bottom:0">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="yks-s-ham"
                                                id="yks-s-ham" size="7" placeholder="0" style="margin-bottom:0;"
                                                disabled />
                                            <label>Sözel Ham Puanı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 alert alert-success total-point clearfix"
                                        style="margin-bottom:0">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="yks-s-yer"
                                                id="yks-s-yer" size="7" placeholder="0" style="margin-bottom:0;"
                                                disabled />
                                            <label>Sözel Yerleştirme Puanı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 alert alert-success total-point clearfix"
                                        style="margin-bottom:0">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="yks-d-ham"
                                                id="yks-d-ham" size="7" placeholder="0" style="margin-bottom:0;"
                                                disabled />
                                            <label>Yabancı Dil Ham Puanı</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 alert alert-success total-point clearfix"
                                        style="margin-bottom:0">
                                        <div class="label-on-input active">
                                            <input type="text" class="form-control" readonly="" name="yks-d-yer"
                                                id="yks-d-yer" size="7" placeholder="0" style="margin-bottom:0;"
                                                disabled />
                                            <label>Yabancı Dil Yerleştirme Puanı</label>
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
                var yks_m_d = $('input[name="yks-m-d"]');
                var yks_f_d = $('input[name="yks-f-d"]');
                var yks_e_d = $('input[name="yks-e-d"]');
                var yks_s_d = $('input[name="yks-s-d"]');
                var yks_d_d = $('input[name="yks-d-d"]');
                var yks_m_y = $('input[name="yks-m-y"]');
                var yks_f_y = $('input[name="yks-f-y"]');
                var yks_e_y = $('input[name="yks-e-y"]');
                var yks_s_y = $('input[name="yks-s-y"]');
                var yks_d_y = $('input[name="yks-d-y"]');
                var yks_m_n = $('input[name="yks-m-n"]');
                var yks_f_n = $('input[name="yks-f-n"]');
                var yks_e_n = $('input[name="yks-e-n"]');
                var yks_s_n = $('input[name="yks-s-n"]');
                var yks_d_n = $('input[name="yks-d-n"]');
                var yks_say_ham = $('input[name="yks-say-ham"]');
                var yks_ea_ham = $('input[name="yks-ea-ham"]');
                var yks_s_ham = $('input[name="yks-s-ham"]');
                var yks_d_ham = $('input[name="yks-d-ham"]');
                var yks_say_yer = $('input[name="yks-say-yer"]');
                var yks_ea_yer = $('input[name="yks-ea-yer"]');
                var yks_s_yer = $('input[name="yks-s-yer"]');
                var yks_d_yer = $('input[name="yks-d-yer"]');
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
                limit(yks_m_d, yks_m_y, 40);
                limit(yks_f_d, yks_f_y, 40);
                limit(yks_e_d, yks_e_y, 40);
                limit(yks_s_d, yks_s_y, 40);
                limit(yks_d_d, yks_d_y, 80);
                tyt_m_n.val(tyt_m_d.val() - (tyt_m_y.val() / 4));
                tyt_t_n.val(tyt_t_d.val() - (tyt_t_y.val() / 4));
                tyt_s_n.val(tyt_s_d.val() - (tyt_s_y.val() / 4));
                tyt_f_n.val(tyt_f_d.val() - (tyt_f_y.val() / 4));
                yks_m_n.val(yks_m_d.val() - (yks_m_y.val() / 4));
                yks_f_n.val(yks_f_d.val() - (yks_f_y.val() / 4));
                yks_e_n.val(yks_e_d.val() - (yks_e_y.val() / 4));
                yks_s_n.val(yks_s_d.val() - (yks_s_y.val() / 4));
                yks_d_n.val(yks_d_d.val() - (yks_d_y.val() / 4));
                top_net = (tyt_t_n.val()) + (tyt_m_n.val()) + (tyt_s_n.val()) + (tyt_f_n.val());
                var tum_net = 0.00, tyt = 0.0, tm = 0.0, ts = 0.0, mf = 0.0, dil = 0.0, tyt_y = 0.0, tm_y = 0.0, ts_y = 0.0, mf_y = 0.0, dil_y = 0.0;
                if (tyt_m_d.val() >= 0.5 || tyt_t_d.val() >= 0.5) {
                    tyt = (tyt_t_n.val() * 3.3) + (tyt_m_n.val() * 3.3) + (tyt_s_n.val() * 3.4) + (tyt_f_n.val() * 3.4) + 100;
                    tm = (((tyt - 100) * 40) / 100) + ((((yks_e_n.val() * 5) + (yks_m_n.val() * 5)) * 60) / 100) + 100;
                    ts = (((tyt - 100) * 40) / 100) + ((((yks_e_n.val() * 5) + (yks_s_n.val() * 5)) * 60) / 100) + 100;
                    mf = (((tyt - 100) * 40) / 100) + ((((yks_f_n.val() * 5) + (yks_m_n.val() * 5)) * 60) / 100) + 100;
                    dil = (((tyt - 100) * 40) / 100) + (((((yks_d_n.val() * 5)) * 60) / 100)) + 100;

                    tyt_y = parseFloat(tyt) + parseFloat(diplomap);
                    tm_y = parseFloat(tm) + parseFloat(diplomap);
                    ts_y = parseFloat(ts) + parseFloat(diplomap);
                    mf_y = parseFloat(mf) + parseFloat(diplomap);
                    dil_y = parseFloat(dil) + parseFloat(diplomap);
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
                    yks_say_ham.val(mf)
                    yks_ea_ham.val(tm);
                    yks_s_ham.val(ts);
                    yks_d_ham.val(dil);
                    yks_say_yer.val(mf_y);
                    yks_ea_yer.val(tm_y);
                    yks_s_yer.val(ts_y);
                    yks_d_yer.val(dil_y);
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
