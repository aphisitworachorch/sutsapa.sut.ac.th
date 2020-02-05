@extends('.layouts.home_sapa')
@section('content')
    <div class="container">
        <div class="container-fluid">
            <h2 style="text-align:center;">ข่าวสารประชาสัมพันธ์</h2>

            @foreach($news_controller as $news)
                <div class="jumbotron">
                    <h2>{{ $news->news_title }}</h2>
                    <hr/>
                    <a class="btn btn-info" href="/news/article/{{ $news->id }}">ดูรายละเอียดแบบเต็ม</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
