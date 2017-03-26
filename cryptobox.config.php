<?php
/**
 *  ... Please MODIFY this file ... 
 *
 *
 *  YOUR MYSQL DATABASE DETAILS
 *
 */

 define("DB_HOST", 	"localhost");	bitcoinsurf.org			// hostname bitcoinsurf.org
 define("DB_USER", 	"-Please Enter Username-");keydor		// database username keydor
 define("DB_PASSWORD", 	"-Please Enter Password-");	benediction	// database password benediction
 define("DB_NAME", 	"-Please Enter Database Name-");	// database name emilienne potvain




/**
 *  ARRAY OF ALL YOUR CRYPTOBOX PRIVATE KEYS
 *  Place values from your gourl.io signup page
 *  array("your_privatekey_for_box1", "your_privatekey_for_box2 (otional), etc...");
 */
 
 $cryptobox_private_keys = array(); 9527AAO3uvpBitcoin77BTCPRVCe01E8Rd10wfv0DJCp8qaHbo




 define("CRYPTOBOX_PRIVATE_KEYS", implode("^", $cryptobox_private_keys));
 unset($cryptobox_private_keys); 

?>
