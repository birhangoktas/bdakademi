 @extends('public.welcome')

 @section('public.seo')
 <title>BD Akademi | LGS Puan Hesaplama</title>
 @endsection
 @section('public.content')

 <div class="bg-color grey">
     <div class="container">
         <div class="container contact ">
             <form action="" name="f1" id="f1" class="phesap" onreset="">
                 <div class="row point-calculator">
                     <div class="col-md-4 col-xs-12 point-mobile-row mb-5">
                         <div class="col-md-12 col-xs-12 point-title">
                             <h4>Türkçe</h4>
                             <span>(20 Soru)</span><br><br>
                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label>Doğru</label>
                             <input type="text" name="tur_dogru" min="0" max="20" step="1" pattern="[0-9]" class="form-control ders_dogru">

                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label>Yanlış</label>
                             <input type="text" name="tur_yanlis" min="0" max="20" step="1" pattern="[0-9]" class="form-control ders_yanlis">

                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label class="">Net</label>
                             <input type="text" name="tur_net" min="0" max="20" step="1" pattern="[0-9]" class="form-control ders_net" disabled>

                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 point-mobile-row mb-5">
                         <div class="col-md-12 col-xs-12 point-title">
                             <h4>TC İnkılap Tarihi ve Atatürkçülük</h4>
                             <span>(10 Soru)</span>
                         </div>
                         <div class="col-md-12 col-xs-4 point-row"><label>Doğru</label>
                             <input type="text" name="ink_dogru" min="0" max="10" step="1" pattern="[0-9]" class="form-control ders_dogru">

                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label>Yanlış</label>
                             <input type="text" name="ink_yanlis" min="0" max="10" step="1" pattern="[0-9]" class="form-control ders_yanlis">

                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label class="">Net</label>
                             <input type="text" name="ink_net" min="0" max="10" step="1" pattern="[0-9]" class="form-control ders_net" disabled>

                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 point-mobile-row mb-5">
                         <div class="col-md-12 col-xs-12 point-title">
                             <h4>Din Kültürü ve Ahlak Bilgisi</h4>
                             <span>(10 Soru)</span>
                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label>Doğru</label>
                             <input type="text" name="din_dogru" min="0" max="10" step="1" pattern="[0-9]" class="form-control ders_dogru">

                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label>Yanlış</label>
                             <input type="text" name="din_yanlis" min="0" max="10" step="1" pattern="[0-9]" class="form-control ders_yanlis">

                         </div>
                         <div class="col-md-12 col-xs-4 point-row"><label class="">Net</label>
                             <input type="text" name="din_net" min="0" max="10" step="1" pattern="[0-9]" class="form-control ders_net" disabled>

                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 point-mobile-row mb-5">
                         <div class="col-md-12 col-xs-12 point-title">
                             <h4>Yabancı Dil</h4>
                             <span>(10 Soru)</span>
                         </div>
                         <div class="col-md-12 col-xs-4 point-row"><label>Doğru</label>
                             <input type="text" name="ing_dogru" min="0" max="10" step="1" pattern="[0-9]" class="form-control ders_dogru">

                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label>Yanlış</label>
                             <input type="text" name="ing_yanlis" min="0" max="10" step="1" pattern="[0-9]" class="form-control ders_yanlis">

                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label class="">Net</label>
                             <input type="text" name="ing_net" min="0" max="10" step="1" pattern="[0-9]" class="form-control ders_net" disabled>

                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 point-mobile-row mb-5">
                         <div class="col-md-12 col-xs-12 point-title">
                             <h4>Matematik</h4>
                             <span>(20 Soru)</span>
                         </div>
                         <div class="col-md-12 col-xs-4 point-row"><label>Doğru</label>
                             <input type="text" name="mat_dogru" min="0" max="20" step="1" pattern="[0-9]" class="form-control ders_dogru">

                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label>Yanlış</label>
                             <input type="text" name="mat_yanlis" min="0" max="20" step="1" pattern="[0-9]" class="form-control ders_yanlis">

                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label class="">Net</label>
                             <input type="text" name="mat_net" min="0" max="20" step="1" pattern="[0-9]" class="form-control ders_net" disabled>
                         </div>
                     </div>
                     <div class="col-md-4 col-xs-12 point-mobile-row mb-5">
                         <div class="col-md-12 col-xs-12 point-title">
                             <h4>Fen ve Teknoloji </h4>
                             <span>(20 Soru)</span>
                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label>Doğru</label>
                             <input type="text" name="fen_dogru" min="0" max="20" step="1" pattern="[0-9]" class="form-control ders_dogru">

                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label>Yanlış</label>
                             <input type="text" name="fen_yanlis" min="0" max="20" step="1" pattern="[0-9]" class="form-control ders_yanlis">

                         </div>
                         <div class="col-md-12 col-xs-4 point-row"> <label class="">Net</label>
                             <input type="text" name="fen_net" min="0" max="20" step="1" pattern="[0-9]" class="form-control ders_net" disabled>

                         </div>
                     </div>
                 </div>
                 <div class="row ">



                     <div class="col-md-12 alert alert-success total-point clearfix">
                         <div class="label-on-input active">
                             <input type="text" class="form-control" readonly="" name="lgs_puani" id="lgs_puani" size="7" placeholder="0" disabled>
                             <label>LGS Puanı</label>
                         </div>
                     </div>
                 </div>









             </form>
         </div>



     </div>
 </div>


 <script language="javascript">
     document.onkeypress = function(event) {
         event = (event || window.event);
         if (event.keyCode == 123) {
             return false;
         }
     };
     document.onmousedown = function(event) {
         event = (event || window.event);
         if (event.keyCode == 123) {
             return false;
         }
     };
     document.onkeydown = function(event) {
         event = (event || window.event);
         if (event.keyCode == 123) {
             return false;
         }
     };
     document.onkeydown = function(e) {
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
         var lgs_t_d = $('input[name="tur_dogru"]');
         var lgs_i_d = $('input[name="ink_dogru"]');
         var lgs_din_d = $('input[name="din_dogru"]');
         var lgs_yd_d = $('input[name="ing_dogru"]');
         var lgs_m_d = $('input[name="mat_dogru"]');
         var lgs_f_d = $('input[name="fen_dogru"]');

         var lgs_t_y = $('input[name="tur_yanlis"]');
         var lgs_i_y = $('input[name="ink_yanlis"]');
         var lgs_din_y = $('input[name="din_yanlis"]');
         var lgs_yd_y = $('input[name="ing_yanlis"]');
         var lgs_m_y = $('input[name="mat_yanlis"]');
         var lgs_f_y = $('input[name="fen_yanlis"]');


         var lgs_t_n = $('input[name="tur_net"]');
         var lgs_i_n = $('input[name="ink_net"]');
         var lgs_din_n = $('input[name="din_net"]');
         var lgs_yd_n = $('input[name="ing_net"]');
         var lgs_m_n = $('input[name="mat_net"]');
         var lgs_f_n = $('input[name="fen_net"]');

         var lgs_puani = $('input[name="lgs_puani"]');

         limit(lgs_t_d, lgs_t_y, 20);
         limit(lgs_m_d, lgs_m_y, 20);
         limit(lgs_f_d, lgs_f_y, 20);

         limit(lgs_i_d, lgs_i_y, 10);
         limit(lgs_din_d, lgs_din_y, 10);
         limit(lgs_yd_d, lgs_yd_y, 10);

         topPuan = 0.0;

         if (lgs_t_d.val() >= 0.5 || lgs_m_d.val() >= 0.5) {

             lgs_t_n.val(lgs_t_d.val() - (lgs_t_y.val() * 0.33));
             lgs_i_n.val(lgs_i_d.val() - (lgs_i_y.val() * 0.33));
             lgs_din_n.val(lgs_din_d.val() - (lgs_din_y.val() * 0.33));
             lgs_yd_n.val(lgs_yd_d.val() - (lgs_yd_y.val() * 0.33));
             lgs_m_n.val(lgs_m_d.val() - (lgs_m_y.val() * 0.33));
             lgs_f_n.val(lgs_f_d.val() - (lgs_f_y.val() * 0.33));


             turPuan = (((((lgs_t_n.val() - 7.92) / 5.4022) * 10) + 50) * 4);
             matPuan = (((((lgs_m_n.val() - 2.68) / 3.6570) * 10) + 50) * 4);
             fenPuan = (((((lgs_f_n.val() - 3.83) / 4.3040) * 10) + 50) * 4);
             inkPuan = (((((lgs_i_n.val() - 3.96) / 2.7011) * 10) + 50) * 1);
             ingPuan = (((((lgs_yd_n.val() - 3.28) / 2.5870) * 10) + 50) * 1);
             dinPuan = (((((lgs_din_n.val() - 3.28) / 2.5870) * 10) + 50) * 1);

             topPuan = 100 + (400 * ((turPuan + matPuan + fenPuan + inkPuan + ingPuan + dinPuan) - 379.33)) / (1253.483 - 379.33);

         }

         lgs_puani.val(parseFloat(topPuan).toFixed(3));

     }

     $('input').on('keyup', function() {
         hesapla();
     });
     $('input').on('click', function() {
         hesapla();
     });
     $('input').click(
         function() {
             $(this).val('');
         });

 </script>


 @endsection
