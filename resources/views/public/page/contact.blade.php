@extends('public.welcome')

@section('public.seo')
<title>BD Akademi | İletişim</title>
@endsection
@section('public.content')


        <a href="https://api.whatsapp.com/send?phone=905433121837&text=Merhaba%0AFiyat%0ABilgisi%0AAlacaktım." class="float"
        target="_blank">
        <i class="fa fa-whatsapp my-float"> Whatsapp</i>
    </a>
        <section style="background-image: url(/public/img/arkaplan.png);" class="pb-5" id="mobil">
            <div class="container mt-5 mb-5">
                <div class="row">
                    <div class="col-md-4 mt-5 " style="line-height: 50px;">
                        <h5 class="mb-3"><b>İletişim</b></h5>
                        <i class="fa fa-map-marker" aria-hidden="true" style="font-size: 19px; color: #88e25f;"><a
                                style="color: rgb(64, 65, 62);"> İnönü Mah. Ovacık Sok. No:1/1 <br>
                                Sancaktepe-İstanbul</a></i><br>
                        <i class="fa fa-phone" aria-hidden="true" style="font-size: 19px; color:#88e25f ;"><a
                                style="color: rgb(64, 65, 62);"> 0111 111 11 11</a></i><br>
                        <i class="fa fa-envelope-o" aria-hidden="true" style="font-size: 19px; color:#88e25f ;"><a
                                style="color: rgb(64, 65, 62);"> info@bdakademi.com</a></i><br>
                        <div class="mt-5" style="line-height:80px">
                            <h5><b>Sosyal Medya </b></h5>
                            <div class="row" style="width: 70%;">
                                <div class="col-md-2 col-2"><i class="fa fa-facebook"
                                        style="font-size: 25px; color: gray;"></i>
                                </div>
                                <div class="col-md-2 col-2"><a href="https://www.instagram.com/bdakademi.tr/"><i class="fa fa-instagram"
                                        style="font-size: 25px; color: gray;"></i></a>
                                </div>
                                <div class="col-md-2 col-2"><a href="https://twitter.com/bdakademi_tr"><i class="fa fa-twitter"
                                        style="font-size: 25px; color: gray;"></i></a>
                                </div>
                                <div class="col-md-2 col-2"><a href="https://www.linkedin.com/in/bd-akademi-416a21209/"><i class="fa fa-linkedin"
                                        style="font-size: 25px; color: gray;"></i></a>
                                </div>
                              
                                <div class="col-md-2 col-2"><a href="https://www.youtube.com/channel/UCIeeWbSkcuNEWn4640gk8-w"><i class="fa fa-youtube-play"
                                        style="font-size: 25px; color: gray;"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-7">
                        <h3 style="color: #88e25f;text-align: center;"><b>Bize Ulaşın</b></h3>
                        <div class="row">
                            <div class="col-md-12">

                                <table style="width: 100%;color: #424040;" class="mt-3">
                                    <tr>
                                        <td style="width: 4%;"><i style="font-size: 22px;" class="fa fa-user "></i>
                                        </td>
                                        <td class="mb-5" style="width: 96%;"><input
                                                style="border-radius:15px;border-color:rgb(199, 193, 193);width: 100%; height: 35px;"
                                                type="text" placeholder="Adınız Soyadınız"></td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                    <tr>
                                        <td><i style="font-size: 22px;" class="fa fa-envelope"></i></td>
                                        <td><input
                                                style="border-radius:15px;border-color:rgb(199, 193, 193);width: 100%; height: 35px;"
                                                type="email" placeholder="E Mail">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                    <tr>
                                        <td><i style="font-size: 22px;" class="fa fa-pencil-square-o"></i></td>
                                        <td><input
                                                style="border-radius:15px;border-color:rgb(199, 193, 193);width: 100%; height: 35px;"
                                                type="text" placeholder="Konu">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 20px;"></td>
                                        <td style="height: 20px;"></td>
                                    </tr>
                                    <tr>
                                        <td><i style="font-size: 22px;" class="fa fa-comments-o"></i></td>
                                        <td><textarea id="subject" name="subject" placeholder="Mesajınız"
                                                style="border-radius:15px;border-color:rgb(199, 193, 193);height:50px ;width:100%"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input
                                                style="border-radius:15px;border-color:rgb(199, 193, 193);float: left; height: 20px; width: 20px;"
                                                type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                        </td>
                                        <td>
                                            <label style=" padding-top:2%;  color: rgb(48, 43, 43); font-size: 12px;"
                                                for="vehicle3">&nbsp;Bu formla toplanan bilgilerin talebimi işleme
                                                koymak için bir
                                                veri tabanında saklanacağını kabul ediyorum..</label>
                                        </td>
                                    </tr>

                                </table> <a style=" color: rgb(48, 43, 43); font-size: 12px;">“Genel Veri Koruma
                                    Yönetmeliği” uyarınca, verilerinize erişim hakkınızı kullanabilir ve iletişim formu
                                    aracılığıyla
                                    düzeltilmesini sağlayabilirsiniz..</a><br><br>
                                <center> <button class="btn btn-success"
                                        style="padding:2%;padding-left:3%;padding-right:3%;border-radius: 45%;font-size: 20px;"><b>GÖNDER</b></button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
        </section>


@endsection
