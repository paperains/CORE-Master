<?php
/* This is to call all classes needed for the pages
 * which includes shortened variables for specific
 * functions.
 */

if ( ! defined('VALID_INC') ) exit('No direct script access allowed');

$database = new Database;
$sanitize = new Sanitize;
$settings = new Settings;
$general = new General;
$uploads = new Uploads;
$counts = new Count;
$check = new Check;

$header = $settings->getValue('file_path_header');
$footer = $settings->getValue('file_path_footer');
$tcgurl = $settings->getValue('tcg_url');
$tcgname = $settings->getValue('tcg_name');
$tcgemail = $settings->getValue('tcg_email');
$tcgowner = $settings->getValue('tcg_owner');
$tcgcards = $settings->getValue('file_path_cards');
$tcgext = $settings->getValue('cards_file_type');
$tcgimg = $settings->getValue('file_path_img');
$tcgpath = $settings->getValue('file_path_absolute');
$tcgdiscord = $settings->getValue('tcg_discord');
$tcgtwitter = $settings->getValue('tcg_twitter');

/* Currency iterations.
 * By default, you have 3 currencies to use.
 */
$x1 = $settings->getValue('x1');
$n1 = substr_replace($x1, "", -4);
$x2 = $settings->getValue('x2');
$n2 = substr_replace($x2, "", -4);
$x3 = $settings->getValue('x3');
$n3 = substr_replace($x3, "", -4);

/* Feel free to change this according to your liking.
 * This is a blurb that will be displayed when a player access the game prize page directly.
 */
$ForbiddenAccess = '<h1>Hold it right there!</h1><p>Tough luck! It seems like you\'re trying to outwit the admin by secretly accessing a page through an underground method. That will surely anger the gods of the gods, sunshine! Please go back if you haven\'t played the game yet, or come back next week for a new round if you have already.</p>';

?>
