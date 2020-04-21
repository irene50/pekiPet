<?php
   /*define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'rootroot');
   define('DB_DATABASE', 'pekipet');*/

   /*esto pá que se conecte al openshift*/
   define('DB_SERVER', 'localhost:3306');/*10.130.14.191*/
   define('DB_USERNAME', 'pekipet');
   define('DB_PASSWORD', 'pekipet');
   define('DB_DATABASE', 'pekipetdb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if (!$db) {
		die("Error conexión: " . mysqli_connect_error());
	}
?>
