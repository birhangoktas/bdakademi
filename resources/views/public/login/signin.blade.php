@extends('public.welcome')

@section('public.seo')
<title>BD Akademi | Anasayfa</title>
@endsection
@section('public.content')

@if(session('mail-check'))
<div class="alert alert-warning" role="alert">
  Lütfen e-posta adresinizi doğrulayın!
</div>
@endif

@if(session('error-check'))
<div class="alert alert-warning" role="alert">
  Bilgileriniz eşleşmiyor.
</div>
@endif

<section>
    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>
-->
    <!-- Offcanvas Menu Begin -->

        <section  style="background-image: url(/public/img/arkaplan.png);">
            <div class="mt-5 mb-5">
                <form action="{{ route('signin_post') }}" method="post">
                @csrf
                    <center>
                        <div class="row container giris" id="giris" style=" background-image: url(/public/img/giris.png);"
                            >
                            <div class="col-md-12">
                                <label for="lname" style="float: left;"><b>E Posta:</b></label><br>
                                <input class="form-control  @error('email') is-invalid @enderror" name="email" type="text"
                                    placeholder="Dershane girişi için e-posta adresinizi yazınız"><br>
                            </div><br><br>
                            <div class="col-md-12"><br><br>
                                <label for="lname" style="float: left;"><b>Şifre:</b></label><br>
                                <input class="form-control  @error('password') is-invalid @enderror" name="password" type="password"
                                    placeholder="Şifrenizi giriniz">
                            </div><br><br>
                            <div class="col-md-6"><br>
                                <input style="float: left; height: 20px; width: 20px;" type="checkbox" id="vehicle3"
                                    name="vehicle3" value="Boat">
                                <label style="float: left; color: white; font-size: 15px;" for="vehicle3">&nbsp; Beni
                                    Hatırla</label>
                            </div>
                            <div class="col-md-6"><br>
                                <a href="" style="float: right;color: rgb(54, 51, 51);">Şifremi Unuttum</a><br><br>
                            </div>
                            
                            <div class="col-md-12">
                                <button style="background-color: white; padding: 4%;border:none;border-radius: 5px;"><b>
                                        Giriş Yap</b></button>
                            </div>
                            <div class="col-md-12"><br>
                                <a href="uyeol.html" style="float: center;color: rgb(255, 255, 255);">Üye Değil Misin?<br>Üye Ol</a><br><br>
                            </div>
                        </div>
                    </center>
                </form>
            </div>
            <br><br>
        </section>

    @endsection
