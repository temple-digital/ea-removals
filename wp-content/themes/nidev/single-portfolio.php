<?php
get_header();

$title = get_the_title();
$spec = get_field('specifications');
$description = get_field('description');

?>
<?php /*
<section class="section bg--white">
	<div class="container">
		<div class="col-wrapper clearfix">
			<div class="col--100">
				<div class="text">

				</div>
			</div>
		</div>
	</div>
</section>

<section class="section bg--white">
	<div class="container">
		<div class="col-wrapper clearfix">
			<div class="col--50">
				<div class="text">
					<h2><?php echo $title; ?></h2>
					<?php echo $spec ?>
					<a href="#">Visit Site</a>
				</div>
			</div>

			<div class="col--50">
				<div class="text">
					<?php echo $description ?>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="section section--recent-posts bg--white">
	<div class="container">
		<div class="col-wrapper clearfix">
            <div class="col--25">
                <div class="text">
					<p>Similar post</p>
                </div>
            </div>

			<div class="col--25">
                <div class="text">
					<p>Similar post</p>
                </div>
            </div>

			<div class="col--25">
                <div class="text">
					<p>Similar post</p>
                </div>
            </div>

			<div class="col--25">
                <div class="text">
					<p>Similar post</p>
                </div>
            </div>
		</div>
	</div>
</section>

*/ ?>


<?php
get_footer();
