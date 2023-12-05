<!-- CLIENT -->
<div class="service bg-cover bg-no-repeat bg-center"
            style="background-image: url('https://wp.ditsolution.net/itsoft/wp-content/uploads/2023/09/Consen-2dsf.png');">
            <div class="pt-[105px] pb-[80px] ">
                <div class=" text-center mb-[40px]">
                    <p class="mb-[15px] text-[18px] font-semibold text-[#EA3838]">About Consen company</p>
                    <div class=" text-[38px] font-bold leading-[53px]">
                        <h3>We Help IT Companies Scale</h3>
                        <h3> Engineering <span class=" text-[#EA3838]">Capacity.</span> </h3>
                    </div>
                </div>
                <div class="max-w-[1120px] p-[10px] mx-auto grid grid-cols-4 max-lg:grid-cols-2 max-md:grid-cols-1  owl-theme">
                    <?php
                        $customPostType = new WP_Query(array(
                            'posts_per_page' => 4,
                            'post_type' => 'service'
                        ));
                        while($customPostType -> have_posts()) {
                            $customPostType-> the_post();
                    ?>
                        <div class="m-[10px] group ">
                            <a href="<?php the_permalink(); ?>">
                                <div class="px-[15px] pt-[35px] pb-[10px] bg-[#ffffff] group-hover:bg-[#0a0a1d] duration-1000 group-hover:text-[#ffffff] rounded-[10px] ">
                                    <div class="text-center">
                                        <img src="<?php echo get_image_featured_path(get_the_ID()); ?>" />
                                        <h2
                                            class="text-[20px] text-[#232323] font-semibold leading-[26px] mt-[5px] mb-[17px]  group-hover:text-[#EA3838]">
                                            <?php the_title(); ?>
                                        </h2>
                                    </div>
                                </div>
                                <div class="flex justify-center relative top-[-30px]">
                                    <a class="px-[15px] py-[12px] rounded-full bg-[#EA3838] text-[#ffffff] font-bold"
                                        href=""><?php the_excerpt(); ?></a>
                                </div>
                            </a>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<!-- <script>
  $(document).ready(function () {
    $(".service .owl-carousel").owlCarousel({
      items: 4,
      loop: true,
    //   autoplay: true,
      autoplayTimeout: 3000, 
      autoplayHoverPause: true,
    });
  });
</script> -->