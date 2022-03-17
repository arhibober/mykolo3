<?php
/*
Template Name: Зарегистрированные участники
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
					<?php 
						echo "<table><tr><td>". __("Username: ")."</td><td>". __("Email: ")."</td><td>". __("Name: ")."</td><td>". __("Surname: ")."</td><td>". __("Registration Code: ")."</td></tr>";
						global $wpdb, $user_ID;			
						$sqlstr = "SELECT ID from wp_users";
						$users = $wpdb->get_results($sqlstr, ARRAY_A);
						foreach ($users as $user)
						if ($user ["ID"] > 1)
						{
echo "<tr>";						
						$sqlstr = "SELECT user_login from wp_users where ID=".$user ["ID"];
						$user_login = $wpdb->get_results($sqlstr, ARRAY_A);
						echo "<td>".$user_login [0]["user_login"]."</td>";
						$sqlstr = "SELECT user_email from wp_users where ID=".$user ["ID"];
						$user_email = $wpdb->get_results($sqlstr, ARRAY_A);
						echo "<td>".$user_email [0]["user_email"]."</td>";
						$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='first_name' and user_id=".$user ["ID"];
						$first_name = $wpdb->get_results($sqlstr, ARRAY_A);
						echo "<td>".$first_name [0]["meta_value"]."</td>";			
							$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='last_name' and user_id=".$user ["ID"];		
						$last_name = $wpdb->get_results($sqlstr, ARRAY_A);	
						echo "<td>".$last_name [0]["meta_value"]."</td>";		
							$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='user_registration_code' and user_id=".$user ["ID"];		
						$user_registration_code = $wpdb->get_results($sqlstr, ARRAY_A);
						echo "<td>".$user_registration_code [0]["meta_value"]."</td></tr>";
						}
						echo "</table>";
					?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->



		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>