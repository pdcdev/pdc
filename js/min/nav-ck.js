jQuery(document).ready(function(e){function a(){"0"===o.attr("data-state")?(disabler.disable_scrolling(),o.removeClass("inactive").addClass("active").attr("data-state",1)):(disabler.enable_scrolling(),o.removeClass("active").addClass("inactive").attr("data-state",0))}var o=e("#main_nav"),n=e("nav ul"),t=e("#nav_btn"),i=document.querySelector(".header_container"),s=new Headroom(i,{tolerance:5,offset:.75*e(window).height(),classes:{initial:"animated",pinned:"slideDown",unpinned:"slideUp",top:"headroom--top",notTop:"headroom--not-top"}});s.init(),e(".logo span").each(function(){e(this).css("width",Math.floor(e(this).width())+"px")}),t.click(function(){a()});var d=e("body"),l=e(".logo span");e("header").waypoint(function(e){console.log("Direction example triggered scrolling "+e)},{offset:e(window).height()/2}),e(window).scroll(function(){d.scrollTop()>80?l.addClass("collapsed").removeClass("expanded"):l.removeClass("collapsed").addClass("expanded")}),position_nav(),e(window).resize(function(){position_nav()})});