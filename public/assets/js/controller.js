const body = document.body;
const switchMode = document.querySelector('.item_top_2_left button i')
let mode = localStorage.getItem('dark')
if(mode == 'true'){
    body.classList.add('dark')
    switchMode.classList.toggle('bi-moon-stars-fill')
}
switchMode.addEventListener('click', () => {
    switchMode.classList.toggle('bi-moon-stars-fill')
    switchMode.classList.toggle('bi-brightness-high')
    // lưu mode lại tránh người dùng load lại chuyển sang chế độ
    let mode = body.classList.toggle('dark')
    localStorage.setItem('darkmode', mode)
})


// LÀm chuyển động khi click vào button search
document.getElementById('toggleTimkiem').addEventListener('click', () =>{
    var scoll_item = document.getElementById('scollTimkiem')
    scoll_item.classList.add('show')
})
document.querySelectorAll('.close').forEach(button =>{
    button.addEventListener('click', () =>{
        var scoll_item = document.getElementById('scollTimkiem')
        scoll_item.classList.remove('show')
    })
})


// LÀm chuyển động khi click vào button ưa thích
document.getElementById('toggleUathich').addEventListener('click', () => {
    var scoll_uathich = document.getElementById('scollUathich')
    scoll_uathich.classList.add('show')
})
document.querySelectorAll('.close').forEach(button => {
    button.addEventListener('click', () => {
        var scoll_uathich = document.getElementById('scollUathich')
        scoll_uathich.classList.remove('show')
    })
})


// Làm chuyển động khi click vào button giỏ hàng
document.getElementById('toggleGiohang').addEventListener('click', () => {
    var scoll_giohang = document.getElementById('scollGiohang')
    scoll_giohang.classList.add('show')
})
document.querySelectorAll('.close').forEach(button => {
    button.addEventListener('click', () =>{
        var scoll_giohang = document.getElementById('scollGiohang')
        scoll_giohang.classList.remove('show')
    })
})

// Phần mới làm chuyển động
function openScrollSection(sectionId) {
    document.getElementById(sectionId).classList.add('active');
    document.getElementById('overlay').classList.add('active');
}

function closeScrollSection(sectionId) {
    document.getElementById(sectionId).classList.remove('active');
    document.getElementById('overlay').classList.remove('active');
}

document.getElementById('toggleUathich').addEventListener('click', function() {
    openScrollSection('scollUathich');
});

document.getElementById('toggleGiohang').addEventListener('click', function() {
    openScrollSection('scollGiohang');
});
document.getElementById('overlay').addEventListener('click', function() {
    closeScrollSection('scollUathich');
    closeScrollSection('scollGiohang');
});

// Làm chuyển động slide hình ảnh
const imgPosition = document.querySelectorAll(".slide_image img");
const imgContainer = document.querySelector('.slide_image');
const dotItem = document.querySelectorAll(".dot");
let imgNumber = imgPosition.length;
let index = 0;

// Set vị trí cho mỗi ảnh
imgPosition.forEach(function(image, idx) {
    image.style.left = idx * 100 + "%";
    dotItem[idx].addEventListener("click", function() {
        Slider(idx);
    });
});

// Hàm chuyển slide
function Slider(idx) {
    imgContainer.style.left = "-" + idx * 100 + "%";
    const dotActive = document.querySelector('.active');
    if (dotActive) {
        dotActive.classList.remove('active');
    }
    dotItem[idx].classList.add("active");
}

// Xử lý vuốt cảm ứng trên màn hình di động
let startX = 0;
let endX = 0;
imgContainer.addEventListener("touchstart", function(event) {
    startX = event.touches[0].clientX;
});

imgContainer.addEventListener("touchmove", function(event) {
    endX = event.touches[0].clientX;
});

imgContainer.addEventListener("touchend", function() {
    if (startX > endX + 50) { 
        index++;
        if (index >= imgNumber) {
            index = 0;
        }
        Slider(index);
    } else if (startX < endX - 50) { 
        index--;
        if (index < 0) {
            index = imgNumber - 1;
        }
        Slider(index);
    }
});
function autoSlide() {
    index++;
    if (index >= imgNumber) {
        index = 0;
    }
    Slider(index);
}
setInterval(autoSlide, 4000);

// Sử dụng cuộn trang khỏi bị ẩn phần header thanh menubar
window.addEventListener('scroll', function() {
    const menubar = document.getElementById('menubar_middle');
    const sticky = menubar.offsetTop; 
    if (window.pageYOffset > sticky) {
        menubar.classList.add('sticky'); // Thêm class sticky
    } else {
        menubar.classList.remove('sticky'); // Xóa class sticky
    }
});


// Làm chuyển động trở về đầu trang
$(document).ready(function(){
    $(window).scroll(function(){
        if($(this).scrollTop()){
            $('#backtop').fadeIn();
        }else{
            $('#backtop').fadeOut();
        }
    });
    $('#backtop').click(function(){
        $('html, body').animate({scrollTop: 0}, 500);
    })
})

// Làm button cộng trừ trong giỏ hàng
document.addEventListener('DOMContentLoaded', function() {
    const quantityInputs = document.querySelectorAll('.nav__bag--item-quantity');

    quantityInputs.forEach(quantityInput => {
        const inputField = quantityInput.querySelector('.nav__bag--item-quantity-number');
        const minusButton = quantityInput.querySelector('.minus');
        const plusButton = quantityInput.querySelector('.plus');

        // Giảm số lượng
        minusButton.addEventListener('click', function(e) {
            e.preventDefault(); 
            let currentValue = parseInt(inputField.value);
            if (currentValue > 1) {
                inputField.value = currentValue - 1;
            }
        });
        plusButton.addEventListener('click', function(e) {
            e.preventDefault(); 
            let currentValue = parseInt(inputField.value);
            inputField.value = currentValue + 1;
        });
    });
});

// Điều khiển menubar giữ nguyên phần header
window.addEventListener('scroll', function() {
    const menubar = document.getElementById('menubar_middle');
    const sticky = menubar.offsetTop; 
    if (window.pageYOffset > sticky) {
        menubar.classList.add('sticky'); 
    } else {
        menubar.classList.remove('sticky'); 
    }
});
// Chuyển động hình ảnh trong phần chi tiết sản phẩm
const bigimg = document.querySelector(".product_content-right-big img");
const smallimg = document.querySelectorAll(".product_content-left-small img");

let currentIndex = 0;
let isScoll = false;
function updatebigImg(index){
    bigimg.src = smallimg[index].src;
}
document.querySelector(".product_content-right-big").addEventListener("click", function(event){
    if(isScoll) return;
    isScoll = true;
    if(event.deltaY > 0){
        currentIndex = (currentIndex + 1) % smallimg.length;
    }else{

        currentIndex = (currentIndex - 1 + smallimg.length) % smallimg.length;
    }
    updatebigImg(currentIndex);
    event.preventDefault();
    setTimeout(function(){
        isScoll = false;
    }, 300);
})


// làm nhấn nút button viết đánh giá hiển thị form
const toggleButton = document.getElementById('button_danhgia');
const form = document.getElementById('danhgia');

// bắt đầu bắt sự kiện
toggleButton.addEventListener('click', function(){
    if(form.style.display === 'none' || form.style.display === ''){
        form.style.display = 'block';
    }else{
        form.style.display = 'none';
    }
});
// xét trạng thái ban đầu là ẩn
form.style.display = 'none';