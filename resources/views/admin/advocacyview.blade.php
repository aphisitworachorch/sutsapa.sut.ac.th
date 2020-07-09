@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        @guest

        @else
            <div class="container-fluid">
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

            <!-- Modal -->
            <div class="modal fade" id="advocacyView" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">เนื้อหาร้องเรียน</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="content"></div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
    @endguest
@endsection
