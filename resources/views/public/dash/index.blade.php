@extends('public.welcome')

@section('public.seo')
<title>BD Akademi | Anasayfa</title>
@endsection
@section('public.content')

@if(session('success_comment'))
<div class="alert alert-success" role="alert" style="width:100%">
    Yorum gönderim işlemi başarılı bir şekilde gerçekleştirildi.
</div>
@endif

<section style="background-image: url(/public/img/arkaplan1.png);">
    <div class="container mt-3 mb-5">
        <div class="row anasayfa">
            <div class="col-md-7  col-lg-6 col-12 text-left text-md-start">
                <h4 class="mt-5" style="font-family: 'Montserrat';font-size: 40px; text-align: left;"><b>Ne
                        Öğrenmek <br>
                        İstiyorsun?</b>
                </h4>
                <p class="mt-3 mb-4" style="font-family: 'Montserrat bold';font-size: 22px; text-align: left;">
                    Sizin için doğru
                    eğitimi bulalım</p>
                <div class="search-box">
                    <input type="text" placeholder=" " /><span></span>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->

</section>
<section id="sayac">
    <center>
        <div id="countdown_container" style="background-image: url(/public/img/takvim.png);background-repeat: no-repeat;width: 100%;">
            <div id="countdown_timer"></div>
            <div style="clear:both"></div>
        </div>
    </center>
    <script>
        var countDownDate = new Date("2021/06/26 08:00:53").getTime(); //geri sayılacak ileri zamanki bir tarihi milisaniye cinsinden elde ediyoruz
        var dayText = "Gün";
        var hourText = "Saat";
        var minuteText = "Dakika";
        var secondText = "Saniye";
        if (countDownDate) { //tarih var ise
            var x = setInterval(function() { //sayacı belirli aralıklarla yenile
                var now = new Date().getTime(); //şimdiki zamanı al
                var distance = countDownDate - now; //geri sayılacak tarih ile şimdiki tarih arasındaki zaman farkını al
                if (distance < 0) { //zaman farkı yok ise belirtilen zamanı geçti
                    clearInterval(x); //sayacı sil
                    $("#countdown_timer").html("Geri sayım yapılacak ileri bir tarih yoktur");
                } else { //zaman farkı var ise
                    //aradaki zaman farkını gün,saat,dakika,saniye olarak böl
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24)),

                        days = (days ? '<div><div>' + days + '</div><div>' + dayText + '</div></div>' : ''), //gun varsa gun degerini yaz
                        hours = (hours ? '<div><div>' + hours + '</div><div>' + hourText + '</div></div>' : ''), //saat varsa saat degerini yaz
                        minutes = (minutes ? '<div><div>' + minutes + '</div><div>' + minuteText + '</div></div>' : ''), //dakika varsa dakika degerini yaz
                        seconds = (seconds ? '<div><div>' + seconds + '</div><div>' + secondText + '</div></div>' : ''); //saniye varsa saniye degerini yaz
                    document.getElementById("countdown_timer").innerHTML = days + hours + minutes + seconds; //yazdır
                }
            }, 1000); //1 saniyede bir sayaç güncellenecek
        }

    </script>
</section>

<section>
    <section class="ftco-section ftco-counter img" id="section-counter">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><img src="/public/img/sayac1.png" alt=""></div>
                                    <span>Soru ve Videolu <br> Çözümleri</span>
                                    <strong class="number" data-number="225000">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><img src="/public/img/sayac2.png" alt=""></div>
                                    <span>Saat Ders <br> Anlatım Videosu</span>
                                    <strong class="number" data-number="1000">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><img src="/public/img/sayac3.png" alt=""></div>
                                    <span>Deneme Sınavı<br>
                                        (15 TYT + 15 AYT)</span>
                                    <strong class="number" data-number="25">0</strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center">
                                <div class="text">
                                    <div class="icon"><img src="/public/img/sayac4.png" alt=""></div>
                                    <span>Soru Bankası <br> ve Konu Anlatım Kitabı
                                    </span>
                                    <strong class="number" data-number="50">0</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>

