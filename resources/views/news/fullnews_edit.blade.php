@extends('layouts.admin')
@section('content')
    <div class="container">
        @foreach($newsview as $news)
            <h1 style="text-align:center;">{{ $news->news_title }}</h1>
            <br/>
            <hr/>
            <div class="container">
                {!! $news->news_content !!}
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <button class="btn btn-warning" id="editnews">แก้ไขข่าว</button>
                        <button class="btn btn-danger" id="deletenews">ลบข่าว</button>
                    </div>
                </div>
                <hr/>
                <p style="color:gray">สร้างเมื่อ {{ $news->created_at }}</p>
            </div>
        @endforeach
        <h1></h1>
    </div>
@endsection
