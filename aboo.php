<?php

function risale( $atts, $content = null ) {  
    return risale_bas();  
}
function risale_install()
{
 global $wpdb;
  
global $jal_db_version;
$jal_db_version = "1.0";

  

   $table_name = $wpdb->prefix . "risale";
      
   $sql = "CREATE TABLE IF NOT EXISTS $table_name (
  id int(11) NOT NULL AUTO_INCREMENT,
  soz varbinary(1000) DEFAULT NULL,
  UNIQUE KEY id (id)
    );";

   require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
   dbDelta($sql);
 
   add_option("jal_db_version", $jal_db_version);


   include_once 'hasan_wpustaddan.php';
    foreach ($hasan_wpustaddan as $deger) {
	$sql2="INSERT INTO $table_name (
	`soz`
	) 
	VALUES (
	'$deger[soz]'
	);";
	dbDelta($sql2);
    	
    	
    }
	
	global $jal_db_version2;
$jal_db_version2 = "2.0";

   $tablex_name = $wpdb->prefix . "risaleingilizce";
      
   $sqlx = "CREATE TABLE IF NOT EXISTS $tablex_name (
  id int(11) NOT NULL AUTO_INCREMENT,
  soyleyen varbinary(50) DEFAULT NULL,
  soz varbinary(1000) DEFAULT NULL,
  UNIQUE KEY id (id)
    );";

   
   dbDelta($sqlx);
 
   add_option("jal_db_version2", $jal_db_version2);


   include_once 'hasan_wpustaddaningilizce.php';
    foreach ($hasan_wpustaddaningilizce as $degerx) {
	$sql2x="INSERT INTO $tablex_name (
	`soyleyen`,
	`soz`
	) 
	VALUES (
	'$degerx[soyleyen]',
	'$degerx[soz]'
	);";
	dbDelta($sql2x);
    	
    	
    }

}



function getfromdatabase() {

	$lyricsx=mt_rand( 1, 555);

global $wpdb;

	mysql_query("SET CHARACTER SET latin5 SET COLLATION_CONNECTION = ‘latin5_turkish_ci’");
$tablex_name = $wpdb->prefix . "risaleingilizce";

	$resultx=mysql_query("Select * from $tablex_name where id='$lyricsx'") or die("Sorgu hatasi: ".mysql_error());
	// And then randomly choose a line
	


	$rowx = mysql_fetch_array($resultx);
	mysql_close();
	$soz=$rowx['soz'].".->".$rowx['soyleyen'];
	return $soz;
}
function veritabanindancek() {

	$lyrics=mt_rand( 1, 1305 );



	mysql_query("SET CHARACTER SET latin5 SET COLLATION_CONNECTION = ‘latin5_turkish_ci’");
$table_name = $wpdb->prefix . "risale";
	$result=mysql_query("Select * from $table_name where id=$lyrics");
	// And then randomly choose a line
	


	$row = mysql_fetch_array($result);
	mysql_close();

	return $row['soz'];
}


function trimOffFront($str) {
	$ii=0;
	$strx=trim($str);
	while(is_numeric($strx[$ii]))
	{
		$ii++;
	}

	return substr( $strx, $ii );
}

// This just echoes the chosen line, we'll position it later
function hasan_yaz() {
	$chosen = veritabanindancek();

	echo "<p id='risaleyazi'>".trimOffFront($chosen)."</p>";
}


function hasan_write()
{
	$aboow=getfromdatabase();
	echo "<p id='risaleyazi'>".trimOffFront($aboow)."</p>";
}

// We need some CSS to position the paragraph
function hasan_css() {
	// This makes sure that the positioning is also good for right-to-left languages


	echo "
	   <link href='http://fonts.googleapis.com/css?family=Quintessential&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<style type='text/css'>
	#risaleyazi {
	font-family: 'Quintessential', cursive;
	background-image:url('/wp-content/plugins/risalelerden-secmeler/paper.jpg');
	background-repeat:no-repeat;
	background-size:100% auto;
	text-align:center;
	background-max-width:100%;
	background-color:#E8CC8D;
		float: center;
		padding-top:25px;
padding-bottom:25px;
padding-right:50px;
padding-left:50px;
		margin: 0;
		font-size: 20px;



	}
	</style>
	";
}

function  show_aphorism(){
hasan_css();
hasan_write();
}
function risale_bas(){
	hasan_css();
	hasan_yaz();
};




