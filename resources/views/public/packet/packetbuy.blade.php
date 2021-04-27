@extends('public.welcome')

@section('public.seo')
<link rel="stylesheet" href="/public/js/card.css">
<title>BD Akademi | Anasayfa</title>
@endsection
@section('public.content')

@if(session('invocie-check'))
<div class="alert alert-warning" role="alert" style="width:100%">
    Fatura oluşturma işleminde bir hata oluştu.
</div>
@endif

@if(session('invocie-success'))
<div class="alert alert-success" role="alert" style="width:100%">
    Fatura oluşturma işlemi başarılı bir şekilde gerçekleşti
</div>
@endif


@foreach($educationpacket as $educationpacketkey)

<div class="container" style="margin-top:50px;margin-bottom:50px">
    <div class="row">

        <div class="col-md-7">

            <div class="row">

                <div class="col-md-4">
                    <center><img style="width:90%; text-align: center;" src="/public/img/{{ $educationpacketkey->url }}" alt=""></center>
                </div>

                <div class="col-md-8">
                    <h4>{{ $educationpacketkey->packet_name }}</h4>
                    <ul class="mt-3" style="color: black; font-size: 15px;">
                        <li>Bolca pratik dersler</li>
                        <li>7 / 24 iletişim imkanı</li>
                        <li>Ders anlatım videoları</li>
                        <li>Tüm soruların videolu çözümleri</li>
                        <li>Tüm cihazlara uyumlu online ders</li>
                    </ul><br>
                    <strike style="color: brown;">{{ $educationpacketkey->packet_price * 1.30}} ₺</strike><br>
                    <a style="color: green;font-size: 25px;">{{ $educationpacketkey->packet_price }}₺</a><br><br>
                </div>

            </div>


        </div>

        <div class="col-md-5">

            @auth

            @if($invocie == 1)
            <div class="auth-system">
                <h4>Paketi almak için son bir adım kaldı.</h4>
                <div class="auth-system-href">
                    <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg" style="background-color:#25d366;color:#fff">Satın Al</button>
                </div>
            </div>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="invocie-buy">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class='card-wrapper'></div>
                                    <!-- CSS is included via this JavaScript file -->
                                    <script src="/public/js/card.js"></script>
                                </div>


                                <div class="col-md-6">

                                    <form action="{{ route('iyzico_post',[$educationpacketkey->menu_slug,$educationpacketkey->order]) }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" autocomplete="off" name="name" id="name" placeholder="İsim soyisim">
                                            <small class="form-text text-muted">Kartın üzerindeki isim ve soyisim bilgisi.</small>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('number') is-invalid @enderror" autocomplete="off" name="number" id="number" placeholder="Kart numarası">
                                            <small class="form-text text-muted">Kartın üzerindeki numara bilgisi.</small>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('expiry') is-invalid @enderror" autocomplete="off" name="expiry" id="expiry" placeholder="Tarih">
                                            <small class="form-text text-muted">Kartın üzerindeki son kullanma tarihi.</small>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('cvc') is-invalid @enderror" autocomplete="off" min="3" max="3" name="cvc" id="cvc" placeholder="Güvenlik kodu">
                                            <small class="form-text text-muted">Kartın üzerindeki güvenlik kodu.</small>
                                        </div>

                                        <div class="auth-system-href">
                                            <input type="submit" class="btn" style="background-color:#25d366;color:#fff" value="Satın Al">
                                        </div>
                                    </form>
                                    <script>
                                        var card = new Card({
                                            form: 'form'
                                            , container: '.card-wrapper'
                                        , });

                                    </script>


                                    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
                                    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
                                    <script>
                                        var $form = $("form")
                                            , $successMsg = $(".alert");
                                        $.validator.addMethod("letters", function(value, element) {
                                            return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
                                        });
                                        $form.validate({
                                            rules: {
                                                cvc: {
                                                    required: true
                                                    , minlength: 3
                                                    , maxlength: 3
                                                }
                                                , expiry: {
                                                    required: true
                                                }
                                                , name: {
                                                    required: true
                                                }
                                                , number: {
                                                    required: true
                                                }
                                            }
                                            , messages: {
                                                cvc: "3 haneli güvenlik kodunu giriniz."
                                                , email: "Please specify a valid email address"
                                                , expiry: "Tarih bilgini giriniz."
                                                , name: "Kartın üzerindeki ismi giriniz."
                                                , number: "Kart bilgisini giriniz."
                                            }
                                        });

                                    </script>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endauth

            @guest
                
            
            <div class="auth-system">
                <h4>Bir paket satın almadan önce, bir fatura adresi oluşturmalısın.</h4>
                <div class="auth-system-href">
                    <button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg" style="background-color:#25d366;color:#fff">Fatura oluştur</button>

                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="invocie-form">


                                    <div class="invocie-form">
                                        <form action="{{ route('invocie_post') }}" method="post">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-6">
                                                    <input type="text" class="form-control @error('name') is-invalid @enderror" autocomplete="off" name="name" placeholder="İsim">
                                                </div>
                                                <div class="col-6">
                                                    <input type="text" class="form-control @error('last') is-invalid @enderror" autocomplete="off" name="last" placeholder="Soyisim">
                                                </div>
                                            </div>
                                            <div class="form-group" style="margin-top:20px">
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-posta bilgisi">
                                                <small id="emailHelp" class="form-text text-muted">Bu e-posta tek olmalıdır.</small>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" autocomplete="off" name="phone" placeholder="Telefon numarası">
                                                <small class="form-text text-muted">Bu telefon numarası tek olmalıdır.</small>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control @error('tc') is-invalid @enderror" autocomplete="off" name="tc" placeholder="T.C Kimlik numrası">
                                                <small class="form-text text-muted">KVKK gereğince T.C NO zorunlu kılınmıştır.</small>
                                            </div>

                                            <div class="form-group">
                                                <input type="text" class="form-control @error('address') is-invalid @enderror" autocomplete="off" name="address" placeholder="Adres bilgisi">
                                            </div>
                                            <div class="form-row">
                                                <div class="col-4">
                                                    <input type="text" class="form-control @error('country') is-invalid @enderror" autocomplete="off" name="country" placeholder="Ülke">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control @error('city') is-invalid @enderror" autocomplete="off" name="city" placeholder="Şehir">
                                                </div>
                                                <div class="col-4">
                                                    <input type="text" class="form-control @error('zip') is-invalid @enderror" autocomplete="off" name="zip" placeholder="Mahhale kodu">
                                                </div>
                                            </div>

                                            <div class="form-group" style="margin-top:20px;width:100%;position:relative;right:0px">
                                                <input type="submit" class="btn btn-outline-primary" value="Gönder">
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endguest


                @else

                <div class="auth-system">
                    <h4>Paketi Satın Almak İçin Lütfen Sisteme Üye Olunuz</h4>
                    <div class="auth-system-href">
                        <a href="/kayit-ol" target="__BLANK">Üyelik sayfası</a>
                    </div>
                </div>

                @endif


            </div>
        </div>
    </div>
</div>

@endforeach

@endsection
