var swiper = new Swiper('.slider.swiper-container', {
    slidesPerView: 3, // Số lượng slide hiển thị trên mỗi lần lướt
    spaceBetween: 10, // Khoảng cách giữa các slide
    loop: true, // Kích hoạt vòng lặp
    autoplay: {
        delay: 3000,
        disableOnInteraction: false, // Tiếp tục tự động sau khi người dùng tương tác
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
// JS cho thanh trượt vào trượt ra trang ưa thích
    const sidebar = document.getElementById('sidebar-fav');
    const toggleButton = document.getElementById('toggleSidebar');

    toggleButton.addEventListener('click', () => {
        const offcanvas = new bootstrap.Offcanvas(sidebar);
        offcanvas.toggle();
    });
// JS cho thanh trượt vào trượt ra cho trang giỏ hảng
const sidebar_giohang = document.getElementById('sidebar-cart');
const toggleButton_giohang = document.getElementById('toggleSidebar');

toggleButton.addEventListener('click', () => {
    const offcanvas = new bootstrap.Offcanvas(sidebar);
    offcanvas.toggle();
});

// JS cho phần mobile ở phần thương hiệu hiển thị danh sách
document.getElementById('toggle_list)').addEventListener('click', function(){
    const brand_list = document.getElementById('brand');
    if(brand.style.display === 'none'){
        brand.style.display === 'block'; 
    }else{
        brand.display.style === 'none';
    }
})
// JS cho phàn tìm kiếm
const searchTop = document.getElementById('search-top');
const searchClose = document.getElementById('search-close');
const searchButton = document.getElementById('search-button'); 

searchButton.addEventListener('click', () => {
    searchTop.style.transform = 'translateY(0)'; 
    searchTop.style.transition = 'transform 0.3s ease-in-out';
});
// hidden
searchClose.addEventListener('click', () => {
    searchTop.style.transform = 'translateY(-150%)'; 
    searchTop.style.transition = 'transform 0.3s ease-in-out'; 
});