<section class="mt-1">

    <div class="row">
        <div class="col-12">
            <center>
                <h2 class="text-center anabaslik" style="border-bottom: #8AC26E solid;">
                    B<em>D</em> Akademi’de Neler Var?
                </h2>
            </center>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-6 col-xl-6 mt-3">
                <img src="/public/img/main1.png" alt="">
                <h3>Sana ve Hedefine Özel Çalışma
                    Programı</h3>
                <p>BD Akademi sana, gün gün neyi, ne kadar çalışman gerektiğini bildiren,
                    eksiklerini tamamlamanı sağlayan, kişiselleştirilmiş bir çalışma
                    planı hazırlar. Böylece, üniversite sınavına kadar tüm zamanını
                    en verimli şekilde değerlendirirsin.
                </p>
                <a href="paketler.html"><em>Detaylı Bilgi</em></a>
            </div>
            <div class="col-12 col-md-6 col-xl-6 mt-3">
                <img src="/public/img/main5.png" alt="">
                <h3>Toplamda 1000 Saati Aşan Ders
                    Anlatım Videoları</h3>
                <p>Detaylı konu anlatım videoları, Türkiye’nin, üniversiteye hazırlıkta
                    en deneyimli hocalarını odana kadar getirir. Bd Akademi, özel ders
                    niteliğindeki bu videolardan yalnızca senin izlemen gerekenleri
                    karşına çıkararak, kısa zamanda etkili ve kalıcı öğrenmeni sağlar.
                </p>
                <a href="paketler.html"><em>Detaylı Bilgi</em></a>
            </div>
            <div class="col-12 col-md-6 col-xl-6 mt-3">
                <img src="/public/img/main2.png" alt="">
                <h3>Tüm Soruların Videolu Çözümleri</h3>
                <p>BD Akademi tüm soruların çözüm videolarını sunan tek üründür! Gerek
                    dijital testlerdeki gerekse basılı testlerdeki tüm soruların videolu
                    çözümlerine hemen ulaşır, hiç beklemeden, anında istediğin sorunun
                    çözümünü izleyebilirsin. Böylece, sınavda çıkabilecek tüm soru
                    tiplerine ve çözüm yollarına hâkim olursun.</p>
                <a href="paketler.html"><em>Detaylı Bilgi</em></a>
            </div>
            <div class="col-12 col-md-6 col-xl-6 mt-3">
                <img src="/public/img/main3.png" alt="">
                <h3>Gerçek Sınav Deneyimi Yaşatan
                    Deneme Sınavlar</h3>
                <p>Türkiye genelinde on binlerce adayın katılımıyla gerçekleştirilen
                    ve merkezi sınavla birebir uyumlu olan Bd Akademi Deneme Sınavları,
                    hedefine ne kadar yakınlaştığın bilgisini verir. YKS deneme sınavları
                    sana, gerektiğinde hedefini yenileme ve yeni hedefine göre çalışma
                    fırsatı tanır.</p>
                <a href="paketler.html"><em>Detaylı Bilgi</em></a>
            </div>
            <div class="col-12 col-md-6 col-xl-6 mt-3">
                <img src="/public/img/main4.png" alt="">
                <h3>Üniversiteye Hazırlık için Gereken Her
                    Şey Tek Çözümde
                </h3>
                <p>Türkiye genelinde on binlerce adayın katılımıyla gerçekleştirilen
                    ve merkezi sınavla birebir uyumlu olan Bd Akademi Deneme Sınavları,
                    hedefine ne kadar yakınlaştığın bilgisini verir. YKS deneme sınavları
                    sana, gerektiğinde hedefini yenileme ve yeni hedefine göre çalışma
                    fırsatı tanır.</p>
                <a href="paketler.html"><em>Detaylı Bilgi</em></a>
            </div>
        </div>
    </div>


</section>
<section>
    <h3 class="text-center mt-5" style="color: #363636; font-size:35px  ;">
        <b>Örnek Videolar</b>
    </h3>
    <div class="container pb-video-container text*center">
        <div class="col-md-12 col-md-offset-1">
            <div class="row pb-row mb-5">
                <div class="col-md-4 pb-video">
                    <video width="360" height="320" controls="controls">
                        <source src="/public/img/video.mp4" type="video/mp4" />
                        Tarayıcınız video etiketini desteklemiyor.
                    </video>
                    <label class="form-control label-warning text-center">AYT</label>
                </div>
                <div class="col-md-4 pb-video">
                    <video width="360" height="320" controls="controls">
                        <source src="/public/img/video.mp4" type="video/mp4" />
                        Tarayıcınız video etiketini desteklemiyor.
                    </video>
                    <label class="form-control label-warning text-center">TYT</label>
                </div>

                <div class="col-md-4 pb-video">
                    <video width="360" height="320" controls="controls">
                        <source src="/public/img/video.mp4" type="video/mp4" />
                        Tarayıcınız video etiketini desteklemiyor.
                    </video>
                    <label class="form-control label-warning text-center">9. Sınıf</label>
                </div>

            </div>
            <div class="text-right" style="margin-top:-4%">
                <a href="ornekvideo.html"> Tümünü Gör</a>
            </div>
        </div>

    </div>
