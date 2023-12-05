<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kato
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="./img/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
      
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
</head>
    <div class="">
        <header class="">
        <div class="fixed top-0 left-0 w-full z-50 lg:hidden">
            <div class=" bg-[#EA3838] ">
                <div class="flex justify-between max-lg:justify-between l max-w-[1120px] mx-auto p-[10px]">
                    <div class="px-[15px]">
                        <img class="max-h-[50px]" src="./img/ảnh_Viber_2023-11-07_15-28-06-501.png" alt="">
                    </div>
                    <div id="showDivButton"  class="my-auto">
                        <i  class="ti-menu pl-[10px] text-[30px] text-[#ffffff] "></i>
                    </div>
                    <button id="hideDivButton" class="my-auto"><i class="ti-close pl-[10px] text-[30px] text-[#ffffff]"></i></button>
                </div>
            </div>
            <div id="hiddenDiv" class=" bg-[#f8f8f8] hidden">
                <div class="flex justify-between px-[20px] py-[10px] border-b-[1px] border-[#EA3838]">
                    <p class="text-[16px]">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'main-menu',
                            'menu_id'        => 'main-menu',
                        ) );
                    ?>
                    </p>
                </div>

            </div>
            

        </div>
        <div class="fixed top-0 left-0 w-full bg-[#ffffff] z-50">
            <div class="flex justify-between max-lg:hidden l max-w-[1120px] mx-auto ">
                <div class="px-[15px]">
                    <?php
                    dynamic_sidebar('logo');
                    ?>
                </div>
                <div class="flex justify-between w-[885px] px-[15px]">
                    <div class="flex">
                        <div class="flex my-auto px-[10px] leading-[100px] hover:text-[#EA3838]">
                            <p class="text-[16px]">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'main-menu',
                                    'menu_id'        => 'main-menu',
                                ) );
                             ?>
                            </p>
                        </div>
                    </div>
                    <div class="my-auto flex">
                        <button
                            class=" bg-[#EA3838] hover:bg-[#bd2d10] border-[2px] border-[#EA3838] hover:border-[#bd2d10] mx-[10px] py-[11px] px-[24px] rounded-[3px] text-[14px] text-[#ffffff]">
                            Get A Quote
                        </button>
                        <div class="my-auto">
                            <i class="ti-menu pl-[10px] text-[30px] text-[#EA3838] "></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </header>

        <script>
        var showButton = document.getElementById('showDivButton');
        var hideButton = document.getElementById('hideDivButton');
        var div = document.getElementById('hiddenDiv');
      
        showButton.addEventListener('click', function() {
          div.style.display = 'block';
          showButton.classList.add('hidden');
          hideButton.classList.remove('hidden');
        });
      
        hideButton.addEventListener('click', function() {
          div.style.display = 'none';
          hideButton.classList.add('hidden');
          showButton.classList.remove('hidden');
        });
      </script>