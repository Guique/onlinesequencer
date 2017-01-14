<?php
$datacache = array('users'=>array());
function parse_date($t) {
    global $userid;
    return date("m-d-Y H:i", $t);
}
function get_username($user) {
        global $datacache;
    if(array_key_exists($user, $datacache['names']))
        return $datacache['names'][$user];
    else
    {
        $name = db_result(db_query('SELECT username FROM mybb_users WHERE uid="'.$user.'" LIMIT 1'),0);
        if(!$name)
            $name = 'A Guest';
        $datacache['names'][$user] = $name;
        return $name;
    }
}
function player_link($uid, $name) {
    return '/forum/member.php?action=profile&uid='.$uid;
}
function pretty_time ($seconds) {
    $day = floor($seconds / (24 * 3600));
    $hs = floor($seconds / 3600 % 24);
    $ms = floor($seconds / 60 % 60);
    $sr = floor($seconds / 1 % 60);

    $hh = $hs;
    $mm = $ms;
    $ss = $sr;

    $time = '';
    if ($day != 0) { $time .= $day . ' days '; }
    else if ($hs  != 0) { $time .= $hh . ' hours ';  }
    else if ($ms  != 0) { $time .= $mm . ' minutes ';  }
    else {$time .= $ss . 's';}

    return $time;
}
?>