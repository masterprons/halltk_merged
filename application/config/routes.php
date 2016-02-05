<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "aone_c";
$route['404_override'] = '';

$route['tpic'] = 'aone_c/tpic';
$route['prcity'] = 'aone_c/prcity';
$route['prsites'] = 'aone_c/prsites';
$route['poetrypr'] = 'poetryPR_c';

$route['template/idealT'] = 'temps_c/idealT';
$route['template/t9ads'] = 'temps_c/t9ads';
$route['template/t3ads'] = 'temps_c/t3ads';

//TPIC Projects
$route['cele-saree'] = "cele_saree_c";
$route['scary-images'] = "Scary_images_c";
$route['car-wallpapers'] = "car_wallpapers_c";
$route['bike-wallpapers'] = "bike_wallpapers_c";
$route['car-girls'] = "car_girls_c";
$route['bike-babes'] = "bike_babes_c";
$route['bold-babes'] = "bold_babes_c";
$route['album-animals'] = "aone_c/album_animals";
$route['beach-babes1'] = "beachBabes_c";


// Cele Saree - Temp31Pics (URL: 31)
$route['cele-saree'] = "cele_saree_c";
$route['cele-saree/Priyamani-hot-sexy-saree-images'] = "cele_saree_c/pg1";
$route['cele-saree/actress-bhavana-photo-shoot-in-saree'] = "cele_saree_c/pg2";
$route['cele-saree/Actress-Bhama-New-Photoshoot-Stills-photoshoot'] = "cele_saree_c/pg3";
$route['cele-saree/Zarine-Khan-latest-Glamorous-Photos-in-Saree'] = "cele_saree_c/pg4";
$route['cele-saree/Zarine-Khan-latest-Glamorous-Photos-in-red-velvet-saree'] = "cele_saree_c/pg5";
$route['cele-saree/Shriya-Saran-Hot-backless-Stills-photoshoot'] = "cele_saree_c/pg6";
$route['cele-saree/Anushka-Shetty-backless-saree-photoshoot'] = "cele_saree_c/pg7";
$route['cele-saree/Shriya-Saran-Hot-backless-Stills-in-red-ghagara-and-blouse'] = "cele_saree_c/pg8";
$route['cele-saree/Vidya-Balan-hot-sexy-photoshoot'] = "cele_saree_c/pg9";
$route['cele-saree/Hot-sexy-Katrina-Kaif-in-pink-saree-and-blouse'] = "cele_saree_c/pg10";
$route['cele-saree/Anushka-Sharma-in-red-Saree-and-blouse'] = "cele_saree_c/pg11";
$route['cele-saree/Hot-sexy-Shriya-Saran-in-pink-saree-and-bouse'] = "cele_saree_c/pg12";
$route['cele-saree/Veena-Malik-hot-sexy-cleavage-in-yellow-blouse-and-saree'] = "cele_saree_c/pg13";
$route['cele-saree/Vidya-balan-in-pink-saree-and-blouse'] = "cele_saree_c/pg14";
$route['cele-saree/Priyanka-Kothari-wet-photo-in-white-saree'] = "cele_saree_c/pg15";
$route['cele-saree/Kajal-Agarwal-backless-saree-photo'] = "cele_saree_c/pg16";
$route['cele-saree/Anushka-Shetty-in-blue-saree'] = "cele_saree_c/pg17";
$route['cele-saree/Anushka-Shetty-Saree-Photoshoot'] = "cele_saree_c/pg18";
$route['cele-saree/Yami-Gautam-in-Orange-saree'] = "cele_saree_c/pg19";
$route['cele-saree/Anushka-Shetty-in-Indian-Bride-look-photo'] = "cele_saree_c/pg20";
$route['cele-saree/Madhurima-posing-in-light-pink-saree'] = "cele_saree_c/pg21";
$route['cele-saree/Kareena-Kapoor-Saree-Images'] = "cele_saree_c/pg22";
$route['cele-saree/Aishwarya-Rai-as-Indian-Bride'] = "cele_saree_c/pg23";
$route['cele-saree/Amisha-Patel-in-red-saree'] = "cele_saree_c/pg24";
$route['cele-saree/Rakul-Prit-Singh-in-red-saree'] = "cele_saree_c/pg25";
$route['cele-saree/Nayanthara-Saree-Photoshoot'] = "cele_saree_c/pg26";
$route['cele-saree/Mona-Lisa-in-red-saree'] = "cele_saree_c/pg27";
$route['cele-saree/Charmy-Kaur-in-red-saree'] = "cele_saree_c/pg28";
$route['cele-saree/Tamanna-Bhatia-in-saree'] = "cele_saree_c/pg29";
$route['cele-saree/Tollywood-Actress-Trisha-in-white-saree'] = "cele_saree_c/pg30";

