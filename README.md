Knoppys loggedIn Redirect
Plugin Version 1

This plugin will redirect logged in users of a certain user role to a page you stipulate. I havent had a chance to add some WP Options for the user role name and the page to redirect to, but can always do this at a later date. 

To set these, look me up on Facebook or email me at coda@knoppys.co.uk. If you check out the readme file on github, it will show you which lines you need to edit to set these values. 

To set the user role:
Edit line 28 of redirect_function.php in the plugin folder. Replace '[subscriber]' with 'userRole'.
For example if you wish to redirect administrators then the line shoudl read:
- if (in_array('administrator', $userRoles)){

To edit the page url to redirect to:
Edit line 32 of redirect_function.php in the plugin folder. Replace '[/page-name-here]' with '/page'.
For example if you wish to redirect the user to the URL domainname.com/contact then the line should read:
- wp_redirect( get_site_url().'/contact' );

If you need any help. Visit www.knoppys.co.uk and fill in the form and Ill get back to you. 
