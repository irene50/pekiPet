<?php
   /*define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'rootroot');
   define('DB_DATABASE', 'pekipet');

   esto pá que se conecte al openshift*/
   define('DB_SERVER', '10.131.14.31:3306');
   define('DB_USERNAME', 'pekipet');
   define('DB_PASSWORD', 'pekipet');
   define('DB_DATABASE', 'pekipetdb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if (!$db) {
		die("Error conexión: " . mysqli_connect_error());
	}
?>
