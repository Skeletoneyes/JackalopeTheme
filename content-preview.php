<?php
if ($i==0)
{
echo "<div class='post first'>";
}
else
{
echo "<div class='post'>";
}
?>
	<?php $link = get_permalink(); ?>

	<a href="<?php echo $link ?>">
		<div class='postimg'>
			<?php the_post_thumbnail(); ?>
		</div>
	</a>
	
	<p>
		<?php the_title(); ?>
	</p>
	<span class='post-tags'>
		<?php 
			$tags = get_the_tags();
			$count = count($tags);
			$j = 0;
			$phrase = '';
			foreach ($tags as $tag)
			{
				if ($j+1 == $count) {
					$phrase = $tag->name;
					echo $phrase;
				}
				else {
					$phrase =  $tag->name.", ";
					echo $phrase;
					$j ++;
				}
				next($tags);
			}

		?>
	</span>
	
	<?php
	//var_dump ($link);
	//echo $link;
	?>
</div>
