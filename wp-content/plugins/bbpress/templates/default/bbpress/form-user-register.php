<?php

/**
 * User Registration Form
 *
 * @package bbPress
 * @subpackage Theme
 */
$curlang = get_bloginfo('language');
?>
<script>
function InvalidMsg_ua(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('Некоректна адреса e-mail!');
    }
    else if (textbox.validity.typeMismatch){
        textbox.setCustomValidity('please enter a valid email address');
    }
    else {
       textbox.setCustomValidity('');
    }
    return true;
}
function InvalidMsg_ru(textbox) {
    if (textbox.value == '') {
        textbox.setCustomValidity('Некорректный адрес email!');
    }
    else if (textbox.validity.typeMismatch){
        textbox.setCustomValidity('please enter a valid email address');
    }
    else {
       textbox.setCustomValidity('');
    }
    return true;
}

</script>
<form method="post" action="<?php bbp_wp_login_action( array( 'context' => 'login_post' ) ); ?>" class="bbp-login-form">
	<fieldset class="bbp-form">
		<legend><?php _e( 'Create an Account', 'bbpress' ); ?></legend>

		<div class="bbp-template-notice">
		

		</div>

		<div class="bbp-email">
			<label for="user_email"><?php _e( 'e-mail', 'bbpress' ); ?>* : </label>
			<input type="email" <?php if($curlang == "ru-RU") {
		echo "oninvalid='InvalidMsg_ru(this)'";
	}else {
		echo "oninvalid='InvalidMsg_ua(this)'";
	}
			?>oninvalid="InvalidMsg(this);" name="user_email" value="<?php bbp_sanitize_val( 'user_email' ); ?>" size="20" id="user_email" tabindex="<?php bbp_tab_index(); ?>" required />
		</div>

		<div class="bbp-first-name">
			<label for="user_first_name"><?php _e( 'First Name', 'bbpress' ); ?>* : </label>
			<input type="text" name="user_first_name" value="<?php bbp_sanitize_val( 'user_first_name' ); ?>" size="20" id="user_first_name" tabindex="<?php bbp_tab_index(); ?>" required />
		</div>

		<div class="bbp-last-name">
			<label for="user_last_name"><?php _e( 'Last Name', 'bbpress' ); ?>* : </label>
			<input type="text" name="user_last_name" value="<?php bbp_sanitize_val( 'user_last-name' ); ?>" size="20" id="user_last_name" tabindex="<?php bbp_tab_index(); ?>" required />
		</div>

		<div class="bbp-role">
			<label for="role"><?php _e( 'Role', 'bbpress' 	); ?>: </label>
			<input type="radio" name="role" value="guest" checked><?php _e('Guest', 'bbpress' ); ?>
			<br>
			<input type="radio" name="role" value="member"><?php _e('Member', 'bbpress' ); ?>
		</div>
		<div class="bbp-phone">
			<label for="phone"><?php _e( 'Phone', 'bbpress' 	); ?>* : </label>		
			<input type="tel" name="phone" value="<?php bbp_sanitize_val( 'Phone' ); ?>" size="20" id="phone" tabindex="<?php bbp_tab_index(); ?>" required />
		</div>
		<div class="bbp-add_data">
			<label for="phone"><?php _e( 'Additional data', 'bbpress' 	); ?>: </label>		
			<textarea name="add_data" value="<?php bbp_sanitize_val( 'Additional data' ); ?>" width="20" height="5" id="add_data" tabindex="<?php bbp_tab_index(); ?>" ></textarea>
		</div>
		<?php $adr_lang = substr ($_SERVER ['REQUEST_URI'], 1, 2); ?>
		<input type="hidden" value="<?php echo $adr_lang ?>" name="adress"/>

		<?php 
		

	do_action( 'register_form' ); ?>

		<div class="bbp-submit-wrapper">

			<button type="submit" tabindex="<?php bbp_tab_index(); ?>" name="user-submit" class="button submit user-submit"><?php _e( 'Register', 'bbpress' ); ?></button>

			<?php bbp_user_register_fields(); ?>

		</div>
	</fieldset>
</form>
