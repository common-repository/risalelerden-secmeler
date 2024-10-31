<?php
/*
Plugin Name: Risalelerden Secmeler
Plugin URI: http://hasansarman.net/risalelerdensecmeler
Description: Plugin is showing random superb Aphorisms
Author: Hasan SARMAN
Version: 1.3
Author URI: http://hasansarman.net
*/


include 'aboo.php';




// Set-up Action and Filter Hooks

register_activation_hook(__FILE__, 'hasansarman_add_defaults');
register_uninstall_hook(__FILE__, 'hasansarman_delete_plugin_options');
add_action('admin_init', 'hasansarman_init' );
add_action('admin_menu', 'hasansarman_add_options_page');


function hasansarman_add_defaults() {
risale_install();
}

// Init plugin options to white list our options
function hasansarman_init(){
	register_setting( 'hasansarman_plugin_options', 'hasansarman_options', 'hasansarman_render_form' );
	
}

// Add menu page
function hasansarman_add_options_page() {
	add_options_page('Risalelerden Secmeler Ayar Sayfasi ', 'Risalelerden Secmeler', 'administrator', __FILE__, 'hasansarman_render_form');
}

// Render the Plugin options form
function hasansarman_render_form() {
	?>
	<div class="wrap">
		<CENTER>
		<!-- Display Plugin Icon, Header, and Description -->
		<div class="icon32" id="icon-options-general"><br></div>
		<h2>Risalelerden Secmeler</h2>
		
		<br><h2>
		
		<img src=" <?php __FILE__?>/wp-content/plugins/risalelerden-secmeler/aboo.jpg " alt="banner of random suberb sayings"> 
		</h2>
		
		<br><br><br><h1>Spread the WORD !!</h1>
		<br><h2>Tell your friends about this plugin.. best personal plugin for blogs.</h2>
		
		<br>if you think there is some good aphorisms that should be added to plugin contact me :)
		<br>
		</CENTER>
		<br><h2>You can find a video which is showing how to install and usage directives at the end of page.</h2>
		<br>
		//English..
		In order to make this plugin show english aphorisms use 
		<br>
					<strong><code> if ( function_exists( 'show_aphorism' ) ) { show_aphorism(); } </code> </strong>
					<br>
		This plugin creates a database table consisting of favorite aphorisms from all over the world.
		<br>
		for now there 700 english aphorisms and 1400 turkish aphorisms.
		<br>This number is growing day by day. 
		<br>if you want to show multiple aphorisms on the different parts of page just use
		<br>
					<strong><code> if ( function_exists( 'show_aphorism' ) ) { show_aphorism(); } </code> </strong>
					<br>
					whereever you like.
					<br>
					a live demo can be seen on 
					<br>http://hasansarman.net
					<br>if you have any suggestions & offerings & questions contact me via e-mail: hasansarman@gmail.com
					<br>

			
			

<br>
				// Turkish 
				<tr>
				<br><h2>Sayfanin altinda nasil kuullanilip kurulacagini gosteren bir video bulunmaktadir.</h2>
					Asagidaki kodu arzu ettiginiz yere ekleyerek plugini kullanabilirsiniz.
					<br>
					<strong><code> if ( function_exists( 'risale_bas' ) ) { risale_bas(); } </code> </strong>
					<br>
					
					Veritabaniniza risale isimli bir tablo olusturarak bu tablonun icine risalelerden alintilari yazan
					bu eklenti rastgele bunlari gostermektedir. Demo icin www.hasansarman.net ' i ziyaret edebilirsiniz.
					
					<br>Ornek Resim :
					<br>
					
					<img src=" <?php __FILE__?>/wp-content/plugins/risalelerden-secmeler/screenshot-1.png " alt="ornek"> 
					
					<br>Gordugunuz Eksiklik ve/veya hatalari lutfen bana bildiriniz. En kisa zamanda duzeltilecektir.
					<br>iletisim: hasansarman@gmail.com
					<br>
					<br>
					<br>
					<br>
					<br>
					
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="659VNK56VFK74">
<input type="image" src="https://www.paypalobjects.com/tr_TR/TR/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - Online ödeme yapmanýn daha güvenli ve kolay yolu!">
<img alt="" border="0" src="https://www.paypalobjects.com/tr_TR/i/scr/pixel.gif" width="1" height="1">
</form>

					


<object width="560" height="315"><param name="movie" value="http://www.youtube.com/v/my9uQ5J0P0s?version=3&amp;hl=tr_TR"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/my9uQ5J0P0s?version=3&amp;hl=tr_TR" type="application/x-shockwave-flash" width="560" height="315" allowscriptaccess="always" allowfullscreen="true"></embed></object>


					
				

	</div>
	<?php	
}




	

