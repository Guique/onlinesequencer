<noscript><div class="sitemessage">This site requires JavaScript to be enabled in your browser settings to work properly.</div></noscript>
	<div id="container">
		<div id="header">
            <?php /*<div id="banner">
                <!-- Project Wonderful Ad Box Code -->
                <div id="pw_adbox_73955_1_0"></div>
                <script type="text/javascript"></script>
                <noscript><map name="admap73955" id="admap73955"><area href="http://www.projectwonderful.com/out_nojs.php?r=0&c=0&id=73955&type=1" shape="rect" coords="0,0,468,60" title="" alt="" target="_blank" /></map>
                <table cellpadding="0" cellspacing="0" style="width:468px;border-style:none;background-color:#ffffff;"><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=73955&type=1" style="width:468px;height:60px;border-style:none;" usemap="#admap73955" alt="" /></td></tr><tr><td style="background-color:#ffffff;" colspan="1"><center><a style="font-size:10px;color:#0000ff;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=73955&type=1" target="_blank">Ads by Project Wonderful!  Your ad here, right now: $0</a></center></td></tr></table>
                </noscript>
                <!-- End Project Wonderful Ad Box Code -->
            </div> */ ?>
            <div id="login">
<?php
if(defined('MOBILE_BROWSER') && MOBILE_BROWSER) {
    echo 'Mobile site is incomplete.<br/><a href="?desktop=true">Desktop site (for tablets)</a>';
}
?>
<!--<?php
$count = get_var(V_NUM_SEQUENCES);
echo 'Hosting '.number_format($count).' sequences since 2013 &middot; <a href="http://reddit.com/r/onlinesequencer" target="_blank">Find us on reddit!</a>';
?>-->
<a href="http://buildism.net/mc" target="_blank"><img style="position: absolute; right: 0" src="http://buildism.net/mc/banner.png" width="400" height="60" /></a>
</div>
<div id="nav">
				<ul>
                    <li id="logo"><a href="/">Online Sequencer</a></li>
<?php
if(!function_exists('showNavLink'))
{
    function showNavLink($url, $name, $extra="")
    {
        $class = stristr($_SERVER["REQUEST_URI"], $url) ? ' class="active"' : '';
        echo '<li'.$class.'><a href="'.$url.'"'.$extra.'>'.$name.'</a></li>';
    }
}
showNavLink('/sequences', 'All Sequences');
showNavLink('/import', 'Import MIDI');
showNavLink('/app/sequencer.php?frame=1&id='.(isset($id)?$id:'0'), 'Full Screen View');
showNavLink('javascript:;', 'Chat', ' onclick="showChat();"');
showNavLink('/forum/', 'Forum');
showNavLink('/experiments', 'Experiments');
?>
</ul>
<div id="bar">
    <div style="float:right; padding-right: 10px;">
        <div id="user_guest" style="display: <?php echo $settings['isLoggedIn'] ? 'none' : 'block'; ?>">
            <div id="login_fields">
                <input type="text" id="username" name="username" />
                <input type="password" id="password" name="password" />
            </div>
            <a id="login_button" class="linkbutton" href="javascript:;">Login</a> 
            <a id="registerbutton" class="linkbutton" href="/forum/member.php?action=register__" target="_blank">Register</a>
            </span>
        </div>
        <div id="user_member" style="display: <?php echo $settings['isLoggedIn'] ? 'block' : 'none'; ?>">
            Welcome back <span id="member_username"><?php echo $settings['username']; ?></span>! <a id="member_logout" class="linkbutton" href="javascript:;">Log out</a>
        </div>

        <div id="affiliate_link">Professional sequencing software: <a href="http://www.amazon.com/gp/product/B00CHZG1FE/ref=as_li_tf_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B00CHZG1FE&linkCode=as2&tag=onlinseque-20">FL Studio</a><img src="http://ir-na.amazon-adsystem.com/e/ir?t=onlinseque-20&l=as2&o=1&a=B00CHZG1FE" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" /></div>
    </div>
    <span id="nav_right"><?php if(isset($nav_right)) echo $nav_right; ?></span>
</div>
			</div>
		</div>
        
		<div id="main">
		<div id="page_bg"></div>
			<div id="page" <?php if(!function_exists('show_left')) echo ' style="width: 100%"'; ?>>
			<?php if(function_exists('show_left')) { ?>
			<div id="page_left">
			<?php show_left(); ?>
			</div>
			<?php } ?>
			<div id="page_right"<?php if(!function_exists('show_left')) echo ' style="width: 100%;"'; ?>>
