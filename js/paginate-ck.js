(function(e){e.fn.wpPagination=function(t){function n(t){this.$el=e(t);this.init()}t=e.extend({links:"a",action:"my_pagination",ajaxURL:"http://"+location.host+"/wp-admin/admin-ajax.php",next:".next",previous:".previous",disablePreviousNext:!0},t);n.prototype={init:function(){this.createLoader();this.handlePreviousNextLinks();this.handleLinks()},createLoader:function(){var e=this;e.$el.before("<div id='pagination-loader'></div>")},handlePreviousNextLinks:function(){var n=this,r=e(t.previous,n.$el),i=e(t.next,n.$el);if(t.disablePreviousNext){r.remove();i.remove()}else{r.addClass("clicked");i.addClass("clicked")}},handleLinks:function(){var n=this,r=e(t.links,n.$el),i=e("#pagination-loader");r.click(function(n){n.preventDefault();var r=e(this),s=r.attr("href"),o=s.match(/\d+/),u=o[0],a={action:t.action,page:u};if(!r.hasClass("clicked")){i.show();e.get(t.ajaxURL,a,function(e){i.hide();i.before(e);r.addClass("clicked")})}})}};return this.each(function(){var e=this,t=new n(e)})}})(jQuery);