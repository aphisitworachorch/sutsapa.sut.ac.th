@extends('layouts.admin')
@section('content')
    <div class="container">
        @guest

        @else
            @foreach($newsview as $news)
                <form class="form-group" id="newsedit" method="POST">
                    {{ csrf_field() }}
                    <label for="news_title">หัวข้อข่าว / ประกาศ</label>
                    <input type="text" class="form-control" name="news_title" id="news_title"
                           value="{{ $news->news_title }}"/>
                    <label for="news_content">เนื้อหาข่าว</label>
                    <textarea id="news_content" class="form-control" name="news_content">{{ $news->news_content }}</textarea>
                    <br/>
                    <input type="submit" class="btn btn-success" name="submit"/>
                </form>
            @endforeach
    </div>
    @endguest
@endsection
