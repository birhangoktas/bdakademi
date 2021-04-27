@extends('teacher.welcome')

@section('teacher.seo')
<title>Admin Sayfası</title>
@endsection

@section('teacher.content')



<div class="container">
    <div class="row">


        <ul>
            @foreach($educationtitle as $educationtitlekey)
            <li>{{ $educationtitlekey->title_name }}
                <ul>
                    @foreach($arraylist as $arraylistkey)
                    @if($arraylistkey->title_id == $educationtitlekey->id )
                    <li>{{ $arraylistkey->video_name }} | Video süresi: {{ $arraylistkey->video_time }}</li>
                    @endif
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>

    </div>

</div>





@endsection
