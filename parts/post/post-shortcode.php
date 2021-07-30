<?php

/**
 * Post Shordcode.
 *
 * @link       https://wprashed.com/
 * @since      1.0.0
 *
 * @package    Ml_Guest_Post
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register Post shortcodes
 *
 * @return null
 */
function ml_guest_post_register_shortcodes() {
    add_shortcode( 'mlgp-post', 'shortcode_ml_guest_post' );
}
add_action( 'init', 'ml_guest_post_register_shortcodes' );

/**
 * Post Shortcode Callback
 * 
 * @param Array $atts
 *
 * @return string
 */

function shortcode_ml_guest_post( $atts ) {
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
 
  $args = array( 
			   'post_type' => 'cratings', 
               'paged' => $paged
             );
			 
$customPostQuery = new WP_Query($args);


?> 

<!-- Step 2: Display the Posts we Queried in the Step 1 -->

<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="heading-section mb-1">Customer Ratings</h2>
					</div>
					<div class="col-md-12">
						<div class="featured-carousel owl-carousel">
		
			<?php
			
			    if($customPostQuery->have_posts() ): 
			
                while($customPostQuery->have_posts()) :
                   
				$customPostQuery->the_post();
					       
                global $post;
            ?>

			<div class="item">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="testimony-wrap row">
							<div class="col-lg-5 p-4 py-xl-4 px-xl-4">
							<table class="table table-borderless">
								<tr>
									<th>Client Name</th>
									<td><?php the_title(); ?></td>
								</tr>
								<tr>
									<th>Project Name</th>
									<td><?php echo get_post_meta(get_the_ID(),'project_name', true); ?></td>
								</tr>
							</table>
								<?php the_content(); ?>
							</div>
							<div class="col-lg-7 p-4 py-xl-4 px-xl-4 d-flex">
								<div class="desc w-100">
									<table class="table table-borderless">
										<tr>
											<th>
											Marketing approch
											</th>
											<td>
											<?php
											$cr_one = get_post_meta(get_the_ID(),'cr_one', true); 
											?>
											<img src="<?php echo plugins_url("img/1.png",__FILE__); ?>" class="image <?php if ($cr_one == 1){ echo 'ngray';} else{ echo 'gray'; } ?>">
											<img src="<?php echo plugins_url("img/2.png",__FILE__); ?>" class="image <?php if ($cr_one == 2){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/3.png",__FILE__); ?>" class="image <?php if ($cr_one == 3){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/4.png",__FILE__); ?>" class="image <?php if ($cr_one == 4){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/5.png",__FILE__); ?>" class="image <?php if ($cr_one == 5){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											</td>
										</tr>
										<tr>
											<th>
											Enquiriy, acknowledgemnt
											</th>
											<td>
											<?php
											$cr_two = get_post_meta(get_the_ID(),'cr_two', true); 
											?>
											<img src="<?php echo plugins_url("img/1.png",__FILE__); ?>" class="image <?php if ($cr_two == 1){ echo 'ngray';} else{ echo 'gray'; } ?>">
											<img src="<?php echo plugins_url("img/2.png",__FILE__); ?>" class="image <?php if ($cr_two == 2){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/3.png",__FILE__); ?>" class="image <?php if ($cr_two == 3){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/4.png",__FILE__); ?>" class="image <?php if ($cr_two == 4){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/5.png",__FILE__); ?>" class="image <?php if ($cr_two == 5){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											</td>
										</tr>
										<tr>
											<th>
											Bid Submission and Technical Evaluation
											</th>
											<td>
											<?php
											$cr_three = get_post_meta(get_the_ID(),'cr_three', true); 
											?>
											<img src="<?php echo plugins_url("img/1.png",__FILE__); ?>" class="image <?php if ($cr_three == 1){ echo 'ngray';} else{ echo 'gray'; } ?>">
											<img src="<?php echo plugins_url("img/2.png",__FILE__); ?>" class="image <?php if ($cr_three == 2){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/3.png",__FILE__); ?>" class="image <?php if ($cr_three == 3){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/4.png",__FILE__); ?>" class="image <?php if ($cr_three == 4){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/5.png",__FILE__); ?>" class="image <?php if ($cr_three == 5){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											</td>
										</tr>
										<tr>
											<th>
											Tender Result Followup
											</th>
											<td>
											<?php
											$cr_four = get_post_meta(get_the_ID(),'cr_four', true); 
											?>
											<img src="<?php echo plugins_url("img/1.png",__FILE__); ?>" class="image <?php if ($cr_four == 1){ echo 'ngray';} else{ echo 'gray'; } ?>">
											<img src="<?php echo plugins_url("img/2.png",__FILE__); ?>" class="image <?php if ($cr_four == 2){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/3.png",__FILE__); ?>" class="image <?php if ($cr_four == 3){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/4.png",__FILE__); ?>" class="image <?php if ($cr_four == 4){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/5.png",__FILE__); ?>" class="image <?php if ($cr_four == 5){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											</td>
										</tr>
										<tr>
											<th>
											Design and engineering Technical Submittals
											</th>
											<td>
											<?php
											$cr_five = get_post_meta(get_the_ID(),'cr_five', true); 
											?>
											<img src="<?php echo plugins_url("img/1.png",__FILE__); ?>" class="image <?php if ($cr_five == 1){ echo 'ngray';} else{ echo 'gray'; } ?>">
											<img src="<?php echo plugins_url("img/2.png",__FILE__); ?>" class="image <?php if ($cr_five == 2){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/3.png",__FILE__); ?>" class="image <?php if ($cr_five == 3){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/4.png",__FILE__); ?>" class="image <?php if ($cr_five == 4){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/5.png",__FILE__); ?>" class="image <?php if ($cr_five == 5){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											</td>
										</tr>
										<tr>
											<th>
											Quality of Mobalization
											</th>
											<td>
											<?php
											$cr_six = get_post_meta(get_the_ID(),'cr_six', true); 
											?>
											<img src="<?php echo plugins_url("img/1.png",__FILE__); ?>" class="image <?php if ($cr_six == 1){ echo 'ngray';} else{ echo 'gray'; } ?>">
											<img src="<?php echo plugins_url("img/2.png",__FILE__); ?>" class="image <?php if ($cr_six == 2){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/3.png",__FILE__); ?>" class="image <?php if ($cr_six == 3){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/4.png",__FILE__); ?>" class="image <?php if ($cr_six == 4){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/5.png",__FILE__); ?>" class="image <?php if ($cr_six == 5){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											</td>
										</tr>
										<tr>
											<th>
											Professionalism& Courtesy of Staff
											</th>
											<td>
											<?php
											$cr_seven = get_post_meta(get_the_ID(),'cr_seven', true); 
											?>
											<img src="<?php echo plugins_url("img/1.png",__FILE__); ?>" class="image <?php if ($cr_seven == 1){ echo 'ngray';} else{ echo 'gray'; } ?>">
											<img src="<?php echo plugins_url("img/2.png",__FILE__); ?>" class="image <?php if ($cr_seven == 2){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/3.png",__FILE__); ?>" class="image <?php if ($cr_seven == 3){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/4.png",__FILE__); ?>" class="image <?php if ($cr_seven == 4){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/5.png",__FILE__); ?>" class="image <?php if ($cr_seven == 5){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											</td>
										</tr>
										<tr>
											<th>
											Work Crew Support
											</th>
											<td>
											<?php
											$cr_eight = get_post_meta(get_the_ID(),'cr_eight', true); 
											?>
											<img src="<?php echo plugins_url("img/1.png",__FILE__); ?>" class="image <?php if ($cr_eight == 1){ echo 'ngray';} else{ echo 'gray'; } ?>">
											<img src="<?php echo plugins_url("img/2.png",__FILE__); ?>" class="image <?php if ($cr_eight == 2){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/3.png",__FILE__); ?>" class="image <?php if ($cr_eight == 3){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/4.png",__FILE__); ?>" class="image <?php if ($cr_eight == 4){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/5.png",__FILE__); ?>" class="image <?php if ($cr_eight == 5){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											</td>
										</tr>
										<tr>
											<th>
											Safety and Environmental Support
											</th>
											<td>
											<?php
											$cr_nine = get_post_meta(get_the_ID(),'cr_nine', true); 
											?>
											<img src="<?php echo plugins_url("img/1.png",__FILE__); ?>" class="image <?php if ($cr_nine == 1){ echo 'ngray';} else{ echo 'gray'; } ?>">
											<img src="<?php echo plugins_url("img/2.png",__FILE__); ?>" class="image <?php if ($cr_nine == 2){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/3.png",__FILE__); ?>" class="image <?php if ($cr_nine == 3){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/4.png",__FILE__); ?>" class="image <?php if ($cr_nine == 4){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/5.png",__FILE__); ?>" class="image <?php if ($cr_nine == 5){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											</td>
										</tr>
										<tr>
											<th>
											Team Availability during waranty and Maintainance
											</th>
											<td>
											<?php
											$cr_ten = get_post_meta(get_the_ID(),'cr_ten', true); 
											?>
											<img src="<?php echo plugins_url("img/1.png",__FILE__); ?>" class="image <?php if ($cr_ten == 1){ echo 'ngray';} else{ echo 'gray'; } ?>">
											<img src="<?php echo plugins_url("img/2.png",__FILE__); ?>" class="image <?php if ($cr_ten == 2){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/3.png",__FILE__); ?>" class="image <?php if ($cr_ten == 3){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/4.png",__FILE__); ?>" class="image <?php if ($cr_ten == 4){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/5.png",__FILE__); ?>" class="image <?php if ($cr_ten == 5){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											</td>
										</tr>
										<tr>
											<th>
											Handing Over and Closing Process
											</th>
											<td>
											<?php
											$cr_eleven = get_post_meta(get_the_ID(),'cr_eleven', true); 
											?>
											<img src="<?php echo plugins_url("img/1.png",__FILE__); ?>" class="image <?php if ($cr_eleven == 1){ echo 'ngray';} else{ echo 'gray'; } ?>">
											<img src="<?php echo plugins_url("img/2.png",__FILE__); ?>" class="image <?php if ($cr_eleven == 2){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/3.png",__FILE__); ?>" class="image <?php if ($cr_eleven == 3){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/4.png",__FILE__); ?>" class="image <?php if ($cr_eleven == 4){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/5.png",__FILE__); ?>" class="image <?php if ($cr_eleven == 5){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											</td>
										</tr>
										<tr>
											<th>
											Overall Impression on ALAFAQ
											</th>
											<td>
											<?php
											$cr_twel = get_post_meta(get_the_ID(),'cr_twel', true); 
											?>
											<img src="<?php echo plugins_url("img/1.png",__FILE__); ?>" class="image <?php if ($cr_twel == 1){ echo 'ngray';} else{ echo 'gray'; } ?>">
											<img src="<?php echo plugins_url("img/2.png",__FILE__); ?>" class="image <?php if ($cr_twel == 2){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/3.png",__FILE__); ?>" class="image <?php if ($cr_twel == 3){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/4.png",__FILE__); ?>" class="image <?php if ($cr_twel == 4){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											<img src="<?php echo plugins_url("img/5.png",__FILE__); ?>" class="image <?php if ($cr_twel == 5){ echo 'ngray';} else{ echo 'gray'; }  ?>">
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
						  
			<?php endwhile; 
			
	     endif; 
			 wp_reset_query();
			 
	 echo '</div></div></div></div></section>';
	if (function_exists("cpt_pagination")) {
				
		cpt_pagination($customPostQuery->max_num_pages); 
				  
	 }
}