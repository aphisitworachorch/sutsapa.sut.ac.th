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
    <!-- Modal -->
        <div class="modal fade" id="newsEditModal" tabindex="-1" role="dialog"
             aria-labelledby="newsEditModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newsEditModalLabel">แก้ไขประกาศ / ข่าว</h5>
                    </div>
                    <div class="modal-body">
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
                </div>
            </div>
        </div>
    </div>
@endsection
