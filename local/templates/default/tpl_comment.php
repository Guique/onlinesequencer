<div class="comment">
<div class="commentuser">
<div class="userrow" id="u<?php echo $author; ?>">
<div class="characterrow" style="background-image:url(<?php echo get_avatar_url($author_name); ?>)"></div>
<div class="namerow"><a href="<?php echo $author_url; ?>"><?php echo $author_name; ?></a></div>
</div>
</div>
<div class="commenttext">
<em title="Comment #<?php echo $id; ?>">Posted on <?php echo $date; ?></em> 
<p>
<?php echo $text; ?>
</p>
</div>
<?php output_clear(); ?>
</div>