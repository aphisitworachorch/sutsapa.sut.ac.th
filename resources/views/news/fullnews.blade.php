@extends('.layouts.home_sapa')
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
                สร้างเมื่อ {{ $news->created_at }}
            </div>
        @endforeach
        <h1></h1>
    </div>
@endsection
