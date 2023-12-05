<?php
$the_query = new WP_Query(array(
    'posts_per_page'      => 3,
    'post_type'		      => 'post',
    'ignore_sticky_posts' => 1,
    //'nopaging'            => true,
    'post_status'         => 'publish',
    'orderby'             => 'date',
    'order'               => 'DESC',
));
?>
<?php if( $the_query->have_posts() ): ?>
<!-- BLOG -->
<div class=" pt-[300px] max-md:pt-[150px] pb-[100px]"
            style="background-image: url('https://wp.ditsolution.net/itsoft/wp-content/uploads/2023/09/Consen-2bg.jpg');">
            <div
                class="max-w-[1120px] mx-auto max-md:h-full max-h-[850px] w-full grid grid-cols-2 max-md:grid-cols-1 max-md:grid-rows-2">
                <div class="max-w-[630px] pl-[60px] max-md:pl-[0] my-auto max-md:order-2 max-md:text-center">
                    <p class=" text-[18px] text-[#EA3838]"><i class="ti-layout-line-solid font-bold "></i> Consen IT
                        Systems
                    </p>
                    <div class=" text-[60px] max-lg:text-[50px] max-[990px]:text-[40px] font-bold">
                        <h2>IT Soft <span class="text-[#EA3838]">provides</span></h2>
                        <h2><span class=" text-[#EA3838]">IT</span> Consultant</h2>
                    </div>
                    <p class="mt-[30px] text-[16px] text-[#686868]">
                        IT Solutions provides me day to challenges and variety in consen work you ppropriately enhance
                        principle-tered innovation on standards in platforms creative keeps me engaged and word ethic
                        culture.
                    </p>
                    <div class="pt-[38px]">
                        <button
                            class="py-[14px] px-[25px] text-[#ffffff] text-[17px] bg-[#EA3838] hover:bg-[#333333] rounded-[30px] font-bold">
                            Get Consultant
                            <i class="ti-angle-double-right text-[10px] font-bold"></i>
                        </button>
                    </div>
                </div>
                <div class="relative   max-md:hidden ">
                    <img class="pl-[100px] max-[1100px]:pl-[80px] max-lg:pl-[50px] absolute  bottom-0 "
                        src="https://wp.ditsolution.net/itsoft/wp-content/uploads/2023/09/Consen-2im.png" alt="">
                </div>
                <div class=" max-md:order-1 md:hidden">
                    <img class="h-full mx-auto max-h-full"
                        src="https://wp.ditsolution.net/itsoft/wp-content/uploads/2023/09/Consen-2im.png" alt="">
                </div>
            </div>
        </div>
<?php endif; ?>