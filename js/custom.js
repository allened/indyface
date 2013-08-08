/* When document loads these will auto run */
$(document).ready(function(){

	$('#message').fadeOut(6000, function() { });
    // Animation complete.
 	
});

/* My Javascript Handles */



/* Handles making menu selection active & Side bar fixed */
$(function(){
	
	var $sidebar   = $("#sidebar"),
        $window    = $(window),
        offset     = $sidebar.offset(),
        topPadding = 15;

    $window.scroll(function() {
        if ($window.scrollTop() > offset.top) {
            $sidebar.addClass('fixed');
        } else {
            $sidebar.removeClass('fixed');
        }
    });
	
  function stripTrailingSlash(str) {
    if(str.substr(-1) == '/') {
      return str.substr(0, str.length - 1);
    }
    return str;
  }

  var url = window.location.pathname;  
  var activePage = stripTrailingSlash(url);

  $('.nav li a').each(function(){  
    var currentPage = stripTrailingSlash($(this).attr('href'));

    if (activePage == currentPage) {
      $(this).parent().addClass('active'); 
    } 
  });
});

