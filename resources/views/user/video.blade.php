<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>



    <div class="accordion" id="accordionExample">

        @foreach($educationtitle as $educationtitlekey)
        <div class="accordion-item">
            <h2 class="accordion-header" id="{{ $educationtitlekey->id }}">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target=".collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    {{ $educationtitlekey->title_name }}
                </button>
            </h2>
            @foreach($arraylist as $arraylistkey)
            @if($arraylistkey->title_id == $educationtitlekey->id )
            <div class="collapseOne" class="accordion-collapse collapse show" aria-labelledby="{{ $arraylistkey->title_id }}" data-bs-parent="#accordionExample">
                {{ $arraylistkey->video_name }} | Video süresi: {{ $arraylistkey->video_time }}
            </div>
            @endif
            @endforeach





        </div>
        @endforeach


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
