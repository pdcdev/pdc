jQuery(document).ready(function(e){var t=e(".more_arrow i");e(".project_subsection_header").eq(0).addClass("first");t.click(function(){e("html, body").animate({scrollTop:e(".project_info_section").offset().top},1e3,"easeInOutQuint")});e(".project_subsection_header").each(function(){e(this).waypoint(function(){e(this).animate({opacity:1},600,"easeOutSine")},{offset:"95%"})});e(window).load(function(){e(".more_arrow i").removeClass("hidden").addClass("visible")})});