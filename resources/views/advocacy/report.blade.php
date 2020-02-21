@extends('.layouts.home_sapa')
@section('content')
    <div class="container">
        <h1 style="text-align:center;">ศูนย์พิทักษ์สิทธินักศึกษา</h1>
        <div class="py-2 container">
            <div class="container">
                <div class="container">
                    <h2 style="text-align:center">ร้องเรียนศูนย์พิทักษ์สิทธินักศึกษา</h2>
                    <div class="jumbotrol py-2">
                        <form class="form-group" method="POST" id="advocacy_form">
                            {{ csrf_field() }}
                            <label for="feedback_title">เรื่องร้องเรียน</label>
                            <input type="text" id="feedback_title" name="feedback_title" class="form-control" required/>
                            <label for="feedback_content">เนื้อหาที่จะร้องเรียน</label>
                            <textarea id="feedback_content" class="form-control" name="feedback_content"
                                      required></textarea>
                            <label for="feedback_type">ประเภทของการร้องเรียน</label>
                            <input type="text" id="feedback_type" name="feedback_type" class="form-control" required/>
                            <label for="feedback_contact">ช่องทางการติดต่อกลับ (จะมีหรือไม่มีก็ได้)</label>
                            <input type="text" id="feedback_contact" name="feedback_contact" class="form-control"
                                   required/>
                            <br/>
                            <input type="submit" class="btn btn-info py-2" name="submit" value="ส่งคำร้องเรียน"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
