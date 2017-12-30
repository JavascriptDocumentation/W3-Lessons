define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'fb_wall');
define('ImageUploadPath', 'uploads/');
$post_limit = 10; // set number of records to load by default
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());
mysql_query ("set character_set_results='utf8'");
$base_url='http://localhost/facebook-timeline-part-2/'; // with trailing slash
$base_folder = "facebook-timeline-part-2/"; //leave empty if you using root folder
$smiley_folder = $base_url.'assets/smileys/'; // your smiley icons folder
