if(window.innerWidth <= 480){
    var swiper = new Swiper(".mySwiper", {
        grabCursor: true,
        centeredSlides:true,
        slidesPerView:"1",
        pagination:true,
        paginationClickable:true,
        spaceBetween:"30",
        loop:true,
    });
}
else{
    var swiper = new Swiper(".mySwiper", {
        grabCursor: true,
        centeredSlides:true,
        slidesPerView:"2",
        pagination:true,
        paginationClickable:true,
        spaceBetween:"30",
        loop:true,
    
    });
}
