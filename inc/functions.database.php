<?php
$queries = '';
function db_query($query) {
    global $link, $queries;


    $time0 = microtime(true);
    $result = mysqli_query($link, $query);
    $time1 = microtime(true);
    $elapsed = $time1 - $time0;
    if(TEST)
        $queries .= $query.' '.$elapsed."\n";
    if(!$result)
        error_page("Database error: ".mysqli_error($link).(TEST ? '<br/>Query: '.$query : ''));
    else
        return $result;
}
function db_escape_string($string) {
    global $link;
    return mysqli_real_escape_string($link, $string);
}
function db_insert_id() {
    global $link;
    return mysqli_insert_id($link);
}
function db_result($result, $row, $field=0) {
    $result->data_seek($row);
    $datarow = $result->fetch_array();
    return $datarow[$field];
}
function db_debug() {
    global $queries;
    if(TEST) {
        echo '<!-- '.$queries.' -->';
    }
}
?>