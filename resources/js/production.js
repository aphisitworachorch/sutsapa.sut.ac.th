const Swal = require('sweetalert2');
require('datatables.net-bs4');
require('summernote');
require('summernote/dist/summernote.css');

$(function () {
    $(document).ready(function () {
        $('#logout').click(function () {
            Swal.fire({
                title: 'คำเตือน',
                text: "แน่ใจว่าคุณจะออกจากระบบ ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'สำเร็จ',
                        'คุณได้ออกจากระบบแล้ว',
                        'success'
                    );
                    $('#logout-form').submit();
                }
            })
        });
        $('#advocacy_view').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "/sapa/advocacy",
            },
            columns: [
                {
                    data: "feedback_id",
                    name: "feedback_id"
                },
                {
                    data: "feedback_title",
                    name: "feedback_title"
                },
                {
                    data: function (text) {
                        return text.feedback_content.replace(/<[^>]*>?/gm, '');
                    },
                    name: "feedback_content"
                },
                {
                    data: "feedback_type",
                    name: "feedback_type"
                },
                {
                    data: "feedback_status",
                    name: "feedback_status"
                },
                {
                    data: "feedback_contact",
                    name: "feedback_contact"
                }
            ]
        });
        $('#advocacy_form').submit(function (e) {
            e.preventDefault();
            let msg = {
                "feedback_title": $('#feedback_title').val(),
                "feedback_content": $('#feedback_content').val(),
                "feedback_type": $('#feedback_type').val(),
                "feedback_contact": $('#feedback_contact').val()
            };
            $.ajax({
                url: "/advocacy/report/create",
                type: "POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: JSON.stringify(msg),
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (e) {
                    if (e.status === "success") {
                        Swal.fire({
                            title: 'ขอบคุณที่มาแจ้งปัญหานะครับ',
                            text: "ศูนย์พิทักษ์สิทธิ์นักศึกษา มทส. \"พิทักษ์และรักษาไว้ซึ่งสิทธิประโยชน์ของนักศึกษา\"",
                            icon: 'success'
                        });
                        $('#advocacy_form')[0].reset();
                    } else {
                        Swal.fire({
                            title: 'รายงานไม่สำเร็จ',
                            text: 'ขออภัยในความไม่สะดวก ณ ที่นี้ครับ',
                            icon: 'error'
                        });
                    }

                }
            })
        });
        $('#newscreate_button').click(function () {
            $('#newscreateModal').modal('show');
        });
        $('#newscreate').submit(function (e) {
            e.preventDefault();
            let msg = {
                news_title: $('#news_title').val(),
                news_content: $('#news_content').val()
            };
            $.ajax({
                url: "/sapa/news/manage",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                data: JSON.stringify(msg),
                success: function (e) {
                    if (e.status === "success") {
                        Swal.fire({
                            title: 'สร้างประกาศสำเร็จ',
                            icon: 'success'
                        });
                        $('#newscreate')[0].reset();
                        $('#newscreateModal').modal('hide');
                    } else {
                        Swal.fire({
                            title: 'สร้างประกาศไม่สำเร็จ',
                            icon: 'error'
                        });
                    }
                }
            })

        });
        $('textarea').summernote({
            popover: {
                image: [],
                link: [],
                air: []
            }
        });
        $('#yes').click(function () {
            let msg = {
                vote_type: "yes"
            };
            $.ajax({
                url: "/sapa/vote/" + $('#yes').data("voteid"),
                type: "POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                data: JSON.stringify(msg),
                success: function (e) {
                    console.log(e);
                }
            })
        });
        $('#no').click(function () {
            let msg = {
                vote_type: "no"
            };
            $.ajax({
                url: "/sapa/vote/" + $('#no').data("voteid"),
                type: "POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                data: JSON.stringify(msg),
                success: function (e) {
                    console.log(e);
                }
            })
        });
        $('#no_comment').click(function () {
            let msg = {
                vote_type: "no_comment"
            };
            $.ajax({
                url: "/sapa/vote/" + $('#no_comment').data("voteid"),
                type: "POST",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                data: JSON.stringify(msg),
                success: function (e) {
                    console.log(e);
                }
            })
        })
    })
});