// Scary Images - TempHP101Pics (URL: 101)
$route['scary-images'] = "Scary_images_c";
$route['scary-images/1'] = "Scary_images_c/pg1";
$route['scary-images/2'] = "Scary_images_c/pg2";
$route['scary-images/3'] = "Scary_images_c/pg3";
$route['scary-images/4'] = "Scary_images_c/pg4";
$route['scary-images/5'] = "Scary_images_c/pg5";
$route['scary-images/6'] = "Scary_images_c/pg6";
$route['scary-images/7'] = "Scary_images_c/pg7";
$route['scary-images/8'] = "Scary_images_c/pg8";
$route['scary-images/9'] = "Scary_images_c/pg9";
$route['scary-images/10'] = "Scary_images_c/pg10";
$route['scary-images/11'] = "Scary_images_c/pg11";
$route['scary-images/12'] = "Scary_images_c/pg12";
$route['scary-images/13'] = "Scary_images_c/pg13";
$route['scary-images/14'] = "Scary_images_c/pg14";
$route['scary-images/15'] = "Scary_images_c/pg15";
$route['scary-images/16'] = "Scary_images_c/pg16";
$route['scary-images/17'] = "Scary_images_c/pg17";
$route['scary-images/18'] = "Scary_images_c/pg18";
$route['scary-images/19'] = "Scary_images_c/pg19";
$route['scary-images/20'] = "Scary_images_c/pg20";
$route['scary-images/21'] = "Scary_images_c/pg21";
$route['scary-images/22'] = "Scary_images_c/pg22";
$route['scary-images/23'] = "Scary_images_c/pg23";
$route['scary-images/24'] = "Scary_images_c/pg24";
$route['scary-images/25'] = "Scary_images_c/pg25";
$route['scary-images/26'] = "Scary_images_c/pg26";
$route['scary-images/27'] = "Scary_images_c/pg27";
$route['scary-images/28'] = "Scary_images_c/pg28";
$route['scary-images/29'] = "Scary_images_c/pg29";
$route['scary-images/30'] = "Scary_images_c/pg30";
$route['scary-images/31'] = "Scary_images_c/pg31";
$route['scary-images/32'] = "Scary_images_c/pg32";
$route['scary-images/33'] = "Scary_images_c/pg33";
$route['scary-images/34'] = "Scary_images_c/pg34";
$route['scary-images/35'] = "Scary_images_c/pg35";
$route['scary-images/36'] = "Scary_images_c/pg36";
$route['scary-images/37'] = "Scary_images_c/pg37";
$route['scary-images/38'] = "Scary_images_c/pg38";
$route['scary-images/39'] = "Scary_images_c/pg39";
$route['scary-images/40'] = "Scary_images_c/pg40";
$route['scary-images/41'] = "Scary_images_c/pg41";
$route['scary-images/42'] = "Scary_images_c/pg42";
$route['scary-images/43'] = "Scary_images_c/pg43";
$route['scary-images/44'] = "Scary_images_c/pg44";
$route['scary-images/45'] = "Scary_images_c/pg45";
$route['scary-images/46'] = "Scary_images_c/pg46";
$route['scary-images/47'] = "Scary_images_c/pg47";
$route['scary-images/48'] = "Scary_images_c/pg48";
$route['scary-images/49'] = "Scary_images_c/pg49";
$route['scary-images/50'] = "Scary_images_c/pg50";


$route['scary-images/51'] = "Scary_images_c/pg51";
$route['scary-images/52'] = "Scary_images_c/pg52";
$route['scary-images/53'] = "Scary_images_c/pg53";
$route['scary-images/54'] = "Scary_images_c/pg54";
$route['scary-images/55'] = "Scary_images_c/pg55";
$route['scary-images/56'] = "Scary_images_c/pg56";
$route['scary-images/57'] = "Scary_images_c/pg57";
$route['scary-images/58'] = "Scary_images_c/pg58";
$route['scary-images/59'] = "Scary_images_c/pg59";
$route['scary-images/60'] = "Scary_images_c/pg60";
$route['scary-images/61'] = "Scary_images_c/pg61";
$route['scary-images/62'] = "Scary_images_c/pg62";
$route['scary-images/63'] = "Scary_images_c/pg63";
$route['scary-images/64'] = "Scary_images_c/pg64";
$route['scary-images/65'] = "Scary_images_c/pg65";
$route['scary-images/66'] = "Scary_images_c/pg66";
$route['scary-images/67'] = "Scary_images_c/pg67";
$route['scary-images/68'] = "Scary_images_c/pg68";
$route['scary-images/69'] = "Scary_images_c/pg69";
$route['scary-images/70'] = "Scary_images_c/pg70";
$route['scary-images/71'] = "Scary_images_c/pg71";
$route['scary-images/72'] = "Scary_images_c/pg72";
$route['scary-images/73'] = "Scary_images_c/pg73";
$route['scary-images/74'] = "Scary_images_c/pg74";
$route['scary-images/75'] = "Scary_images_c/pg75";
$route['scary-images/76'] = "Scary_images_c/pg76";
$route['scary-images/77'] = "Scary_images_c/pg77";
$route['scary-images/78'] = "Scary_images_c/pg78";
$route['scary-images/79'] = "Scary_images_c/pg79";
$route['scary-images/80'] = "Scary_images_c/pg80";
$route['scary-images/81'] = "Scary_images_c/pg81";
$route['scary-images/82'] = "Scary_images_c/pg82";
$route['scary-images/83'] = "Scary_images_c/pg83";
$route['scary-images/84'] = "Scary_images_c/pg84";
$route['scary-images/85'] = "Scary_images_c/pg85";
$route['scary-images/86'] = "Scary_images_c/pg86";
$route['scary-images/87'] = "Scary_images_c/pg87";
$route['scary-images/88'] = "Scary_images_c/pg88";
$route['scary-images/89'] = "Scary_images_c/pg89";
$route['scary-images/90'] = "Scary_images_c/pg90";
$route['scary-images/91'] = "Scary_images_c/pg91";
$route['scary-images/92'] = "Scary_images_c/pg92";
$route['scary-images/93'] = "Scary_images_c/pg93";
$route['scary-images/94'] = "Scary_images_c/pg94";
$route['scary-images/95'] = "Scary_images_c/pg95";
$route['scary-images/96'] = "Scary_images_c/pg96";
$route['scary-images/97'] = "Scary_images_c/pg97";
$route['scary-images/98'] = "Scary_images_c/pg98";
$route['scary-images/99'] = "Scary_images_c/pg99";
$route['scary-images/100'] = "Scary_images_c/pg100";


