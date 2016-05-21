<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Australia/Sydney" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost;dbname=twlbot" );
define( "DB_USERNAME", "twlbot" );
define( "DB_PASSWORD", "123423" );
define( "CLASS_PATH", "classes" );
//define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "123423" );
define( "TBOT_URL", "https://api.telegram.org/" );
define( "TBOT_NUM", "227027982" );
define( "TBOT_KEY", "AAGoFUdE24DDMO82ixg9oqSVCPusj6v16sU" );
//https://api.telegram.org/bot227027982:AAGoFUdE24DDMO82ixg9oqSVCPusj6v16sU/getUpdates

require( "autoload.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
