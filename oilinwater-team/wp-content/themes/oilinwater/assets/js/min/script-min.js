jQuery(document).ready(function($){console.log("========================"),console.log("Document ready");var o=$(".tear");o.css("height","0!important"),console.log("tear");var e=$(window),i=$(document).scrollTop(),n=$("body");!function(){console.log("===================="),console.log("Enter mobile nav function");var o=$("#nav-trigger"),i=$(".navigation-menu__list"),n="active",s=$(".menu");o.on("click",function(s){console.log("Nav trigger clicked"),s.preventDefault(),e.width()>1140||i.stop().slideToggle(300,function(){i.is(":visible")?o.addClass(n):o.removeClass(n)})}),e.resize(function(){return e.width()<=1140?void(i.is(":visible")&&(i.hide(),o.removeClass(n))):void(o.hasClass(n)||i.css("display",""))})}(),$("#navigation a").hasClass("active")&&$(this).parent().addClass("active")});