<?php
//SHORTCODES

//divider > creates a dotted lined horizontal divider
function divider_shortcode() { return '<div class="hdivider"> c </div>'; }
add_shortcode('divider', 'divider_shortcode');

function checkmark_shortcode() { return '<img src="http://neat-marketing.s3.amazonaws.com/landingpage-neat-digital-filing-system/check.png" /><br>'; }
add_shortcode('checkmark', 'checkmark_shortcode');

function xmark_shortcode() { return '<img src="http://neat-marketing.s3.amazonaws.com/landingpage-neat-digital-filing-system/no.png" /><br>'; }
add_shortcode('xmark', 'xmark_shortcode');

function jplayer_shortcode($atts) { 
   extract(shortcode_atts(array(
      'video' => 'http://d135rx5tgoegpl.cloudfront.net/videos/tutorials/getting-started.flv',
   ), $atts));
   //return $video;
   ob_start();
	include( get_template_directory().'/inc/jplayer-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('jplayer', 'jplayer_shortcode');


function extolewidget_shortcode($atts) { 
   extract(shortcode_atts(array(
      'zone' => 'homepage',
   ), $atts));
   return '<script type="extole/widget"> {"zone": "'.$zone.'"}</script>';
}
add_shortcode('extolewidget', 'extolewidget_shortcode');


function homefooter_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/homefooter-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('homefooter', 'homefooter_shortcode');

function homehero_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/homehero-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('homehero', 'homehero_shortcode');

function homeproductsholder_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/homeproductsholder-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('homeproductsholder', 'homeproductsholder_shortcode');


function homevideoblock_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/homevideoblock-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('homevideoblock', 'homevideoblock_shortcode');

function homevideoblockresponsive_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/homevideoblockresponsive-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('homevideoblockresponsive', 'homevideoblockresponsive_shortcode');

function homecycle_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/homecycle-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('homecycle', 'homecycle_shortcode');

function mailsocialresponsive_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/mailsocialresponsive-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('mailsocialresponsive', 'mailsocialresponsive_shortcode');


function businessbarresponsive_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/businessbarresponsive-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('businessbarresponsive', 'businessbarresponsive_shortcode');

add_shortcode('homecycle', 'homecycle_shortcode');
function usecasecycle_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/usecasecycle-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('usecasecycle', 'usecasecycle_shortcode');

// ------- These are for Solutions Pages ------ //


function solutions_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/solutions-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('solutions', 'solutions_shortcode');

//-- acces page ---//
function fubar_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/fubar-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('fubar', 'fubar_shortcode');


function id_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/id-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('id', 'id_shortcode');

function capture_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/capture-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('capture', 'capture_shortcode');

function organize_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/organize-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('organize', 'organize_shortcode');


function search_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/search-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('search', 'search_shortcode');


function finances_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/finances-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('finances', 'finances_shortcode');

function integrate_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/integrate-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('integrate', 'integrate_shortcode');

function collab_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/collab-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('collab', 'collab_shortcode');


function report_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/report-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('report', 'report_shortcode');

function neatverify_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/neatverify-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('neatverify', 'neatverify_shortcode');

function emailin_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/emailin-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('emailin', 'emailin_shortcode');


function contact_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/contact-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('contact', 'contact_shortcode');



function secure_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/secure-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('secure', 'secure_shortcode');



function benefits_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/benefits-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('benefits', 'benefits_shortcode');



function legal_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/legal-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('legal', 'legal_shortcode');

function smallbusiness_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/smallbusiness-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('smallbusiness', 'smallbusiness_shortcode');



function realestate_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/realestate-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('realestate', 'realestate_shortcode');



function accounting_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/accounting-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('accounting', 'accounting_shortcode');

function insurance_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/insurance-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('insurance', 'insurance_shortcode');







function hpwelcome_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/hpwelcome-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('hpwelcome', 'hpwelcome_shortcode');


function hpnom_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/hpnom-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('hpnom', 'hpnom_shortcode');


function hpnow_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/hpnow-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('hpnow', 'hpnow_shortcode');



function hpcc_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/hpcc-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('hpcc', 'hpcc_shortcode');

function neatlabs_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/neatlabs-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('neatlabs', 'neatlabs_shortcode');


function plans_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/plans-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('plans', 'plans_shortcode');



function advant_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/advant-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('advant', 'advant_shortcode');


function pcsoftware_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/pcsoftware-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('pcsoftware', 'pcsoftware_shortcode');


function macsoftware_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/macsoftware-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('macsoftware', 'macsoftware_shortcode');





























function desktopredirect_shortcode($atts) { 
   extract(shortcode_atts(array(
      'height' => '250',
	  'width' => '560',
	  'action' => '',
	  'openlink' => '',
	  'message' => '',
	  'sitecatalyst' => '',
   ), $atts));
   //return $video;
   ob_start();
	include( get_template_directory().'/inc/desktopredirect-shortcode.php' );
	$content = parse_shortcode_content( $content );
	return ob_get_clean();
}
add_shortcode('desktopredirect', 'desktopredirect_shortcode');

function violator_shortcode($atts) { 
   extract(shortcode_atts(array(
      'id' => 0,
   ), $atts));
   
   $productprefix = '';
	 
	//set id for scanners
	//$nr = 614;
	//$nd = 603;
	//$nc = 584;
	 
   global $post;
   if($id == 0){
	   $id = $post->ID;
	   $productprefix = "products-";
   }
   

   $promo = get_field('add_promotion', $id);
   $img = '';
   if($promo != ''){
	   $violatorUrl = "http://neat-marketing.s3.amazonaws.com/violators/".$productprefix.$promo."-orange.png";
	   $img = '<img src="'.$violatorUrl.'" class="sale-violator" />';
   }
   return $img;
}
add_shortcode('violator', 'violator_shortcode');


function strikethrough_shortcode($atts) { 
   extract(shortcode_atts(array(
      'id' => 0,
   ), $atts));
	 
   global $post;
   if($id == 0){
	   $id = $post->ID;
   }

   $promo = get_field('add_promotion', $id);
   $price = get_field('price', $id);
   
   $pricesplit = explode(".", $price);
   $dollars = $pricesplit[0];
   $cents = $pricesplit[1];
   
   $saveprice = preg_replace("/[^0-9]/","",$promo);

   $ispromotion = '';
   $html = '';
   if($promo != ''){
	   
	   $ispromotion = 'isPromotion';
		$newdollars = intval($dollars) - intval($saveprice);
		
	   $html = '<div class="originalPrice"><sup>$</sup>'.$dollars.'<sup>.'.$cents.'</sup> <img src="http://neat-marketing.s3.amazonaws.com/products-new/store-home/strikethrough.png" width="62" height="15"/></div>';
	   $html = $html.'<p class="mainPrice"><sup>$</sup>'.$newdollars.'<sup>.'.$cents.'</sup></p>';
	   
   }else{
	   $html = '<p class="mainPrice"><sup>$</sup>'.$dollars.'<sup>.'.$cents.'</sup></p>';
   }
   
   $html = '<div class="pricesHolder '.$ispromotion.'" style="clear: both;width: 100%;float: left;">'.$html.'</div>';
   return $html;
}
add_shortcode('strikethrough', 'strikethrough_shortcode');


function addsavings_shortcode($atts) { 
   extract(shortcode_atts(array(
      'id' => 0,
	  'savings' => '100'
   ), $atts));
   
   $shippingvalue = 5; //add $5 if free shipping
	 
   global $post;
   if($id == 0){
	   $id = $post->ID;
   }

   $promo = get_field('add_promotion', $id);
   
   $addshipping = 0;
   if (strpos($promo,'freeshipping') !== false) {
		$addshipping = $shippingvalue;
	}

   $saveprice = preg_replace("/[^0-9]/","",$promo);
   $newsavings = intval($savings) + intval($saveprice) + $addshipping;

   return $newsavings;
}
add_shortcode('addsavings', 'addsavings_shortcode');

function rightsidebar_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/rightsidebar-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('rightsidebar', 'rightsidebar_shortcode');

function reviewblock_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/reviewblock-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('reviewblock', 'reviewblock_shortcode');

function freedemo_shortcode() { 
	ob_start();
	include( get_template_directory().'/inc/freedemo-shortcode.php' );
	return ob_get_clean();
}
add_shortcode('freedemo', 'freedemo_shortcode');
?>