// Beach Babes 1 - TempBB100 (URL: 100)
$route['beach-babes1'] = "beach_babes1_c";
$route['beach-babes1/1'] = "beach_babes1_c/pg1";
$route['beach-babes1/2'] = "beach_babes1_c/pg2";
$route['beach-babes1/3'] = "beach_babes1_c/pg3";
$route['beach-babes1/4'] = "beach_babes1_c/pg4";
$route['beach-babes1/5'] = "beach_babes1_c/pg5";
$route['beach-babes1/6'] = "beach_babes1_c/pg6";
$route['beach-babes1/7'] = "beach_babes1_c/pg7";
$route['beach-babes1/8'] = "beach_babes1_c/pg8";
$route['beach-babes1/9'] = "beach_babes1_c/pg9";
$route['beach-babes1/10'] = "beach_babes1_c/pg10";
$route['beach-babes1/11'] = "beach_babes1_c/pg11";
$route['beach-babes1/12'] = "beach_babes1_c/pg12";
$route['beach-babes1/13'] = "beach_babes1_c/pg13";
$route['beach-babes1/14'] = "beach_babes1_c/pg14";
$route['beach-babes1/15'] = "beach_babes1_c/pg15";
$route['beach-babes1/16'] = "beach_babes1_c/pg16";
$route['beach-babes1/17'] = "beach_babes1_c/pg17";
$route['beach-babes1/18'] = "beach_babes1_c/pg18";
$route['beach-babes1/19'] = "beach_babes1_c/pg19";
$route['beach-babes1/20'] = "beach_babes1_c/pg20";
$route['beach-babes1/21'] = "beach_babes1_c/pg21";
$route['beach-babes1/22'] = "beach_babes1_c/pg22";
$route['beach-babes1/23'] = "beach_babes1_c/pg23";
$route['beach-babes1/24'] = "beach_babes1_c/pg24";
$route['beach-babes1/25'] = "beach_babes1_c/pg25";
$route['beach-babes1/26'] = "beach_babes1_c/pg26";
$route['beach-babes1/27'] = "beach_babes1_c/pg27";
$route['beach-babes1/28'] = "beach_babes1_c/pg28";
$route['beach-babes1/29'] = "beach_babes1_c/pg29";
$route['beach-babes1/30'] = "beach_babes1_c/pg30";
$route['beach-babes1/31'] = "beach_babes1_c/pg31";
$route['beach-babes1/32'] = "beach_babes1_c/pg32";
$route['beach-babes1/33'] = "beach_babes1_c/pg33";
$route['beach-babes1/34'] = "beach_babes1_c/pg34";
$route['beach-babes1/35'] = "beach_babes1_c/pg35";
$route['beach-babes1/36'] = "beach_babes1_c/pg36";
$route['beach-babes1/37'] = "beach_babes1_c/pg37";
$route['beach-babes1/38'] = "beach_babes1_c/pg38";
$route['beach-babes1/39'] = "beach_babes1_c/pg39";
$route['beach-babes1/40'] = "beach_babes1_c/pg40";
$route['beach-babes1/41'] = "beach_babes1_c/pg41";
$route['beach-babes1/42'] = "beach_babes1_c/pg42";
$route['beach-babes1/43'] = "beach_babes1_c/pg43";
$route['beach-babes1/44'] = "beach_babes1_c/pg44";
$route['beach-babes1/45'] = "beach_babes1_c/pg45";
$route['beach-babes1/46'] = "beach_babes1_c/pg46";
$route['beach-babes1/47'] = "beach_babes1_c/pg47";
$route['beach-babes1/48'] = "beach_babes1_c/pg48";
$route['beach-babes1/49'] = "beach_babes1_c/pg49";
$route['beach-babes1/50'] = "beach_babes1_c/pg50";

