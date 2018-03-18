<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function enqueue_scripts() {
    wp_register_script('contact form script', get_stylesheet_directory_uri() . '/assets/js/contact-form.js', array('jquery'),'1.1', true);
    wp_enqueue_script('contact form script');
} 

add_action( 'rest_api_init', function () {
    register_rest_route( 'contact/v2', '/contact/', array(
        'methods' => 'POST',
	'callback' => 'contact_form'
    ));
});

function contact_form( \WP_REST_Request $request ) {
    $name = $request['name'];
    $phone = $request['phone'];
    $email = $request['email'];
    $to = "chris.sammarco@gmail.com";
    $subject = "HTML email";
    
    // Set Headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	$message = "
	<html>
	<head>
	<title>Contact Form</title>
	</head>
	<body>
	<p>Someone submitted the contact form!</p>
	<table>
	<tr>
	<th>Name</th>
	<th>Phone</th>
	<th>Email</th>
	</tr>
	<tr>
	<td>".$name."</td>
	<td>".$phone."</td>
	<td>".$email."</td>
	</tr>
	</table>
	</body>
	</html>
	";

    // Send Email
    mail($to,$subject,$message,$headers);
}