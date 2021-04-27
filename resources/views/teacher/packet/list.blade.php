@extends('teacher.welcome');

@section('teacher.seo')
<title>Admin Sayfası</title>
@endsection

@section('teacher.content')

<div class="container">
    <div class="row">

        @foreach($packet as $packetkey)
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title">{{$packetkey->packet_name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$packetkey->packet_name}}</h6>
                    <p class="card-text">{{$packetkey->packet_price}} TL</p>
                    <a href="{{ route('packettitle',$packetkey->packet_id) }}"><button type="button" class="btn btn-primary">İçeriğe git</button></a>
                </div>
            </div>
        </div>
        @endforeach


    </div>
</div>

@endsection
