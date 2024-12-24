// Bình Luận hiển thị ngay mà không load lại trang
<script>
            $(document).ready(function(){
                $('#danhgia').submit(function(e){
                    e.preventDefault(); // ngăn gủi dữ liệu mặc định
                    const formData = $(this).serialize(); // lấy dữ liệu từ form

                    $.ajax({
                        url : 'index.php?url=binhluan',
                        type: 'POST',
                        data:formData,
                        success:function(response){
                            const data =JSON.parse(response);
                            if(data.success){
                                // thêm bình luận vào danh sách
                                const newComment = `
                                <div class="binhluan_item">
                                    <div class="binhluan_header">
                                        <strong class="binhluan_name">${data.comment.ten_nguoibinhluan}:</strong>
                                        <span class="binhluan_date">${data.comment.ngay_tao}</span>
                                    </div>
                                    <p class="binhluan_content">${data.comment.noi_dung}</p>
                                    <hr>
                                </div>
                                `;
                                $('#binhluan_list').prepend(newComment);
                                $('#binhluan').val(''); // xoá nội dung bình luận
                            }else{
                                alert('Gửi Bình Luận Thất Bại!');
                            }
                        },
                        error:function(){
                            alert('Có Lỗi Xảy Ra. Vui Lòng THử Lại');
                        }
                    })
                })
            })
        </script>