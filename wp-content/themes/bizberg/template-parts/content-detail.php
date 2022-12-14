<div class="detail-content single_page">

	<?php 
	if( has_post_thumbnail() ){

		echo '<div class="detail_image_wrapper">';

		$detail_page_category = bizberg_get_theme_mod( 'detail_page_category' );
		$post_cat =  bizberg_post_categories( $post , 1 , true , false );

		if( $post_cat != false && $detail_page_category == 'show' ){
			echo '<div class="bizberg_detail_cat">';
			echo wp_kses_post( $post_cat );
			echo '</div>';
		}	

		if( is_active_sidebar( 'sidebar-2' ) ){
			the_post_thumbnail( 'bizberg_detail_image' );
		} else {
			the_post_thumbnail( 'bizberg_detail_image_no_sidebar' );
		}		
		
		echo '</div>';

	} ?>

	<div class="bizberg_cocntent_wrapper">

		<?php 
		$date_status = bizberg_get_theme_mod( 'detail_page_post_date' );

		if( $date_status == 'show' ){ ?>
			<div class="bizberg_post_date">
				<a href="<?php echo esc_url( home_url() ); ?>/<?php echo esc_attr( date( 'Y/m' , strtotime( get_the_date() ) ) ); ?>">
					<?php echo esc_html( get_the_date() ); ?>
				</a> 
			</div>
			<?php 
		} ?>

		<h3 class="blog-title"><?php the_title(); ?></h3>

		<?php

		do_action( 'bizberg_before_single_content' , $post );

		the_content();

		do_action( 'bizberg_after_single_content' , $post );

		$author_link = bizberg_get_theme_mod( 'detail_page_author_link' ); 
		$comment_stats = bizberg_get_theme_mod( 'detail_page_comment_stats' );
		$comment_wrapper = '';

		if( $author_link == 'hide' && $comment_stats == 'hide' ){
			$comment_wrapper = 'display:none';
		} ?>

		<div class="bizberg_user_comment_wrapper" style="<?php echo esc_attr( $comment_wrapper ); ?>">
			
			<?php 
			if( $author_link == 'show' ){ ?>

				<div class="bizberg_detail_user_wrapper">			
					<a href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>"> 
						<i class="fa fa-user"></i> 
						<?php echo esc_html( bizberg_get_display_name( $post ) ); ?>		
					</a> 
				</div>

				<?php 
			} 

			if( $comment_stats == 'show' ){ ?>

				<div class="bizberg_detail_comment_count">
					<i class="fas fa-comments"></i>
					<?php echo absint( get_comments_number() ); ?>
				</div>

				<?php 

			} ?>

		</div>

	</div>

	<?php

	if( has_tag() ){
		echo '<div class="tag-cloud-wrapper clearfix mb-40">
			<div class="tag-cloud-heading">' . esc_html__( 'Tags :' , 'bizberg' ) . ' </div>
			<div class="tagcloud tags clearfix mt-5">';
			the_tags('','','');
			echo '</div>
		</div>';
	} ?>

	<?php 

	$author_info_status = bizberg_get_theme_mod( 'detail_page_author_section' );

	if( !is_attachment() ){  

		if( $author_info_status == 'show' ) { ?>

			<div class="blog-author">
				<div class="col-sm-3 blog-author-left col-xs-3">
					<?php 
					echo get_avatar( $post->post_author , 250 ); ?>
				</div>
				<div class="col-sm-9 blog-author-right col-xs-9">
					<h4>
						<a href="<?php echo esc_url( get_author_posts_url( $post->post_author ) ); ?>">
							<?php 
							echo '<span class="bizberg_author_label">';
							esc_html_e( 'Author : ' , 'bizberg' );
							echo '</span>';
							bizberg_get_display_name( $post );
							?>
						</a>
					</h4>
					<p><?php 
						$user_data = get_user_meta( $post->post_author );
						echo esc_html( $user_data['description'][0] );
						?>
					</p>
				</div>				
			</div>

			<?php 

		}

	} ?>
	
</div>