@extends('layouts.admin')
@section('content')
    <div class="container">
        @guest

        @else
            <div class="container">
                <div class="container">
                    <h2 style="text-align:center;">ยินดีต้อนรับสมาชิกสภานักศึกษา เข้าสู่ระบบสภานักศึกษา
                        มหาวิทยาลัยเทคโนโลยีสุรนารี</h2>
                </div>
                <div class="container">
                    <br/>
                    @foreach($voting as $vote)
                        <div class="jumbotron">
                            <h3>การลงมติ {{ $vote->vote_title }}</h3>
                            <div class="row">
                                <div class="col-4">เห็นด้วย {{ $vote->yes }}</div>
                                <div class="col-4">ไม่เห็นด้วย {{ $vote->no }}</div>
                                <div class="col-4">ไม่ออกเสียง {{ $vote->no_comment }}</div>
                            </div>
                            <div class="container py-2">

                                <button id="yes" class="btn btn-success" data-voteid="1">เห็นด้วย</button>
                                <button id="no" class="btn btn-danger" data-voteid="1">ไม่เห็นด้วย</button>
                                <button id="no_comment" class="btn btn-warning" data-voteid="1">ไม่ออกเสียง</button>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
    @endguest
@endsection
