@extends('teacher.welcome');

@section('teacher.seo')
<title>Admin Sayfası</title>
@endsection

@section('teacher.content')

<div class="container">
    <div class="row">

        <script src="https://code.jquery.com/jquery-latest.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


        <form action="{{ route('videosendpost',$titlecount) }}" method="post" enctype="multipart/form-data">
            @csrf
            <table class="table table-responsive table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <td>Video Url</td>
                        <td>Video Başlığı</td>
                        <td>Sil</td>
                    </tr>
                </thead>
                <tbody id="TextBoxContainer" style="width:100%">
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="5">
                            <button id="btnAdd" type="button" class="btn btn-primary" data-toggle="tooltip" data-original-title="Add more controls"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp; Ekle &nbsp;</button></th>
                    </tr>
                </tfoot>
            </table>

            <input type="submit" class="btn btn-primary" value="Kaydet">
        </form>


        <script>
            $(function() {
                $("#btnAdd").bind("click", function() {
                    var div = $("<tr />");
                    div.html(GetDynamicTextBox(""));

                    $("#TextBoxContainer").append(div);
                    $('.custom-file input').change(function(e) {
                        $(this).next('.custom-file-label').html(e.target.files[0].name);
                    });
                });
                $("body").on("click", ".remove", function() {
                    $(this).closest("tr").remove();
                });
            });

            function GetDynamicTextBox(value) {
                return '<td style="width:50%"><div class="videos-files"><div class="custom-file"><input type="file" name="educationvideo[]" class="custom-file-input" id="customFile"><label class="custom-file-label" for="customFile">Video ekle</label></div></div></td>' + '<td style="width:50%"><input type="text" name="educationname[]" class="form-control"></td>' + '<td style="width:10%"><button type="button" class="btn btn-danger remove"><i class="far fa-trash-alt"></i></button></td>'
            }

        </script>

        @foreach($educationvideo as $educationvideokey)
            <div class="row" style="margin:20px">
                <div class="col-2"><a href="{{ route('test_get',$educationvideokey->id) }}"><button class="btn btn-primary">Video yükle</button></a></div>
                <div class="col-10">{{ $educationvideokey->video_name }}</div>
            </div>
        @endforeach
    </div>
</div>

@endsection
