jQuery(document).ready(function(e){var t=e(".more_arrow i");e(".project_subsection_header").eq(0).addClass("first");e(window).scroll(function(){e("body").scrollTop()>e(".cover_image").height()?e(".header_container").addClass("solidbg").removeClass("clearbg"):e(".header_container").addClass("clearbg").removeClass("solidbg")});t.click(function(){e("html, body").animate({scrollTop:e(".project_info_section").offset().top},1e3,"easeInOutQuint")})});