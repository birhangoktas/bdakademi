@extends('public.welcome')

@section('public.seo')
<title>BD Akademi | Anasayfa</title>
@endsection
@section('public.content')

<section>
    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>
-->
    <!-- Offcanvas Menu Begin -->


    @if(session('success_email'))


    <div class="container" style="margin:50px">
        <div class="row">
            <div class="col-md-6">
                <div class="mail-check-img">
                    <img src="/asset/img/undraw_mail_2_tqip.png" alt="Mail img">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mail-check-text">
                    <h1>Aramıza katılmak için son bir aşama kaldı</h1>
                    <div class="mail-check-hr"></div>
                    <p>Mailini onayla, aramıza katıl</p>
                    <span>
                    Türkiye’de yalnızca bdakademi.com’da Bulabileceğiniz 7 gün 24 saat canlı destek özelliği İle ihtiyaç ve isteklerinize günün her saati cevap vermek İçin çalışıyoruz. Sınırları Kaldıran Online Dershane BD Akademi, Dilediğiniz Her An Bir Tık Yakınınızda!
                    </span>
                </div>
            </div>
        </div>
    </div>





    @else
    <h2 id="baslik" style="text-align: center;">Üye Ol</h2>

    <section style="background-image: url(/public/img/arkaplan.png);">

        <div class="container">
            <div class="mt-3 mb-5" id="uyeol">
                @if(session('error_password'))
                <div class="alert alert-warning" role="alert" style="max-width:450px;margin-top:20px;margin-bottom:20px">
                    Şifreleriniz uyuşmuyor
                </div>
                @endif
                <form action="{{ route('signup_post') }}" method="post" style="margin-left: 15%;">
                    @csrf
                    <center>
                        <div class="row container" style="width:100%;">

                            <div class="col-md-6 mt-3">
                                <label for="lname" style="float: left;"><b>Adınız</b></label>
                                <input class="form-control @error('name') is-invalid @enderror" name="name" type="text" placeholder="Adınızı yazınız">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="lname" style="float: left;"><b>Soyadınız</b></label>
                                <input class="form-control @error('last') is-invalid @enderror" name="last" type="text" placeholder="Soyadınızı yazınız">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="lname" style="float: left;"><b>Cep Telefonunuz</b></label>
                                <input class="form-control @error('phone') is-invalid @enderror" name="phone" type="tel" placeholder="Telefonunuz">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="lname" style="float: left;"><b>E Posta</b></label>
                                <input class="form-control @error('email') is-invalid @enderror" name="email" type="text" placeholder="Dershane girişi için e-posta adresinizi yazınız">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="lname" style="float: left;"><b>Şehir</b></label>
                                <select class="form-control @error('city') is-invalid @enderror" name="city">
                                    <option value="0">Şehir Seçiniz</option>
                                    <option value="1">Adana</option>
                                    <option value="2">Adıyaman</option>
                                    <option value="3">Afyonkarahisar</option>
                                    <option value="4">Ağrı</option>
                                    <option value="5">Amasya</option>
                                    <option value="6">Ankara</option>
                                    <option value="7">Antalya</option>
                                    <option value="8">Artvin</option>
                                    <option value="9">Aydın</option>
                                    <option value="10">Balıkesir</option>
                                    <option value="11">Bilecik</option>
                                    <option value="12">Bingöl</option>
                                    <option value="13">Bitlis</option>
                                    <option value="14">Bolu</option>
                                    <option value="15">Burdur</option>
                                    <option value="16">Bursa</option>
                                    <option value="17">Çanakkale</option>
                                    <option value="18">Çankırı</option>
                                    <option value="19">Çorum</option>
                                    <option value="20">Denizli</option>
                                    <option value="21">Diyarbakır</option>
                                    <option value="22">Edirne</option>
                                    <option value="23">Elazığ</option>
                                    <option value="24">Erzincan</option>
                                    <option value="25">Erzurum</option>
                                    <option value="26">Eskişehir</option>
                                    <option value="27">Gaziantep</option>
                                    <option value="28">Giresun</option>
                                    <option value="29">Gümüşhane</option>
                                    <option value="30">Hakkâri</option>
                                    <option value="31">Hatay</option>
                                    <option value="32">Isparta</option>
                                    <option value="33">Mersin</option>
                                    <option value="34">İstanbul</option>
                                    <option value="35">İzmir</option>
                                    <option value="36">Kars</option>
                                    <option value="37">Kastamonu</option>
                                    <option value="38">Kayseri</option>
                                    <option value="39">Kırklareli</option>
                                    <option value="40">Kırşehir</option>
                                    <option value="41">Kocaeli</option>
                                    <option value="42">Konya</option>
                                    <option value="43">Kütahya</option>
                                    <option value="44">Malatya</option>
                                    <option value="45">Manisa</option>
                                    <option value="46">Kahramanmaraş</option>
                                    <option value="47">Mardin</option>
                                    <option value="48">Muğla</option>
                                    <option value="49">Muş</option>
                                    <option value="50">Nevşehir</option>
                                    <option value="51">Niğde</option>
                                    <option value="52">Ordu</option>
                                    <option value="53">Rize</option>
                                    <option value="54">Sakarya</option>
                                    <option value="55">Samsun</option>
                                    <option value="56">Siirt</option>
                                    <option value="57">Sinop</option>
                                    <option value="58">Sivas</option>
                                    <option value="59">Tekirdağ</option>
                                    <option value="60">Tokat</option>
                                    <option value="61">Trabzon</option>
                                    <option value="62">Tunceli</option>
                                    <option value="63">Şanlıurfa</option>
                                    <option value="64">Uşak</option>
                                    <option value="65">Van</option>
                                    <option value="66">Yozgat</option>
                                    <option value="67">Zonguldak</option>
                                    <option value="68">Aksaray</option>
                                    <option value="69">Bayburt</option>
                                    <option value="70">Karaman</option>
                                    <option value="71">Kırıkkale</option>
                                    <option value="72">Batman</option>
                                    <option value="73">Şırnak</option>
                                    <option value="74">Bartın</option>
                                    <option value="75">Ardahan</option>
                                    <option value="76">Iğdır</option>
                                    <option value="77">Yalova</option>
                                    <option value="78">Karabük</option>
                                    <option value="79">Kilis</option>
                                    <option value="80">Osmaniye</option>
                                    <option value="81">Düzce</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="lname" style="float: left;"><b>Adres</b></label>
                                <input class="form-control @error('address') is-invalid @enderror" name="address" type="text" placeholder="Adresinizi yazınız">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="lname" style="float: left;"><b>Şifre</b></label>
                                <input class="form-control @error('password') is-invalid @enderror" name="password" type="password" placeholder="Şifre oluşturunuz">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="lname" style="float: left;"><b>Şifre Tekrar</b></label>
                                <input class="form-control @error('password2') is-invalid @enderror" name="password2" type="password" placeholder="Şifrenizi Tekrar Yazınız">
                            </div>
                            <div class="col-md-6 mt-5">
                                <a href="" style="font-size: 18px; float: left;color: white;"><b>Eğitim
                                        Kategorileri</b></a><br><br>
                                <input style="float: left; height: 20px; width: 20px;" type="checkbox" id="vehicle3" name="yks" value="1">
                                <label style="float: left; color: white; font-size: 15px;" for="vehicle3">&nbsp;
                                    YKS</label><br><br>
                                <input style="float: left; height: 20px; width: 20px;" type="checkbox" id="vehicle3" name="ayt" value="1">
                                <label style="float: left; color: white; font-size: 15px;" for="vehicle3">&nbsp;
                                    AYT</label><br><br>
                                <input style="float: left; height: 20px; width: 20px;" type="checkbox" id="vehicle3" name="tyt" value="1">
                                <label style="float: left; color: white; font-size: 15px;" for="vehicle3">&nbsp;
                                    TYT</label>
                            </div>
                            <div class="col-md-6 mt-5">
                                <a href="" style="font-size: 18px; float: left;color: white;"><b> </b></a><br><br>
                                <input style="float: left; height: 20px; width: 20px;" type="checkbox" id="vehicle3" name="orta_ogretim" value="1">
                                <label style="float: left; color: white; font-size: 15px;" for="vehicle3">&nbsp;
                                    Ortaöğretim / Lise Destek</label><br><br>
                                <input style="float: left; height: 20px; width: 20px;" type="checkbox" id="vehicle3" name="orta_okul" value="1">
                                <label style="float: left; color: white; font-size: 15px;" for="vehicle3">&nbsp;
                                    Ortaokul</label><br><br>
                                <input style="float: left; height: 20px; width: 20px;" type="checkbox" id="vehicle3" name="yks_dil" value="1">
                                <label style="float: left; color: white; font-size: 15px;" for="vehicle3">&nbsp;
                                    YKS Dil </i></label>
                            </div>
                            <div class="col-md-12 mt-5">
                                <input style="float: left; height: 20px; width: 20px;" type="checkbox" id="vehicle3" name="ischeck" value="Boat">
                                <label style="float: left; color: white; font-size: 15px;" for="vehicle3">&nbsp;
                                    Kullanım ve gizlilik sözleşmesini okudum, kabul ediyorum.</label><br><br>
                            </div>
                            <div class="col-md-12 mt-3">
                                <button style="background-color: white; padding: 2%;border:none;border-radius: 5px;"><b>
                                        KAYDOL VE DEVAM ET</b></button>
                            </div>
                            <div class="col-md-12"><br>
                                <a href="giris.html" style="float: center;color: rgb(255, 255, 255);">Zaten Üye Misin?<br>Giriş Yap</a><br><br>
                            </div>
                        </div>
                    </center>
                </form>


            </div>
        </div>
    </section>
    @endif
    @endsection