$route['beach-babes1/51'] = "beach_babes1_c/pg51";
$route['beach-babes1/52'] = "beach_babes1_c/pg52";
$route['beach-babes1/53'] = "beach_babes1_c/pg53";
$route['beach-babes1/54'] = "beach_babes1_c/pg54";
$route['beach-babes1/55'] = "beach_babes1_c/pg55";
$route['beach-babes1/56'] = "beach_babes1_c/pg56";
$route['beach-babes1/57'] = "beach_babes1_c/pg57";
$route['beach-babes1/58'] = "beach_babes1_c/pg58";
$route['beach-babes1/59'] = "beach_babes1_c/pg59";
$route['beach-babes1/60'] = "beach_babes1_c/pg60";
$route['beach-babes1/61'] = "beach_babes1_c/pg61";
$route['beach-babes1/62'] = "beach_babes1_c/pg62";
$route['beach-babes1/63'] = "beach_babes1_c/pg63";
$route['beach-babes1/64'] = "beach_babes1_c/pg64";
$route['beach-babes1/65'] = "beach_babes1_c/pg65";
$route['beach-babes1/66'] = "beach_babes1_c/pg66";
$route['beach-babes1/67'] = "beach_babes1_c/pg67";
$route['beach-babes1/68'] = "beach_babes1_c/pg68";
$route['beach-babes1/69'] = "beach_babes1_c/pg69";
$route['beach-babes1/70'] = "beach_babes1_c/pg70";
$route['beach-babes1/71'] = "beach_babes1_c/pg71";
$route['beach-babes1/72'] = "beach_babes1_c/pg72";
$route['beach-babes1/73'] = "beach_babes1_c/pg73";
$route['beach-babes1/74'] = "beach_babes1_c/pg74";
$route['beach-babes1/75'] = "beach_babes1_c/pg75";
$route['beach-babes1/76'] = "beach_babes1_c/pg76";
$route['beach-babes1/77'] = "beach_babes1_c/pg77";
$route['beach-babes1/78'] = "beach_babes1_c/pg78";
$route['beach-babes1/79'] = "beach_babes1_c/pg79";
$route['beach-babes1/80'] = "beach_babes1_c/pg80";
$route['beach-babes1/81'] = "beach_babes1_c/pg81";
$route['beach-babes1/82'] = "beach_babes1_c/pg82";
$route['beach-babes1/83'] = "beach_babes1_c/pg83";
$route['beach-babes1/84'] = "beach_babes1_c/pg84";
$route['beach-babes1/85'] = "beach_babes1_c/pg85";
$route['beach-babes1/86'] = "beach_babes1_c/pg86";
$route['beach-babes1/87'] = "beach_babes1_c/pg87";
$route['beach-babes1/88'] = "beach_babes1_c/pg88";
$route['beach-babes1/89'] = "beach_babes1_c/pg89";
$route['beach-babes1/90'] = "beach_babes1_c/pg90";
$route['beach-babes1/91'] = "beach_babes1_c/pg91";
$route['beach-babes1/92'] = "beach_babes1_c/pg92";
$route['beach-babes1/93'] = "beach_babes1_c/pg93";
$route['beach-babes1/94'] = "beach_babes1_c/pg94";
$route['beach-babes1/95'] = "beach_babes1_c/pg95";
$route['beach-babes1/96'] = "beach_babes1_c/pg96";
$route['beach-babes1/97'] = "beach_babes1_c/pg97";
$route['beach-babes1/98'] = "beach_babes1_c/pg98";
$route['beach-babes1/99'] = "beach_babes1_c/pg99";
$route['beach-babes1/100'] = "beach_babes1_c/pg100";


// Car Wallpapers - Temp50pics (URL: 51)
$route['car-wallpapers'] = "car_wallpapers_c";
$route['car-wallpapers/Superb-Model-of-Car-in-yellow'] = "car_wallpapers_c/pg1";
$route['car-wallpapers/Gray-Two-Seater-Car-Hd-Wallpaper'] = "car_wallpapers_c/pg2";
$route['car-wallpapers/Cool-Car-Background-and-Wallpaper'] = "car_wallpapers_c/pg3";
$route['car-wallpapers/Awesome-Blue-glossy-car-wallpaper'] = "car_wallpapers_c/pg4";
$route['car-wallpapers/Fantastic-orange-black-racing-car-hd-wallpaper'] = "car_wallpapers_c/pg5";
$route['car-wallpapers/Red-Glossy-shining-car-hd-wallpaper'] = "car_wallpapers_c/pg6";
$route['car-wallpapers/Car-Image-Collection'] = "car_wallpapers_c/pg7";
$route['car-wallpapers/Red-Farari-like-car-wallpaper'] = "car_wallpapers_c/pg8";
$route['car-wallpapers/Awesome-Design-of-car-in-yellow-and-black-color'] = "car_wallpapers_c/pg9";
$route['car-wallpapers/Classic-car-hd-wallpaper-for-pc'] = "car_wallpapers_c/pg10";
$route['car-wallpapers/Black-car-wallpaper-at-premises'] = "car_wallpapers_c/pg11";
$route['car-wallpapers/Red-glossy-car-hd-wallpapers'] = "car_wallpapers_c/pg12";
$route['car-wallpapers/Cool-red-color-car-hd-wallpaper-in-night-background'] = "car_wallpapers_c/pg13";
$route['car-wallpapers/Red-Color-running-car-wallpaper-in-motion'] = "car_wallpapers_c/pg14";
$route['car-wallpapers/Silver-Color-open-roof-car-hd-wallpaper'] = "car_wallpapers_c/pg15";
$route['car-wallpapers/TiseeJlKCI-Car-Model-hd-wallpaper'] = "car_wallpapers_c/pg16";
$route['car-wallpapers/Autoracer-orange-car-hd-wallpaper'] = "car_wallpapers_c/pg17";
$route['car-wallpapers/Orange-red-car-wallpaper'] = "car_wallpapers_c/pg18";
$route['car-wallpapers/Black-car-demo-model-high-resolution-image'] = "car_wallpapers_c/pg19";
$route['car-wallpapers/RC-908-car-hd-wallpaper'] = "car_wallpapers_c/pg20";
$route['car-wallpapers/Car-hd-wallpaper-collection'] = "car_wallpapers_c/pg21";
$route['car-wallpapers/Silver-Color-car-hd-wallpaper'] = "car_wallpapers_c/pg22";
$route['car-wallpapers/Awesome-car-with-upper-flip-opening-door'] = "car_wallpapers_c/pg23";
$route['car-wallpapers/Honda-sport-car-model-hd-wallpaper'] = "car_wallpapers_c/pg24";
$route['car-wallpapers/1967-Pontiac-GTO-purpul-car-hd-wallpaper'] = "car_wallpapers_c/pg25";
$route['car-wallpapers/High-resolution-red-car-wallpaper'] = "car_wallpapers_c/pg26";
$route['car-wallpapers/White-gray-stylish-car-wallpaper'] = "car_wallpapers_c/pg27";
$route['car-wallpapers/Black-car-with-golden-spark-color-image'] = "car_wallpapers_c/pg28";
$route['car-wallpapers/White-Guini-car-hd-wallpaper-in-city-night-background'] = "car_wallpapers_c/pg29";
$route['car-wallpapers/White-car-wallpaper-hd'] = "car_wallpapers_c/pg30";
$route['car-wallpapers/Awesome-car-images-and-wallpaper'] = "car_wallpapers_c/pg31";
$route['car-wallpapers/Sport-car-lamborghini-sesto-elemento-2013-model-hd-wallpaper'] = "car_wallpapers_c/pg32";
$route['car-wallpapers/Unique-car-model-wallpaper'] = "car_wallpapers_c/pg33";
$route['car-wallpapers/Beautiful-red-car-hd-wallpaper'] = "car_wallpapers_c/pg34";
$route['car-wallpapers/Running-motion-car-hd-wallpaper'] = "car_wallpapers_c/pg35";
$route['car-wallpapers/Black-brown-car-wallpaper'] = "car_wallpapers_c/pg36";
$route['car-wallpapers/Orange-Dark-color-car-hd-wallpaper'] = "car_wallpapers_c/pg37";
$route['car-wallpapers/Hot-yellow-car-wallpaper'] = "car_wallpapers_c/pg38";
$route['car-wallpapers/Yelow-Car-Images'] = "car_wallpapers_c/pg39";
$route['car-wallpapers/Graphical-Car-model-image'] = "car_wallpapers_c/pg40";
$route['car-wallpapers/White-silver-car-wallpaper'] = "car_wallpapers_c/pg41";
$route['car-wallpapers/Silver-white-open-roof-car-hd-wallpaper'] = "car_wallpapers_c/pg42";
$route['car-wallpapers/Very-awesome-red-and-black-color-car-wallpaper'] = "car_wallpapers_c/pg43";
$route['car-wallpapers/Stylish-orange-car-hd-wallpaper'] = "car_wallpapers_c/pg44";
$route['car-wallpapers/hd-car-collection'] = "car_wallpapers_c/pg45";
$route['car-wallpapers/Sport-cars-wallpapers'] = "car_wallpapers_c/pg46";
$route['car-wallpapers/Graphic-car-wallpaper'] = "car_wallpapers_c/pg47";
$route['car-wallpapers/Sport-Cars-images'] = "car_wallpapers_c/pg48";
$route['car-wallpapers/Brown-purple-car-graphic-wallpaper'] = "car_wallpapers_c/pg49";
$route['car-wallpapers/Awesome-blue-police-car-hd-wallpaper'] = "car_wallpapers_c/pg50";


