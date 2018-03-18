jQuery(function($) {
    $('#contact').on("submit", function(event) {
        event.preventDefault();
        jQuery.ajax({
            url: '/wp-json/contact/v2/contact',
            type: 'post',
            dataType: 'json',
            data: jQuery('form#contact').serialize(),
            success: function(data) {
            	// Change form to say thank you
            	var htmlString = "<hr> <h3>THANK YOU!</h3> <p>someone from our team will contact you soon</p> <hr>";
            	jQuery('form#contact').html( htmlString );
            }
        });
    });
});