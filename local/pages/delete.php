<?php
$owner = db_result(db_query('SELECT owner FROM sequences WHERE id="'.$id.'" LIMIT 1'), 0);
if(isAdmin() || ($owner != 0 && $owner == $settings['uid'])) {
    db_query('UPDATE sequences SET deleted=1 WHERE id="'.$id.'"');
    header('Location: /');
}
?>