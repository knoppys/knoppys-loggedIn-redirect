<?php
function knoppys_redirect() {

	/*****
	First lets check if we're on the home page. 
	This way at least we dont lose any performance 
	by running this on every page
	*****/

	if (is_front_page()) {
	
		/*****
		Now lets check if the user is logged in
		*****/
		if (is_user_logged_in()) {			

			//Get the users ID
			$userId = get_current_user_id();

			//Get the users data as an object
			$userData = get_userdata( $userId );

			//Get the users roles. Roles are stored as an array
			//so we need to find the role you want in this array 			
			$userRoles = $userData->roles;

			//Replace [subscriber] with the name of the role you want to redirect
			if (in_array('[subscriber]', $userRoles)){

				//Redirect the logged in user to a specific page
				//Replace [page-name-here] with your desired page to redirect to.
				wp_redirect( get_site_url().'[/page-name-here]' );
        		exit();
        		
			}
			
		}
	} 
}
add_action( 'template_redirect', 'knoppys_redirect' );