</section>
<section>
    <div class="mt-5">
        <center>
            <h3 class="text-center mb-3" style="color: #363636; font-size:35px  ;">
                <b> Eğitim Paketlerimiz</b>
            </h3>
        </center>
        <div style="background-image: url(/public/img/paket.png);padding:4%">
            <div class="container">
                <div class="row">



                    @foreach($educationpacket as $educationpacketkey)


                    <div class="col-md-4 mb-5">
                        <center><a href="lgs.html"><img style="width:90%; text-align: center;" src="/public/img/{{ $educationpacketkey->url }}" alt=""></a></center>
                        <center>
                            <button href="{{ route('packetbuy_get',[$educationpacketkey->menu_slug,$educationpacketkey->order]) }}" style="width: 86%;background-color: #ffffff;border:none;padding:3%; color: rgb(0, 0, 0);">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="row">
                                            <div class="col-md-2 col-2"><i style="font-size: 25px; color: #789689;" class="fa fa-shopping-basket"></i>
                                            </div>
                                            <div class="col-md-7 col-7"><a href="{{ route('packetbuy_get',[$educationpacketkey->menu_slug,$educationpacketkey->order]) }}" style="color:rgb(0, 0, 0);font-size: 13px;"><b> HEMEN
                                                        SATIN AL</b></a></div>
                                            <div class="col-md-3 col-3" style="font-size: 13px;"><b>{{ $educationpacketkey->packet_price }}₺</b></div>
                                        </div>

                                    </div>
                                </div>
                            </button>
                        </center>
                    </div>

                    @endforeach

                    <div class="col-md-12 mb-5">
                        <a href="/paketler">
                            <p style="color: white;font-size: 18px; text-align: right;"> Tümünü Gör <i class="fa fa-angle-right" aria-hidden="true"></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background-color: #B9DDA8; padding: 5%;" class="mt-5">
    <div class="">
        <div class="row">
            <div class="col-md-3">
                <a href="/lgs-puan-hesaplama"><img style="width:95%" src="/public/img/hesap1.png" alt=""></a>
            </div>
            <div class="col-md-3">
                <a href="/ayt-puan-hesaplama"><img style="width:95%" src="/public/img/hesap2.png" alt=""></a>
            </div>
            <div class="col-md-3">
                <a href="/dgs-puan-hesaplama"><img style="width:95%" src="/public/img/hesap3.png" alt=""></a>
            </div>
            <div class="col-md-3">
                <a href="/tyt-puan-hesaplama"><img style="width:95%" src="/public/img/hesap4.png" alt=""></a>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mb-5 mt-5">
            <div class="col-md-6 mt-3 mb-3">
                <img style="width: 8%;" src="/public/img/icon1.png" alt="">
                <h5 class="mt-3 mb-3"><b>7/24 Canlı Destek</b></h5>
                <p>Türkiye’de yalnızca <u> bdakademi.com</u>’da
                    Bulabileceğiniz 7 gün 24 saat canlı destek özelliği
                    İle ihtiyaç ve isteklerinize günün her saati cevap vermek
                    İçin çalışıyoruz. Sınırları Kaldıran Online Dershane BD Akademi,
                    Dilediğiniz Her An Bir Tık Yakınınızda!
                </p>
            </div>
            <div class="col-md-6 mt-3 mb-3">
                <img style="width: 30%;" src="/public/img/icon4.png" alt="">
                <h5 class="mt-3 mb-3"><b>Tüm Cihazlara Uyumlu Online Ders</b></h5>
                <p>Online ders kaynaklarımızın tamamı bilgisayar, laptop,
                    Mobil cihazlar, Akıllı Telefonlar, Akıllı Televizyonlar vb. İnternet erişimi olan
                    tüm cihazlar İle tamamen uyumludur. Evde, işte, seyahatte, dilediğiniz
                    zaman dilediğiniz yerde Online Dershane ile Kazanın!
                </p>
            </div>
            <div class="col-md-6 mt-3 mb-3">
                <img style="width: 8%;" src="/public/img/icon2.png" alt="">
                <h5 class="mt-3 mb-3"><b>7/24 Canlı Destek</b></h5>
                <p>Yalnızca BD Akademi’de bulabileceğiniz “Kazanma Garantisi”
                    Uygulamasıyla her sınav dönemi için tekrar tekrar ücret ödeminize
                    Gerek kalmadan Online Eğitim hizmeti almaya devam edebilirsiniz.
                </p>
            </div>
            <div class="col-md-6 mt-3 mb-3">
                <img style="width: 10%;" src="/public/img/icon3.png" alt="">
                <h5 class="mt-3 mb-3"><b>7/24 Canlı Destek</b></h5>
                <p>Online Kurs programlarına ücretsiz sistem üyeliği yapıp konuk olarak katılabilirsiniz.
                    Ücretsiz üyelik ile Online Eğitim içeriklerimizin kısıtlı bir bölümünü değil,
                    İlgilendiğiniz sınav alanına ait Online Kurs kaynaklarının tamamını ücretsiz
                    inceleyebilirsiniz. Ücretsiz deneme süreniz tamamlandıktan sonra satın almak
                    istediğiniz koşulda tarafınızdan Herhangi bir şekilde ücret talep edilmesi kesinlikle
                    söz konusu değildir. Online ders Ayrıcalıklarını ücretsiz deneme şansını kaçırmayın!
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row ">
            <div class="col-md-4 col-12">
                <img style="width: 90%;" src="/public/img/adam.png" alt="">
            </div>
            <div class="col-md-4 col-12">
                <h2 class="mt-5">
                    <b>Öğrenciler</b>
                </h2>
                <h2 class="mt-3" style="color: #B9DDA8;">
                    <b> BD Akademi’yi</b>
                </h2>
                <h2 class="mt-3">
                    <b> Yorumluyor</b>
                </h2>
            </div>
        </div>

        <div class="row" style="margin-top:80px;margin-bottom:80px">


            <div class="col-md-6" style="margin-top:20px">

                <div class="db-comment-box">
                    <form action="{{ route('comment_post') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">İsim</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                            <small id="emailHelp" class="form-text text-muted">İsim bilgisi zorunlu alandır.</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Soyisim</label>
                            <input type="text" class="form-control @error('last') is-invalid @enderror" name="last">
                            <small id="emailHelp" class="form-text text-muted">Soyisim bilgisi zorunlu alandır.</small>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Yorum</label>
                            <textarea class="form-control @error('comment') is-invalid @enderror" name="comment"></textarea>
                            <small id="emailHelp" class="form-text text-muted">Yorum alanı zorunludur.</small>
                        </div>

                        <div class="form-group">
                            <div class="comment-buttton">
                                <button>Gönder</button>
                            </div>
                        </div>

                </div>


                </form>


            </div>



            <div class="col-md-6" style="margin-top:0px">
                <div class="row">
                    @foreach($commentlisting as $commentlistingkey)
                    <div class="col-md-6" style="margin-top:20px">
                        <div class="comment-list">
                            <p title="{{$commentlistingkey->comment }}">{{$commentlistingkey->comment }}</p>
                            <hr>
                            <span>{{ $commentlistingkey->name }} {{ $commentlistingkey->last }}</span>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltip.js/1.3.1/tooltip.min.js" integrity="sha512-ZAFwin0nQNXMJRo329TcU4ZyC+ZgKbnaopq/LH/6j7n9zT7ZVLK5BiSmnqgx7jNiewVLgc04geoE62cNN1D8VQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tooltip.js/1.3.1/tooltip.js" integrity="sha512-hCZ6qqx735npS7Y2pM1W0Z/igWLqqDNbZ/f9V9+PMW3FsMMygPxJhK2vHmtcDrk/Zuhq/KHErl+S6jakPLcOIw==" crossorigin="anonymous"></script>
        <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-tooltip.js"></script>

    </div>
</section>

@endsection
