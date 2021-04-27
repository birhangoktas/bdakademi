@extends('public.welcome')

@section('public.seo')
<title>BD Akademi | Anasayfa</title>
@endsection
@section('public.content')


<div class="container" style="margin-top:50px">
    <div class="row">
        @foreach($educationpacket as $educationpacketkey)
     

        <div class="col-md-4 mb-5" style="margin-top:20px">
            <center><img style="width:90%; text-align: center;" src="/public/img/{{ $educationpacketkey->url }}" alt=""></center>
            <center>
                <button style="width: 86%;background-color: #ffffff;border:none;padding:3%; color: rgb(0, 0, 0);">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="row" style="border:1px solid #000;padding:10px">
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
    </div>
</div>



@endsection
