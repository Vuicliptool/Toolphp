<?php
if (!file_exists("Data")) {
	system("mkdir Data");
}
if (file_exists("User_Agent")) {
	$nama_file = "User_Agent";
	if(PHP_OS_FAMILY == "Windows"){
		system("move $nama_file Data");
	} else {
		system("mv $nama_file Data");
	}
}
@License::_start();
Ban();
$version = @iewil::_Checkversion();
if($version[1]) {
	print Error("Latest Version: ".k.$version[1].n);
	print Line();
	$x = file_get_contents("https://raw.githubusercontent.com/iewilmaestro/TOOL_PHP/main/App/Update.txt");
	print h."[+] ".p."= add".m.", ".h."[".k."*".h."] ".p."= edit".m.", ".h."[".m."-".h."] ".p."= remove\n\n";
	print ReplaceTxt($x).n;
	print Line();
	Menu($a+=1,"Update Versi");
	$tam[$a] = "update";
}else{
	print Sukses("Latest Version: ".k.$version[0]);
	print Line();
}

if(@iewil::_CheckDataApi("Multibot_Apikey")) {
	Menu($a+=1,"Xóa APi Multibot");
	$tam[$a] = "multi";
}
if(@iewil::_CheckDataApi("Xevil_Apikey")) {
	Menu($a+=1,"Xóa API Xevil");
	$tam[$a] = "xevil";
}
if(@iewil::_CheckDataApi("Shortlink_Apikey")) {
	Menu($a+=1,"Xóa APi Shortlink");
	$tam[$a] = "sl";
}
if($a > 0){
	Menu($a+=1,"Skip");
	$tam[$a] = "skip";
}
if($tam){
	$pil = readline(Isi("Number"));
	print d;
	if($pil == '' || $pil >= Count($tam)+1)exit(Error("Sai"));
	if($tam[$pil] == "update"){
		system("git reset --hard");
		system("git pull");
		print Line();
		exit(Sukses("Chạy lại đi chế"));
	}elseif($tam[$pil] == "multi"){
		unlink("Data/Apikey/Multibot_Apikey");
		print Sukses("Đã xóa thành công Apikey Multibot");
		sleep(3);
	}elseif($tam[$pil] == "xevil"){
		unlink("Data/Apikey/Xevil_Apikey");
		print Sukses("Đã xóa thành công Apikey Xevil");
		sleep(3);
	}elseif($tam[$pil] == "sl"){
		unlink("Data/Apikey/Shortlink_Apikey");
		print Sukses("Đã xóa thành công Apikey Shortlink");
		sleep(3);
	}else{
	}
	Ban();
}

/************( MENU BOT )************/
menu_pertama:
print t.mp.str_pad(strtoupper("menu"),44, " ", STR_PAD_BOTH).d.n;
print Line();
$r = scandir("App/Bot");$a = 0;
foreach($r as $act){
	if($act == '.' || $act == '..') continue;
	$menu[$a] =  $act;
	Menu($a, $act);
	$a++;
}
$pil = readline(Isi("Number"));
print Line();
if($pil == '' || $pil >= Count($menu))exit(Error("Sai"));

menu_kedua:
print t.mp.str_pad(strtoupper("menu -> ".$menu[$pil]),44, " ", STR_PAD_BOTH).d.n;
print Line();
$r = scandir("App/Bot/".$menu[$pil]);$a = 0;
foreach($r as $act){
	if($act == '.' || $act == '..') continue;
	$menu2[$a] =  $act;
	Menu($a, Clean($act));
	$a++;
}
Menu($a, m.'<< Back');
$pil2 = readline(Isi("Number"));
print Line();
if($pil2 == '' || $pil2 > Count($menu2))exit(Error("Sai"));
if($pil2 == Count($menu2))goto menu_pertama;
if(explode('-',$menu2[$pil2])[1])exit(Error("Sai"));
$is_file = is_file("App/Bot/".$menu[$pil]."/".$menu2[$pil2]);
if($is_file){
	define("nama_file",clean($menu2[$pil2]));
	Ban(1);
	require "App/Bot/".$menu[$pil]."/".$menu2[$pil2];
	exit;
}

print t.mp.str_pad(strtoupper('menu -> '.$menu[$pil].' -> '.$menu2[$pil2]),44, " ", STR_PAD_BOTH).d.n;
print Line();
$r = scandir("App/Bot/".$menu[$pil]."/".$menu2[$pil2]);$a=0;
foreach($r as $act){
	if($act == '.' || $act == '..') continue;
	$menu3[$a] =  $act;
	Menu($a, Clean($act));
	$a++;
}
Menu($a, m.'<< Back');
$pil3 = readline(Isi("Number"));
print Line();
if($pil3 == '' || $pil3 > Count($menu3))exit(Error("Sai"));
if($pil3 == Count($menu3))goto menu_kedua;
if(explode('-',$menu3[$pil3])[1])exit(Error("Sai"));

define("nama_file",clean($menu3[$pil3]));
Ban(1);
require "App/Bot/".$menu[$pil]."/".$menu2[$pil2]."/".$menu3[$pil3];