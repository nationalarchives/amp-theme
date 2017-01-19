// JavaScript Document



$(document).ready(function() {

	/*
	 * The National Archives
	 * Author:  Mihai Diaconita - WEB TEAM
	 * Newsletter Back To Origin Jquery plugin
	 * */
	(function ($) {
		$.fn.newsletterBackToOrigin = function (options) {
			var settings = $.extend({}, $.fn.newsletterBackToOrigin.defaults, options);
			return this.each(function () {
				var thankYouURL = "http://www.nationalarchives.gov.uk/about/get-involved/newsletters/the-national-archives-newsletter/thank-you/",
					newValue = "?oldurl=" + window.location.href;
				return settings.$element.val(thankYouURL + newValue);
			});
		}

		// Default settings
		$.fn.newsletterBackToOrigin.defaults = {
			$element: $('input[name="ReturnURL"]'),
		}
	}(jQuery));

// Make sure the signup newsletter form matches the ID below
// By default target element is $('input[name="ReturnURL"]')
	$('#signup').newsletterBackToOrigin();
 
				$('.imageThumbsGroup').colorbox({rel:'imageThumbsGroup', transition:'none', width:'75%', height:"75%"});

			
$(function () {
			var tabContainers = $('#categoryTabs ul');
			tabContainers.hide().filter(':first').show();
			
			$('#categoryNavigation li a').click(function () {
				tabContainers.hide();
				tabContainers.filter(this.hash).show();
				$('#categoryNavigation li a').removeClass('selected');
				$(this).addClass('selected');
				return false;
			}).filter(':first').click();
		});




			var tabContainers = $('#tabs > div');
			tabContainers.hide().filter(':first').show();
			
			$('#tabNavigation li a').click(function () {
				tabContainers.hide();
				tabContainers.filter(this.hash).show();
				$('#tabNavigation li a').removeClass('selected');
				$(this).addClass('selected');
				return false;
			}).filter(':first').click();


			

    $("#s").val("Search audio, video and authors");
    
    $("#s").each(function () {
        var default_value = this.value;
        $(this).focus(function () {
            if (this.value == default_value) {
                this.value = '';

            }
        });
        $(this).blur(function () {
            if (this.value == '') {
                this.value = default_value;
            }
        });
    });


$("#miniSeries ul li p").hide();
$("#miniSeries ul li").hover(
        function() {
            $(this).find("p").slideDown("slow");
        },
        function() {
            $(this).find("p").slideUp("fast");
            $("miniSeries ul li p").hide();
        }
    );


$("#miniSeries ul li").bind("click", function(){
											  
		window.location = $(this).find("a").attr("href");									  
											  
											  
											  });






/*$("#slider").hide();
   	 $("a.more").toggle(function (event) {
        	$("#slider").slideDown();
        	$("a.more").html("Fewer details...");
        	event.preventDefault();
    		},
		      function (event) {
		          $("#slider").slideUp();
		          $("a.more").html("More details...");
		          event.preventDefault();
		      });

*/
	$("#feature").carouFredSel({
		prev    : "a#previous",
    	next    : "a#next",
	   
					 scroll : {
        duration        : 700,
        pauseDuration   : 8000,
        pauseOnHover    : true
		}
	 
	})
	
	
// .trigger("play", true);
// $("#foo3_pause").click(function() {
// 	$("#feature").trigger("pause", true);
// 	$(this).hide().prev().show();
// 	return false;
// });
// $("#foo3_play").click(function() {
// 	$("#feature").trigger("play", true).trigger("next");
// 	$(this).hide().next().show();
// 	return false;
// }).hide();




});