// Bike Wallpapers - Temp50pics (URL: 51)
$route['bike-wallpapers'] = "bike_wallpapers_c";
$route['bike-wallpapers/Bike-Wallpapers-for-Desktop'] = "bike_wallpapers_c/pg1";
$route['bike-wallpapers/Yamaha-bike-hd-wallpaper'] = "bike_wallpapers_c/pg2";
$route['bike-wallpapers/KTM-Electric-scooter-hd-wallpaper-for-pc'] = "bike_wallpapers_c/pg3";
$route['bike-wallpapers/Hd-bike-images'] = "bike_wallpapers_c/pg4";
$route['bike-wallpapers/MV-Agusta-brutale-wallpaper'] = "bike_wallpapers_c/pg5";
$route['bike-wallpapers/Awesome-bike-wallpapers'] = "bike_wallpapers_c/pg6";
$route['bike-wallpapers/Yamaha-Bike-collection'] = "bike_wallpapers_c/pg7";
$route['bike-wallpapers/Red-American-chopper-bike-wallpaper'] = "bike_wallpapers_c/pg8";
$route['bike-wallpapers/Thunder-chopper-wallpaper'] = "bike_wallpapers_c/pg9";
$route['bike-wallpapers/Yellow-honda-cbr-hd-images'] = "bike_wallpapers_c/pg10";
$route['bike-wallpapers/Honda-CB-900-hornet-bike-wallpaper'] = "bike_wallpapers_c/pg11";
$route['bike-wallpapers/Honda-CB-600-Hornet-bike-images'] = "bike_wallpapers_c/pg12";
$route['bike-wallpapers/Stylish-Bike-images'] = "bike_wallpapers_c/pg13";
$route['bike-wallpapers/Desktop-bike-wallpaper'] = "bike_wallpapers_c/pg14";
$route['bike-wallpapers/Heavy-bikes-images-and-wallpapers'] = "bike_wallpapers_c/pg15";
$route['bike-wallpapers/Awesome-chopper-bike-wallpaper'] = "bike_wallpapers_c/pg16";
$route['bike-wallpapers/Heavy-Stylish-ducati-images'] = "bike_wallpapers_c/pg17";
$route['bike-wallpapers/Golden-bike-hd-wallpapers'] = "bike_wallpapers_c/pg18";
$route['bike-wallpapers/Pulsar-Bikes-images'] = "bike_wallpapers_c/pg19";
$route['bike-wallpapers/Blue-honda-bike-image'] = "bike_wallpapers_c/pg20";
$route['bike-wallpapers/Honda-VTX-1800-bike-look-like-BMW'] = "bike_wallpapers_c/pg21";
$route['bike-wallpapers/Suzuki-Bikes-wallpapers'] = "bike_wallpapers_c/pg22";
$route['bike-wallpapers/Honda-VTR-racing-bike-wallpapers'] = "bike_wallpapers_c/pg23";
$route['bike-wallpapers/Honda-XL-230-Vintage-bike-wallpaper'] = "bike_wallpapers_c/pg24";
$route['bike-wallpapers/Honda-created-bike-look-like-BMW-Bike'] = "bike_wallpapers_c/pg25";
$route['bike-wallpapers/Kawasaki-Dirt-Bike-wallpapers'] = "bike_wallpapers_c/pg26";
$route['bike-wallpapers/HD-Bikes'] = "bike_wallpapers_c/pg27";
$route['bike-wallpapers/Latest-BMW-Scooter-images'] = "bike_wallpapers_c/pg28";
$route['bike-wallpapers/Ducati-748-hd-wallpapers'] = "bike_wallpapers_c/pg29";
$route['bike-wallpapers/Desktop-bike-wallpapers'] = "bike_wallpapers_c/pg30";
$route['bike-wallpapers/Sport-bike-images-and-wallpapers'] = "bike_wallpapers_c/pg31";
$route['bike-wallpapers/Motorcycle-Wallpapers'] = "bike_wallpapers_c/pg32";
$route['bike-wallpapers/Honda-CBR-1000-Wide-images-and-wallpapers'] = "bike_wallpapers_c/pg33";
$route['bike-wallpapers/Orange-bike-hd-wallpaper-pc-and-mobile'] = "bike_wallpapers_c/pg34";
$route['bike-wallpapers/Amazing-futeristic-bike-wallpapers'] = "bike_wallpapers_c/pg35";
$route['bike-wallpapers/Best-bike-wallpapers'] = "bike_wallpapers_c/pg36";
$route['bike-wallpapers/New-bike-launch-images'] = "bike_wallpapers_c/pg37";
$route['bike-wallpapers/Bike-wallpapers-and-images'] = "bike_wallpapers_c/pg38";
$route['bike-wallpapers/Suzuki-Bikes-wallpapers'] = "bike_wallpapers_c/pg39";
$route['bike-wallpapers/HOnda-Bikes-wallpapers'] = "bike_wallpapers_c/pg40";
$route['bike-wallpapers/BMW-Bike-wallpapers'] = "bike_wallpapers_c/pg41";
$route['bike-wallpapers/Free-BMW-images-and-wallpaeprs'] = "bike_wallpapers_c/pg42";
$route['bike-wallpapers/Cobra-Bike-wallpapers'] = "bike_wallpapers_c/pg43";
$route['bike-wallpapers/Latest-bike-designs-wallpapers'] = "bike_wallpapers_c/pg44";
$route['bike-wallpapers/KTM-1190-RC8-black-hd-wallpaper'] = "bike_wallpapers_c/pg45";
$route['bike-wallpapers/Hd-bike-and-car-wallpapers-and-images'] = "bike_wallpapers_c/pg46";
$route['bike-wallpapers/KTM-RC8-hd-wallpaper'] = "bike_wallpapers_c/pg47";
$route['bike-wallpapers/KTM-Sport-bikes-wallpapers'] = "bike_wallpapers_c/pg48";
$route['bike-wallpapers/Download-bike-images-and-wallpapers'] = "bike_wallpapers_c/pg49";
$route['bike-wallpapers/Free-download-bike-hd-images-and-hd-wallpapers'] = "bike_wallpapers_c/pg50";


