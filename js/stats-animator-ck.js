jQuery(document).ready(function(e){function r(){t.each(function(t){var n=e(this).find(".prev_value"),r=e(this).find(".new_value"),i=n.width(),s=r.width()-5;n.css({width:0,opacity:1}).delay(t*200).animate({width:i},1e3,"easeOutSine",function(){e(this).find(".row_title").animate({opacity:1},500,"easeInSine")});r.css({width:0,opacity:1}).delay(t*200).animate({width:s},1e3,"easeOutExpo",function(){e(this).find(".change_value").animate({opacity:1},500,"easeInSine")})})}function i(){var t=e(".page_views .number"),r=t.attr("data-value"),i=1,s=window.setInterval(function(){if(i<=r){t.text(i+"%");i++}else{clearInterval(s);e(n.get().reverse()).each(function(t){e(this).delay(t*150).animate({opacity:1},1e3,"easeOutSine")})}},25)}var t=e(".project_bar_graph .bar"),n=e(".page_views > img");i();r()});