<section >
<div class="bg-[#F4F4F4] partner">
            <div class="px-[10px] py-[10px] max-w-[1120px] mx-auto owl-carousel owl-theme grid grid-cols-4 gap-[100px]">
              <div class="item px-[50px] ">
                <img class="w-[109px] mx-auto my-auto " src="https://wp.ditsolution.net/itsoft/wp-content/uploads/2023/07/logo1.png" alt="">
              </div>
              <div class="item px-[50px] max-sm:hidden">
                <img class="w-[109px] mx-auto my-auto " src="https://wp.ditsolution.net/itsoft/wp-content/uploads/2023/07/logo2.png" alt="">
              </div>
              <div class="item px-[50px] max-md:hidden">
                <img class="w-[109px] mx-auto my-auto " src="https://wp.ditsolution.net/itsoft/wp-content/uploads/2023/07/logo3-1.png" alt="">
              </div>
              <div class="item px-[50px] max-[992px]:hidden">
                <img class="w-[109px] mx-auto my-auto " src="https://wp.ditsolution.net/itsoft/wp-content/uploads/2023/07/logo5.png" alt="">
              </div>
            </div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".partner .owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000, 
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                500: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 4,
                },
                
            }
        });
    });
</script>