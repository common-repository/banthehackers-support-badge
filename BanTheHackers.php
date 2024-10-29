<?php
/*
Plugin Name: BanTheHackers Support Badge
Plugin URI: http://BanTheHackers.tk/Extras
Description: Show your support for BanTheHackers with a drop down badge.
Version: 1.0.2
Author: BanTheHackers
Author URL: http://banthehackers.tk
*/
?>
<?php
function badger() {
    echo '<div class="bth">
<a href="http://banthehackers.tk"><img src="http://banthehackers.tk/wp-content/uploads/Site/BTHSupport.png" border=0 /></a>
</div><link href="http://banthehackers.tk/wp-content/uploads/Site/bth.css" rel=stylesheet type="text/css">';
}
add_action('wp_head', 'badger');
?>