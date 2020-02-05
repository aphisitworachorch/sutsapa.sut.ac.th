@extends('layouts.admin')
@section('content')
    <div class="container">
        @guest

        @else
            <div class="container">
                <div class="table-responsive">
                    <table id="advocacy_view" class="table table-bordered">
                        <thead>
                        <th width="20%">หมายเลขการร้องเรียน</th>
                        <th width="50%">เรื่องร้องเรียน</th>
                        <th>เนื้อหาร้องเรียน</th>
                        <th>ประเภทร้องเรียน</th>
                        <th width="20%">สถานะการรับแจ้ง</th>
                        <th>ที่ติดต่อ</th>
                        </thead>
                    </table>
                </div>
            </div>
    @endguest
@endsection