// Car Girls - Temp50pics (URL: 51)
$route['car-girls'] = "car_girls_c";
$route['car-girls/1'] = "car_girls_c/pg1";
$route['car-girls/2'] = "car_girls_c/pg2";
$route['car-girls/3'] = "car_girls_c/pg3";
$route['car-girls/4'] = "car_girls_c/pg4";
$route['car-girls/5'] = "car_girls_c/pg5";
$route['car-girls/6'] = "car_girls_c/pg6";
$route['car-girls/7'] = "car_girls_c/pg7";
$route['car-girls/8'] = "car_girls_c/pg8";
$route['car-girls/9'] = "car_girls_c/pg9";
$route['car-girls/10'] = "car_girls_c/pg10";
$route['car-girls/11'] = "car_girls_c/pg11";
$route['car-girls/12'] = "car_girls_c/pg12";
$route['car-girls/13'] = "car_girls_c/pg13";
$route['car-girls/14'] = "car_girls_c/pg14";
$route['car-girls/15'] = "car_girls_c/pg15";
$route['car-girls/16'] = "car_girls_c/pg16";
$route['car-girls/17'] = "car_girls_c/pg17";
$route['car-girls/18'] = "car_girls_c/pg18";
$route['car-girls/19'] = "car_girls_c/pg19";
$route['car-girls/20'] = "car_girls_c/pg20";
$route['car-girls/21'] = "car_girls_c/pg21";
$route['car-girls/22'] = "car_girls_c/pg22";
$route['car-girls/23'] = "car_girls_c/pg23";
$route['car-girls/24'] = "car_girls_c/pg24";
$route['car-girls/25'] = "car_girls_c/pg25";
$route['car-girls/26'] = "car_girls_c/pg26";
$route['car-girls/27'] = "car_girls_c/pg27";
$route['car-girls/28'] = "car_girls_c/pg28";
$route['car-girls/29'] = "car_girls_c/pg29";
$route['car-girls/30'] = "car_girls_c/pg30";
$route['car-girls/31'] = "car_girls_c/pg31";
$route['car-girls/32'] = "car_girls_c/pg32";
$route['car-girls/33'] = "car_girls_c/pg33";
$route['car-girls/34'] = "car_girls_c/pg34";
$route['car-girls/35'] = "car_girls_c/pg35";
$route['car-girls/36'] = "car_girls_c/pg36";
$route['car-girls/37'] = "car_girls_c/pg37";
$route['car-girls/38'] = "car_girls_c/pg38";
$route['car-girls/39'] = "car_girls_c/pg39";
$route['car-girls/40'] = "car_girls_c/pg40";
$route['car-girls/41'] = "car_girls_c/pg41";
$route['car-girls/42'] = "car_girls_c/pg42";
$route['car-girls/43'] = "car_girls_c/pg43";
$route['car-girls/44'] = "car_girls_c/pg44";
$route['car-girls/45'] = "car_girls_c/pg45";
$route['car-girls/46'] = "car_girls_c/pg46";
$route['car-girls/47'] = "car_girls_c/pg47";
$route['car-girls/48'] = "car_girls_c/pg48";
$route['car-girls/49'] = "car_girls_c/pg49";
$route['car-girls/50'] = "car_girls_c/pg50";

