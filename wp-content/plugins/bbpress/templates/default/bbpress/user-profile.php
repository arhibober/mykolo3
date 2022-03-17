<?php

/**
 * User Profile
 *
 * @package bbPress
 * @subpackage Theme
 */
 global $user_ID;
 if ($user_ID == 0)
 header ("Location: http://localhost/mykolo3");

?>

	<?php /*do_action( 'bbp_template_before_user_profile' );*/ ?>

	<div id="bbp-user-profile" class="bbp-user-profile">
		<h2 class="entry-title"><?php _e( "Members' data", 'bbpress' ); ?></h2>
		<div class="bbp-user-section">

			<?php /*if ( bbp_get_displayed_user_field( 'description' ) ) : ?>

				<p class="bbp-user-description"><?php bbp_displayed_user_field( 'description' ); ?></p>

			<?php endif;*/ ?>

				
			<?php
			global $wpdb, $user_ID;
			$sqlstr = "SELECT user_email from wp_users where ID=".$user_ID;		
		$user_email = $wpdb->get_results($sqlstr, ARRAY_A);
		if ($user_ID > 0){
		echo "<p class='bbp-user-reply-count'>". __("e-mail").": ".$user_email [0]["user_email"]."</p>";
		}
		if ($user_ID > 1)
		{
			$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='first_name' and user_id=".$user_ID;		
		$first_name = $wpdb->get_results($sqlstr, ARRAY_A);
		echo "<p class='bbp-user-reply-count'>". __("First Name").": ".$first_name [0]["meta_value"]."</p>";			
			$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='last_name' and user_id=".$user_ID;		
		$last_name = $wpdb->get_results($sqlstr, ARRAY_A);
		echo "<p class='bbp-user-reply-count'>". __("Last Name").": ".$last_name [0]["meta_value"]."</p>";		
			$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='role' and user_id=".$user_ID;		
		$role = $wpdb->get_results($sqlstr, ARRAY_A);
		echo "<p class='bbp-user-reply-count'>". __("Role").": ".__($role [0]["meta_value"])."</p>";
			$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='phone' and user_id=".$user_ID;		
		$phone = $wpdb->get_results($sqlstr, ARRAY_A);
		echo "<p class='bbp-user-reply-count'>". __("Телефон").": ".$phone [0]["meta_value"]."</p>";
			$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='add_data' and user_id=".$user_ID;		
		$add_data = $wpdb->get_results($sqlstr, ARRAY_A);
		if (strlen ($add_data [0]["meta_value"] > 0))
		echo "<p class='bbp-user-reply-count'>". __("Additional data").": ".$add_data [0]["meta_value"]."</p>";
		}
			?>
		</div>
	</div><!-- #bbp-author-topics-started -->

	<?php do_action( 'bbp_template_after_user_profile' ); ?>
