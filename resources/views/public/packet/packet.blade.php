@extends('public.welcome')

@section('public.seo')
<title>BD Akademi | Anasayfa</title>
@endsection
@section('public.content')

@if(session('error-card'))
<div class="alert alert-warning" role="alert">
  {{session('error-card')}}
</div>
@endif


<div style="background-image: url(/public/img/paket.png);" id="mobil">
    <center>
        <div class="tab pt-3 pb-3" style="background-image: url(/public/img/paket.png);width: 100%;">
            <button class="tablinks" onclick="openCity(event, 'lgs')" id="defaultOpen">LGS</button>
            <button class="tablinks" onclick="openCity(event, '9-sinif')">9. Sınıf</button>
            <button class="tablinks" onclick="openCity(event, '10-sinif')">10. Sınıf</button>
            <button class="tablinks" onclick="openCity(event, '11-sinif')">11. Sınıf</button>
            <button class="tablinks" onclick="openCity(event, 'yks')">YKS</button>
        </div>
    </center>


    <div id="lgs" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <div class="container">
            <div class="row">
                @foreach($educationpacket as $educationpacketkey)
                @if($educationpacketkey->menu_slug == 'lgs')

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
                @endif
                @endforeach
            </div>
        </div>
    </div>





    <div id="9-sinif" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <div class="container">
            <div class="row">
                @foreach($educationpacket as $educationpacketkey)
                @if($educationpacketkey->menu_slug == '9-sinif')

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
                @endif
                @endforeach
            </div>
        </div>
    </div>

    <div id="10-sinif" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <div class="container">
            <div class="row">
                @foreach($educationpacket as $educationpacketkey)
                @if($educationpacketkey->menu_slug == '10-sinif')

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
                @endif
                @endforeach
            </div>
        </div>
    </div>




    <div id="11-sinif" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <div class="container">
            <div class="row">
                @foreach($educationpacket as $educationpacketkey)
                @if($educationpacketkey->menu_slug == '11-sinif')

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
                @endif
                @endforeach
            </div>
        </div>
    </div>



    <div id="yks" class="tabcontent">
        <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
        <div class="container">
            <div class="row">
                @foreach($educationpacket as $educationpacketkey)
                @if($educationpacketkey->menu_slug == 'yks')

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
                @endif
                @endforeach
            </div>
        </div>
    </div>









    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

    </script>


</div>



@endsection