// Bike Babes - Temp50pics (URL: 51)
$route['bike-babes'] = "bike_babes_c";
$route['bike-babes/Bike-Babe-sexy-posing-hd-wallpaper-with-suzukin-bike'] = "bike_babes_c/pg1";
$route['bike-babes/Girl-in-black-bikini-near-bike-hd-wallpaper'] = "bike_babes_c/pg2";
$route['bike-babes/Three-hot-sexy-girls-washing-red-bike-in-black-bikini-together'] = "bike_babes_c/pg3";
$route['bike-babes/Hot-slim-sexy-female-bike-rider-in-white-top-and-blue-tattered-style-jeans-on-bike-backside-view'] = "bike_babes_c/pg4";
$route['bike-babes/Hot-sexy-undress-girl-slept-on-bike-holding-a-python-around-her-body'] = "bike_babes_c/pg5";
$route['bike-babes/Black-and-white-hd-wallpaper-of-girl-bikini-bike-rider-with-stunt-sport-bike'] = "bike_babes_c/pg6";
$route['bike-babes/Hot-sexy-girls-at-on-bike-hd-wallpaper'] = "bike_babes_c/pg7";
$route['bike-babes/Hot-sexy-chopper-bike-girl-hd-wallpaper'] = "bike_babes_c/pg8";
$route['bike-babes/Bike-babe-slept-on-bike-in-blue-bikini-hd-wallpaper'] = "bike_babes_c/pg9";
$route['bike-babes/Hot-beautiful-sport-female-bike-rider-hd-wallpaper-from-front-view'] = "bike_babes_c/pg10";
$route['bike-babes/Hot-sexy-girl-hd-wallpaper-on-red-ducati-bike'] = "bike_babes_c/pg11";
$route['bike-babes/Very-hot-sexy-chopper-girls-in-tiny-bikini-with-bike'] = "bike_babes_c/pg12";
$route['bike-babes/Blue-bike-with-blue-girl-hd-wallpaper'] = "bike_babes_c/pg13";
$route['bike-babes/Supreb-bike-babe-model-posing-decent-hd-wallpaper'] = "bike_babes_c/pg14";
$route['bike-babes/Hot-beautiful-bikini-girl-on-witor-bike-hd-wallpaper'] = "bike_babes_c/pg15";
$route['bike-babes/Girl-in-black-top-and-skirt-posing-with-RCB-Bike'] = "bike_babes_c/pg16";
$route['bike-babes/Norton-irl-in-white-top-and-blue-skirt-posing-with-bike-wallpaper'] = "bike_babes_c/pg17";
$route['bike-babes/Hot-sexy-bike-babe-in-yellow-dress-lied-down-and-posing-with-suzuki-bike'] = "bike_babes_c/pg18";
$route['bike-babes/Sexy-bikini-babe-with-bike'] = "bike_babes_c/pg19";
$route['bike-babes/Mila-Kuns-hot-sexy-photoshoot-with-chopper-bike'] = "bike_babes_c/pg20";
$route['bike-babes/Lucy-Falconer-sitting-posed-on-small-kids-toy-bike-in-yellow-bikini'] = "bike_babes_c/pg21";
$route['bike-babes/Hot-sexy-skirt-girl-sensual-pose-with-bike-hd-wallpaper'] = "bike_babes_c/pg22";
$route['bike-babes/Tire-Chopper-and-sexy-model-wallpaper'] = "bike_babes_c/pg23";
$route['bike-babes/Chopper-black-bike-posing-by-sexy-female-model'] = "bike_babes_c/pg24";
$route['bike-babes/Hot-sexy-babe-in-jacket-sat-on-bike-hd-wallpaper'] = "bike_babes_c/pg25";
$route['bike-babes/Hot-sexy-topless-model-slept-on-red-Honda-CBR-1000-in-black-panty'] = "bike_babes_c/pg26";
$route['bike-babes/Girl-in-helmet-on-bike-hd-wallpaper'] = "bike_babes_c/pg27";
$route['bike-babes/Hot-bikini-model-photo-shoot-with-honda'] = "bike_babes_c/pg28";
$route['bike-babes/Red-bikini-babe-with-red-bike-hd-wallpaper'] = "bike_babes_c/pg29";
$route['bike-babes/Red dragon bike and-sexy-bike-babe-images'] = "bike_babes_c/pg30";
$route['bike-babes/Hot-lingerie-girl-posing-with-bike'] = "bike_babes_c/pg31";
$route['bike-babes/Black-bike-babe-on-black-bike-with-black-background-wallpaper'] = "bike_babes_c/pg32";
$route['bike-babes/Bike-babe-posing-with-red-gilera-bike'] = "bike_babes_c/pg33";
$route['bike-babes/Beautiful-white-girl-posing-with-sport-bike'] = "bike_babes_c/pg34";
$route['bike-babes/Hot-bike-model-hd-wallpaper'] = "bike_babes_c/pg35";
$route['bike-babes/Hot-sexy-bike-babe-image-collection'] = "bike_babes_c/pg36";
$route['bike-babes/Hot-girl-in-pink-tshirt-with-bike'] = "bike_babes_c/pg37";
$route['bike-babes/Girls-on-bike'] = "bike_babes_c/pg38";
$route['bike-babes/Hot-spicy-bike-babe-pictures'] = "bike_babes_c/pg39";
$route['bike-babes/Bikini-babes-on-bike-hd-wallpaper'] = "bike_babes_c/pg40";
$route['bike-babes/Blonde-babes-with-bike-hd-image'] = "bike_babes_c/pg41";
$route['bike-babes/Hot-posing-female-on-four-wheeler-bike'] = "bike_babes_c/pg42";
$route['bike-babes/Hot-wet-girl-washing-bike-in-red-bikini'] = "bike_babes_c/pg43";
$route['bike-babes/Female-model-posing-for-ducati-1098-hd-wallpaper'] = "bike_babes_c/pg44";
$route['bike-babes/Chopper-girl-on-bike-in-bra-and-pant'] = "bike_babes_c/pg45";
$route['bike-babes/exy-motorcycle-model-hd-pic'] = "bike_babes_c/pg46";
$route['bike-babes/Chopper-bikini-bike-babe-wallpaper'] = "bike_babes_c/pg47";
$route['bike-babes/3D-chopper-bike-babes'] = "bike_babes_c/pg48";
$route['bike-babes/Blonde-bike-girl-images'] = "bike_babes_c/pg49";
$route['bike-babes/Female-bike-sales-models-in-bike-shop-hd-photo'] = "bike_babes_c/pg50";

