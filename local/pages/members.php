<?php
mod("pager");
$user = mysqli_fetch_array(db_query('SELECT * FROM mybb_users WHERE uid="'.$id.'"'));
$gp = pager_init(66);
$where = ' WHERE owner="'.$id.'" AND deleted=0 ';
$order = "date DESC";
$countQuery = 'SELECT COUNT(*) AS count FROM sequences'.$where;
$count = db_result(db_query($countQuery), 0);

function show_left() {
    global $user, $count;
	output_block_start('Profile for '.$user['username']);
    echo 'Member since '.date('Y-m-d', $user['regdate']).'<br/>'.number_format($count).' sequences';
	output_block_end();
}

function display_seq($row) {
	echo '<div class="game"><a href="/'.$row['id'].'">'.preview($row['id'], $row['title']).'</a></div>';
}

output_header('Sequences');
output_block_start('Sequences');
pager_display($gp, 'SELECT * FROM sequences'.$where.' ORDER BY '.$order, $countQuery, 'count', 'display_seq');
output_clear();
output_block_end();
output_footer();
?>
