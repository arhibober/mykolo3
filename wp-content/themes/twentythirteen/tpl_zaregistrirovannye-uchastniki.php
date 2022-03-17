<?php
/*
Template Name: Зарегистрированные участники
*/

get_header();
if ($_GET ["loggedout"] == "true")
  header ("Location: /");
 ?>

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
						echo "<table><tr><th width='40px'>№</th><th width='140px'>". __("First Name").":</th><th width='140px'>". __("Last Name").":</th><th width='140px'>". __("e-mail").":</th><th width='140px'>". __("Role").":</th><th width='140px'>". __("Phone").":</th><th>". __("Additional data").":</th></tr>";
						global $wpdb, $user_ID;			
						$sqlstr = "SELECT ID from wp_users";
						$users = $wpdb->get_results($sqlstr, ARRAY_A);
						$i = 0;
						foreach ($users as $user)
						if ($user ["ID"] > 1)
						{
						$i++;
echo "<tr>";		
						$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='first_name' and user_id=".$user ["ID"];
						$first_name = $wpdb->get_results($sqlstr, ARRAY_A);
						echo "<td valign='top'>".$i."</td><td valign='top'>".$first_name [0]["meta_value"]."</td>";			
							$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='last_name' and user_id=".$user ["ID"];		
						$last_name = $wpdb->get_results($sqlstr, ARRAY_A);	
						echo "<td valign='top'>".$last_name [0]["meta_value"]."</td>";	
						$sqlstr = "SELECT user_email from wp_users where ID=".$user ["ID"];
						$user_email = $wpdb->get_results($sqlstr, ARRAY_A);
						echo "<td valign='top'>".$user_email [0]["user_email"]."</td>";		
							$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='role' and user_id=".$user ["ID"];		
						$role = $wpdb->get_results($sqlstr, ARRAY_A);
						echo "<td valign='top'>".__($role [0]["meta_value"])."</td>";		
							$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='phone' and user_id=".$user ["ID"];		
						$phone = $wpdb->get_results($sqlstr, ARRAY_A);
						echo "<td valign='top'>".$phone [0]["meta_value"]."</td>";		
							$sqlstr = "SELECT meta_value from wp_usermeta where meta_key='add_data' and user_id=".$user ["ID"];		
						$add_data = $wpdb->get_results($sqlstr, ARRAY_A);
						if (strlen ($add_data > 0))
						echo "<td valign='top'>".$add_data [0]["meta_value"]."</td>
						</tr>";
						else
						echo "<td>&nbsp;</td>
						</tr>";
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