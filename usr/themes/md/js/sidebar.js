
$(document).ready(function() {
    var overlay = $('.sidebar-overlay');

    $('.sidebar-toggle').on('click', function() {
        var sidebar = $('#sidebar');
        sidebar.toggleClass('open');
        if (sidebar.hasClass('sidebar-fixed-left') && sidebar.hasClass('open')) {
            overlay.addClass('active');
            $('.MD-burger-layer').remove('MD-burger-line');
            $('.MD-burger-layer').add('MD-burger-arrow');
        } else {
            overlay.removeClass('active');
            $('.MD-burger-layer').removeClass('MD-burger-arrow');
            $('.MD-burger-layer').addClass('MD-burger-line');
        }
    });

    overlay.on('click', function() {
        $(this).removeClass('active');
        $('#sidebar').removeClass('open');
        $('.MD-burger-layer').removeClass('MD-burger-arrow');
        $('.MD-burger-layer').addClass('MD-burger-line');
    });

});

// Sidebar constructor
$(document).ready(function() {

    var sidebar = $('#sidebar');
    var sidebarHeader = $('#sidebar .sidebar-header');
    var sidebarImg = sidebarHeader.css('background-image');
    var toggleButtons = $('.sidebar-toggle');

    // Hide toggle buttons on default position
    toggleButtons.css('display', 'initial');
    $('body').css('display', 'initial');


    // Sidebar position
    $('#sidebar-position').change(function() {
        var value = $( this ).val();
        sidebar.removeClass('sidebar-fixed-left').addClass(value).addClass('open');
        if (value == 'sidebar-fixed-left') {
            $('.sidebar-overlay').addClass('active');
        }
    });
});

//Add JQuery animation to bootstrap dropdown elements.
(function($) {
    var dropdown = $('.dropdown');

    // Add slidedown animation to dropdown
    dropdown.on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // Add slideup animation to dropdown
    dropdown.on('hide.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });
})(jQuery);



(function(removeClass) {

	jQuery.fn.removeClass = function( value ) {
		if ( value && typeof value.test === "function" ) {
			for ( var i = 0, l = this.length; i < l; i++ ) {
				var elem = this[i];
				if ( elem.nodeType === 1 && elem.className ) {
					var classNames = elem.className.split( /\s+/ );

					for ( var n = classNames.length; n--; ) {
						if ( value.test(classNames[n]) ) {
							classNames.splice(n, 1);
						}
					}
					elem.className = jQuery.trim( classNames.join(" ") );
				}
			}
		} else {
			removeClass.call(this, value);
		}
		return this;
	}

})(jQuery.fn.removeClass);
