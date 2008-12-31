<?php
/*
Plugin Name: Free Kareem
Plugin URI: http://semperfiwebdesign.com/plugins/free-kareem/
Description: Help support free speech.  Fight the inprisonment of jailed blogger!
Author: Michael Torbert
Version: .4.5
Author URI: http://semperfiwebdesign.com/
*/

/*
Copyright (C) 2008 semperfiwebdesign.com (michael AT semperfiwebdesign DOT com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once(ABSPATH."wp-content/plugins/free-kareem/options.php");
require_once(ABSPATH."wp-content/plugins/free-kareem/database.php");
require_once(ABSPATH."wp-content/plugins/free-kareem/functions.php");


add_action("plugins_loaded", "mrt_kareem_widget_init");
register_activation_hook(__FILE__,'mrt_kareem_install');

function mrt_kareem_guts_widget()
{  ?>

<?php
$img_path ='http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . 'wp-content/plugins/free-kareem/images/';
$plugin_path = 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] . 'wp-content/plugins/free-kareem/';
?>
<br />
<strong>ALERT!! Serious social and political injustice.  Please take action now.  A blogger exercising his freedom of speech has been imprisoned and needs YOUR help.</strong>

<br />
<br />

Find out more information by clicking on the links below!<br /><br />

<a href="http://www.facebook.com/group.php?sid=ad4141412fa7b83f39672b4359fb5531&refurl=http%3A%2F%2Fwww.facebook.com%2Fs.php%3Finit%3Dq%26q%3Dfreekareem.org%26ref%3Dts%26sid%3Dad4141412fa7b83f39672b4359fb5531&gid=10271643891" title="Free Kareem Facebook"><img src="<?php echo $img_path ?>facebook.png" width="75px"/></a>


<a href="http://www.myspace.com/abdelkareem" title="Free Kareem MySpace"><img src="<?php echo $img_path ?>myspace.png" width="75px"/></a>


<a href="http://www.youtube.com/profile_favorites?user=freekareem" title="Free Kareem Youtube"><img src="<?php echo $img_path ?>youtube.png" width="75px"/></a>

<br />
<br />
<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_xclick">
						<input type="hidden" name="business" value="chrisk@freekareem.org">
						<input type="hidden" name="item_name" value="Donate to Free Kareem">
						<input type="hidden" name="currency_code" value="USD">
						<input type="hidden" name="amount" value="">
						<input type="image" src="http://www.paypal.com/en_US/i/btn/x-click-butcc-donate.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
					</form>

<br />

<a href="<?php echo $plugin_path?>reqform.php" target="page" onClick="window.open('','page','toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=550,height=480,left=50,top=50,titlebar=yes')"><img src="<?php echo $img_path ?>tellfriend.png" /></a>

<br />					

<a href="http://wordpress.org/extend/plugins/free-kareem/" title="Free Kareem Plugin">Download</a> this plugin!

<form name='mrt_sub_form' id='mrt_sub_form' method='POST' action='<?= "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . "?" . $_SERVER['QUERY_STRING'] ?>'>
</form>
<?php }


//add_action('admin_menu', 'mrt_kareem_add_menu');

/*function mrt_add_menu() {
   add_menu_page('SMS Text Message', 'SMS Text Message', 8, __FILE__, 'mrt_sms_main_control');
   add_submenu_page(__FILE__, 'Options', 'Options', 8, 'Options', 'mrt_sms_options_page');
   add_submenu_page(__FILE__, 'Subscribers', 'Subscribers', 8, 'Subscribers', 'mrt_sms_subscribers_page');
   add_submenu_page(__FILE__, 'Support', 'Support', 8, 'Support', 'mrt_sms_support_page');
}*/

/*function mrt_sms_main_control() {
} */?>
