(function($) {

    var _options = null;
	var _mtm = null;

	jQuery.fn.MyCnnStyleMenu = function(options) {
		_options = $.extend({}, $.fn.MyCnnStyleMenu.defaults, options);

		//load webfont
		$("head").append("<link>"); 
		css = $("head").children(":last");
		css.attr({
			rel: "stylesheet", 
			type: "text/css", 
			href: "http://fonts.googleapis.com/css?family=" + getFontName(_options.GoogleFontFamily)
		});
		
		$(this).css("fontFamily", _options.GoogleFontFamily)
		$(this).css("fontSize", _options.GoogleFontSize);

		_mtm = this;
		$("body").append('<DIV id="menuOuterBgDiv"></DIV>');
		$("body").append('<DIV id="menuFooter"></DIV>');

		$("#menuOuterBgDiv").css("top", _options.menuOuterBgDivTop);
		$("#menuFooter").css("top", _options.menuFooterTop);
			
		var path = window.location.pathname;
		var bReturn = this.each(function()
		{
			//create menu
			var loc = location.href;
			var a = $(this).find("a");
			var href = a.attr("href");
			
			a.html("<span>"+a.html()+"</span>");
		
			//auto handle current page
			var bCurrent = false;
			var href = href.substring(href.lastIndexOf('/') + 1);
			var bCurrentPage = endWith(path, href);
			if (bCurrentPage)
				a.parent().addClass("current");
			
			//handle bmk
			$(a).click(function(){
				var a = $(this).attr("href");
				var p = $(_mtm).parent().find(".current");
				p.removeClass("current");
				$(this).parent().addClass("current");
				if (href.indexOf("#")==0) //bookmark
					$('html,body').animate({scrollTop: $(href).offset().top},'fast');
			});
		});

		return bReturn;
	}
	
	//default values
	jQuery.fn.MyCnnStyleMenu.defaults = {
		GoogleFontFamily: "'Oswald', arial, serif",
		GoogleFontSize: "16px",
		menuOuterBgDivTop: "88px",
		menuFooterTop: "125px"
	};
	
	function endWith(str,pattern) {
		var d = str.length - pattern.length;
		return d >= 0 && str.lastIndexOf(pattern) === d;
	};
	
	function getFontName(str){
		return str.replace(/ /g, '+');
	}
})(jQuery);