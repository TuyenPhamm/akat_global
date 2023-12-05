

<section class="field">
<div class=" pt-[105px] pb-[80px] "
            style="background-image: url('https://wp.ditsolution.net/itsoft/wp-content/uploads/2023/09/Consen-2-Recoveredrr.jpg');">
            <div class=" text-center mb-[40px]">
                <p class="mb-[15px] text-[18px] font-semibold text-[#EA3838]">Case Studies</p>
                <div class=" text-[38px] font-bold leading-[53px]">
                    <h3>Proud Project That Make Us</h3>
                    <h3> Stand <span class=" text-[#EA3838]">Iut</span> </h3>
                </div>
            </div>
            <div class="max-w-[1120px] p-[10px] mx-auto grid grid-cols-3 max-md:grid-cols-1 owl-carousel owl-theme ">
                <?php
                    $customPostType = new WP_Query(array(
                        'post_type' => 'field'
                    ));
                    while($customPostType -> have_posts()) {
                        $customPostType-> the_post();
                ?>
                    <div class=" px-[15px] max-md:mt-[15px] max-md:w-full max-md:h-auto mx-auto ">
                    <a href="<?php the_permalink(); ?>">
                        <div class="group relative">
                            <div
                                class="h-0 opacity-0 overflow-hidden transition-all duration-700 group-hover:h-full opacity-80 absolute inset-x-0 bottom-0 bg-gradient-to-t from-red-500 to-white">
                            </div>
                            <div class="h-0 opacity-0 overflow-hidden transition-all duration-700 group-hover:h-[auto] opacity-100 absolute inset-x-0 bottom-[0px]"
                                style="background-color: #333333;">
                                <div class="p-[18px]">
                                    <h2 class="text-[14px] text-[#ffffff]"><?php the_title(); ?></h2>
                                </div>
                            </div>
                            <div class="w-full h-full hover:opacity-0 group-hover:opacity-100">
                               <img class="max-md:w-full max-md:h-auto" src="<?php echo get_image_featured_path(get_the_ID()); ?>" />
                            </div>
                        </div>
                    </a>
                    </div>  
                <?php
                    }
                ?>
            </div>
        </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $(".field .owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000, 
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                },
                380: {
                    items: 2,
                },
                500: {
                    items: 3,
                },
                768: {
                    items: 4,
                },
                992: {
                    items: 5,
                },
                
            }
        });
    });
</script>
