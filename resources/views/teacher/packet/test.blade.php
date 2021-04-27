@extends('teacher.welcome')

@section('teacher.seo')
<title>Admin Sayfası</title>
@endsection

@section('teacher.content')

<div class="container">
    <div class="row">

        <form action="{{ route('test_post',$id) }}" method="post">
            @csrf

            <input type="text" name="question" class="form-control" placeholder="Soru başlığı"><br>
            <input type="text" name="answer_a" class="form-control" placeholder="A şıkkı"><br>
            <input type="text" name="answer_b" class="form-control" placeholder="b şıkkı"><br>
            <input type="text" name="answer_c" class="form-control" placeholder="c şıkkı"><br>
            <input type="text" name="answer_d" class="form-control" placeholder="d şıkkı"><br>
            <input type="text" name="success_answer" class="form-control" placeholder="doğru cevap"><br>
            <input type="file" name="test_img">

            <div class="form-check">
                <input class="form-check-input" type="radio" name="degree" id="flexRadioDefault1" value="1">
                <label class="form-check-label" for="flexRadioDefault1">
                   Kolay soru
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="degree" id="flexRadioDefault2" checked value="2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Zor soru
                </label>
            </div><br>

            <input type="submit" value="Kaydet">
        </form>



    </div>
</div>

@endsection
