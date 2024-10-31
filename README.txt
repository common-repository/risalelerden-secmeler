=== Risalelerden Secmeler ===
Contributors: hasansarman
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=659VNK56VFK74
Tags: risale,Risale-i nur,nur,risale-i,said,nursi,bediüzzaman,saying,great words,poverb,manifesto,laconism,apothegm,maxim,motto,aphorism,saying,apophthegm,quran,koran,hadis,hadith,ali,mevlana,motto
Requires at least: 2.8
Tested up to: 3.5
Stable tag: Risale-i Nur
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
//English
This plugin shows best aphorisms in different languages. 700 different english sayings.
It will change everytime you refresh or change page.

//turkish
Bu plugin Risale-i Nur'dan 1400 adet ozenle secilmiþ guzel sozu ekranda gorsel bir ziyafetle rastgele olarak gösterir..

== Description ==
//ENGLISH
In order to make this plugin show english aphorisms use
if ( function_exists( 'show_aphorism' ) ) { show_aphorism(); }
This plugin creates a database table consisting of favorite aphorisms from all over the world.
for now there 700 english aphorisms and 1400 turkish aphorisms.
This number is growing day by day.
if you want to show multiple aphorisms on the different parts of page just use
if ( function_exists( 'show_aphorism' ) ) { show_aphorism(); }
whereever you like.
a live demo can be seen on
http://hasansarman.net
if you have any suggestions & offerings & questions contact me via e-mail: hasansarman@gmail.com 

//TURKISH

Bu plugin Risale-i Nur'dan 1400 adet ozenle secilmis guzel sozu ekranda gorsel bir ziyafetle rastgele olarak gosterir. ileriki surumlerde bu plugine bir slider da eklenecektir. akliniza takilan soru/gorusleriniz icin lutfen hasansarman@gmail.com uzerinden benimle irtibata geciniz. Duzeltilmesini istediginiz yanlislik&eksiklikler icinde benimle irtibata geciniz lutfen.

http://hasansarman.net/2013-01-24-risalelerden-secmeler-wordpress-plugin

== Installation ==

//english
1. Upload 'risalelerden-secmeler' to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `if ( function_exists( 'show_aphorism' ) ) { show_aphorism(); }` in your templates

//Turkish
1. Upload 'risalelerden-secmeler' to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `if ( function_exists( 'risale_bas' ) ) { risale_bas(); }` in your templates

== Frequently asked questions ==

= Ekranda gosterdigi bu sozleri nereden aliyor program? Disarida bir siteye baglantý kuruluyormu?


Hayýr, Eklenti kurulurken veritabanýnýzda kendine has bir tablo olusturup bu sozleri bu tablonun icine kaydediyor. Disari ile herhangi bir baglantý kurmuyor.

== Screenshots ==
1. An example working image with dynamic words
2. how its seen on website

== Changelog ==
v1.3 English supoort added
v1.1 new anthonmys added
v1.0 - first release