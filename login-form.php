<form class="login" method="post" action="<?php bb_uri( 'bb-login.php', null, BB_URI_CONTEXT_FORM_ACTION + BB_URI_CONTEXT_BB_USER_FORMS ); ?>">
	<p>
        <a href="<?php bb_uri('register.php'); ?>" title="Register">Register</a>
        or 
        <a href="<?php bb_uri('bb-login.php'); ?>" title="Register">Login</a>
	</p>
	
	<div class="login-labels">
		<label>
			<?php _e('Username'); ?><br />
			<input name="user_login" type="text" id="quick_user_login" size="13" maxlength="40" value="<?php if (!is_bool($user_login)) echo $user_login; ?>" tabindex="1" />
		</label>
		<label>
			<?php _e( 'Password' ); ?><br />
			<input name="password" type="password" id="quick_password" size="13" maxlength="40" tabindex="2" />
		</label>
		<input name="re" type="hidden" value="<?php echo $re; ?>" />
		<?php wp_referer_field(); ?>

		<input type="submit" name="Submit" class="submit" value="<?php echo esc_attr__( 'Log in &raquo;' ); ?>" tabindex="4" />
	</div><!-- /.login-label -->

	<div class="remember">
		<label>
			<input name="remember" type="checkbox" id="quick_remember" value="1" tabindex="3"<?php echo $remember_checked; ?> />
			<?php _e('Remember me'); ?>
	        <a href="<?php bb_uri('bb-login.php'); ?>" title="Register">forgot password?</a>
		</label>
	</div><!-- /.remember -->

</form><!-- /.login -->