// Bold Babes - Temp50pics (URL: 51)
$route['bold-babes'] = "bold_babes_c";
$route['bold-babes/1'] = "bold_babes_c/pg1";
$route['bold-babes/2'] = "bold_babes_c/pg2";
$route['bold-babes/3'] = "bold_babes_c/pg3";
$route['bold-babes/4'] = "bold_babes_c/pg4";
$route['bold-babes/5'] = "bold_babes_c/pg5";
$route['bold-babes/6'] = "bold_babes_c/pg6";
$route['bold-babes/7'] = "bold_babes_c/pg7";
$route['bold-babes/8'] = "bold_babes_c/pg8";
$route['bold-babes/9'] = "bold_babes_c/pg9";
$route['bold-babes/10'] = "bold_babes_c/pg10";
$route['bold-babes/11'] = "bold_babes_c/pg11";
$route['bold-babes/12'] = "bold_babes_c/pg12";
$route['bold-babes/13'] = "bold_babes_c/pg13";
$route['bold-babes/14'] = "bold_babes_c/pg14";
$route['bold-babes/15'] = "bold_babes_c/pg15";
$route['bold-babes/16'] = "bold_babes_c/pg16";
$route['bold-babes/17'] = "bold_babes_c/pg17";
$route['bold-babes/18'] = "bold_babes_c/pg18";
$route['bold-babes/19'] = "bold_babes_c/pg19";
$route['bold-babes/20'] = "bold_babes_c/pg20";
$route['bold-babes/21'] = "bold_babes_c/pg21";
$route['bold-babes/22'] = "bold_babes_c/pg22";
$route['bold-babes/23'] = "bold_babes_c/pg23";
$route['bold-babes/24'] = "bold_babes_c/pg24";
$route['bold-babes/25'] = "bold_babes_c/pg25";
$route['bold-babes/26'] = "bold_babes_c/pg26";
$route['bold-babes/27'] = "bold_babes_c/pg27";
$route['bold-babes/28'] = "bold_babes_c/pg28";
$route['bold-babes/29'] = "bold_babes_c/pg29";
$route['bold-babes/30'] = "bold_babes_c/pg30";
$route['bold-babes/31'] = "bold_babes_c/pg31";
$route['bold-babes/32'] = "bold_babes_c/pg32";
$route['bold-babes/33'] = "bold_babes_c/pg33";
$route['bold-babes/34'] = "bold_babes_c/pg34";
$route['bold-babes/35'] = "bold_babes_c/pg35";
$route['bold-babes/36'] = "bold_babes_c/pg36";
$route['bold-babes/37'] = "bold_babes_c/pg37";
$route['bold-babes/38'] = "bold_babes_c/pg38";
$route['bold-babes/39'] = "bold_babes_c/pg39";
$route['bold-babes/40'] = "bold_babes_c/pg40";
$route['bold-babes/41'] = "bold_babes_c/pg41";
$route['bold-babes/42'] = "bold_babes_c/pg42";
$route['bold-babes/43'] = "bold_babes_c/pg43";
$route['bold-babes/44'] = "bold_babes_c/pg44";
$route['bold-babes/45'] = "bold_babes_c/pg45";
$route['bold-babes/46'] = "bold_babes_c/pg46";
$route['bold-babes/47'] = "bold_babes_c/pg47";
$route['bold-babes/48'] = "bold_babes_c/pg48";
$route['bold-babes/49'] = "bold_babes_c/pg49";
$route['bold-babes/50'] = "bold_babes_c/pg50";

/* End of file routes.php */
/* Location: ./application/config/routes.php */