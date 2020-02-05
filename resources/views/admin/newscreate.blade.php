@extends('layouts.admin')
@section('content')
    <div class="container">
        @guest

        @else
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <button id="newscreate_button" class="btn btn-success">สร้างข่าวประกาศ</button>
                    </div>
                </div>
                @foreach($news_controller as $news)
                    <div class="jumbotron">
                        <h2>{{ $news->news_title }}</h2>
                        <hr/>
                        <a class="btn btn-info" href="/sapa/news/manage/{{ $news->id }}">ดูรายละเอียดแบบเต็ม</a>
                    </div>
                @endforeach
            </div>

            <!-- Modal -->
            <div class="modal fade" id="newscreateModal" tabindex="-1" role="dialog"
                 aria-labelledby="newscreateModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newscreateModalLabel">สร้างประกาศ / ข่าว</h5>
                        </div>
                        <div class="modal-body">
                            <form class="form-group" id="newscreate" method="POST">
                                {{ csrf_field() }}
                                <label for="news_title">หัวข้อข่าว / ประกาศ</label>
                                <input type="text" class="form-control" name="news_title" id="news_title"/>
                                <label for="news_content">เนื้อหาข่าว</label>
                                <textarea id="news_content" class="form-control" name="news_content"></textarea>
                                <br/>
                                <input type="submit" class="btn btn-success" name="submit"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    @endguest
@endsection
