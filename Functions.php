<?php

function replacetxt($msg){
	$awal = ["[","]","+","-",">","*"];
	$akhir =[h."[",h."]".p,h."+",m."-",m.">".p,k."*"];
	return str_replace($awal,$akhir,$msg);
}
/*************PRINT**************/
function menu($no, $title){
	print h."---[".p."$no".h."] ".k."$title\n";
}
function Error($except = "[No Content]"){
	return m."---[".p."!".m."] ".p.$except;
}
function Isi($msg){
	return m."╭[".p."Input ".$msg.m."]".n.m."╰> ".h;
}
function Sukses($msg = "[No Content]"){
	return h."---[".p."✓".h."] ".p.$msg.n;
}
function Cetak($label, $msg = "[No Content]"){
	$len = 9;
	$lenstr = $len-strlen($label);
	print h."[".p.$label.h.str_repeat(" ",$lenstr)."]─> ".p.$msg.n;
}
function Line(){
	date_default_timezone_set("Asia/Ho_Chi_Minh");
$gio = date("H:i:s");      
echo "\t\033[1;32m======>>>>>>>>>>>>\033[0;37m$gio\033[1;32m<<<<<<<<<<<=======\n\n";
}
function clean($extensi){
	return str_replace(".php","",$extensi);
}
function Title($activitas){
	print bp.str_pad(strtoupper(nama_file)."-".strtoupper($activitas),44, " ", STR_PAD_BOTH).d.n;
	print Line();
}
/************Banner****************/

function authBan($title, $str){
	$title_len_s = 8;
	$strlen_s = 19;
	$title_len = $title_len_s - strlen($title);
	$strlen = $strlen_s - strlen($str);
	return bp." ".$title.str_repeat(" ",$title_len).d.pb." ".$str.str_repeat(" ",$strlen).d.n;
}
function fast($arr){
  $char = str_split($arr);
  foreach($char as $an){
    echo $an;
    usleep(5000);}}
function fast1($arr){
  $char = str_split($arr);
  foreach($char as $an){
    echo $an;
    usleep(1000);}}
function slow2($arr){
  $char = str_split($arr);
  foreach($char as $an){
    echo $an;
    usleep(3000); }}
function Ban($sc = 0){
	system("clear");
$c1="\033[31m";$c2="\033[32m";$c3="\033[33m";$c4="\033[34m";$c5="\033[35m";$c6="\033[36m";$c7="\033[91m";$c8="\033[92m";$c9="\033[93m";$c10="\033[94m";$c11="\033[95m";$c12="\033[96m";$c0="\033[0m";
$coolrs = array(''.$c1.'',''.$c2.'',''.$c3.'',
''.$c4.'',''.$c5.'',''.$c6.'',''.$c7.'',''.$c8.'',''.$c9.'',''.$c10.'',''.$c11.'',''.$c12.'',);
$clo1=$coolrs[mt_rand(0, sizeof($coolrs) - 1)];
$clo2=$coolrs[mt_rand(0, sizeof($coolrs) - 1)];
$clo3=$coolrs[mt_rand(0, sizeof($coolrs) - 1)];
$clo4=$coolrs[mt_rand(0, sizeof($coolrs) - 1)];
$clo5=$coolrs[mt_rand(0, sizeof($coolrs) - 1)];
$clo6=$coolrs[mt_rand(0, sizeof($coolrs) - 1)];
$clo7=$coolrs[mt_rand(0, sizeof($coolrs) - 1)];
system ('clear');
echo fast1("\t\t$clo7          〚 𝕋𝕆𝕆𝕃 𝔹𝕐 〛            

$clo1\t██╗   ██╗██╗   ██╗██╗ ██████╗██╗     ██╗██████╗ 
$clo2\t██║   ██║██║   ██║██║██╔════╝██║     ██║██╔══██╗
$clo3\t██║   ██║██║   ██║██║██║     ██║     ██║██████╔╝
$clo4\t╚██╗ ██╔╝██║   ██║██║██║     ██║     ██║██╔═══╝ 
$clo5\t ╚████╔╝ ╚██████╔╝██║╚██████╗███████╗██║██║     
$clo6\t  ╚═══╝   ╚═════╝ ╚═╝ ╚═════╝╚══════╝╚═╝╚═╝     

");
echo slow2("$clo1\t╔♫════════════════════════════════════════♫═╗\n");
echo slow2("$clo6          👉YOUTUBE  : VUICLIP-TOOL-TERMUX\n");
echo slow2("$clo7          👉ZALO     : zalo.me/g/gidiwv418\n");
echo slow2("$clo5          👉TELEGRAM : t.me/vuiclip_tool_termux\n");
echo slow2("$clo4          👉Remember to Subscribe to the Channel\n");
echo slow2("$clo1\t╚═♫════════════════════════════════════════♫╝\n\n");
	if($sc){
		print t.mp.str_pad(strtoupper(nama_file),44, " ", STR_PAD_BOTH).d.n;
		print Line();
	}
}

function run($url, $ua, $data = null,$cookie=null) {
	while(true){
		$ch = curl_init();curl_setopt_array($ch, array(CURLOPT_URL => $url,CURLOPT_FOLLOWLOCATION => 1,));
		if ($data) {
			curl_setopt_array($ch, array(CURLOPT_POST => 1,CURLOPT_POSTFIELDS => $data,));}
		curl_setopt_array($ch, array(CURLOPT_HTTPHEADER => $ua,CURLOPT_SSL_VERIFYPEER => 1,CURLOPT_RETURNTRANSFER => 1,CURLOPT_ENCODING => 'gzip'));
		if ($cookie) {
			curl_setopt_array($ch, array(CURLOPT_COOKIEFILE=>"cookie.txt", CURLOPT_COOKIEJAR=>"cookie.txt",));}
		$run = curl_exec($ch);curl_close($ch);
		if(!$run){
			print "\r                                       \r";
			print Error("Check your Connection!");
			sleep(2);
			print "\r                                       \r";
			continue;
		}
		return $run;
	}
}
function Curl($u, $h = 0, $p = 0,$cookie = 0, $lewat = 0) {
	while(true){
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $u);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_COOKIE,TRUE);
		if($cookie) {
			curl_setopt($ch, CURLOPT_COOKIEFILE,"Data/".nama_file."/cookie.txt");
			curl_setopt($ch, CURLOPT_COOKIEJAR,"Data/".nama_file."/cookie.txt");
		}
		if($p) {
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $p);
		}
		if($h) {
			curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
		}
		curl_setopt($ch, CURLOPT_HEADER, true);
		$r = curl_exec($ch);
		if($lewat){
			return 0;
		}
		$c = curl_getinfo($ch);
		if(!$c) return "Curl Error : ".curl_error($ch); else{
			$hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			$bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			curl_close($ch);
			if(!$bd){
				print Error("Check your Connection!");
				sleep(2);
				print "\r                         \r";
				continue;
			}
			return array($hd,$bd);
		}
	}
}
function Auth($w){
	$lo[] = $w."L".p."oading....";
	$lo[] = p."L".$w."o".p."ading....";
	$lo[] = p."Lo".$w."a".p."ding....";
	$lo[] = p."Loa".$w."d".p."ing....";
	$lo[] = p."Load".$w."i".p."ng....";
	$lo[] = p."Loadi".$w."n".p."g....";
	$lo[] = p."Loadin".$w."g".p."....";
	$lo[] = p."Loading".$w.".".p."...";
	$lo[] = p."Loading.".$w.".".p."..";
	$lo[] = p."Loading..".$w.".".p.".";
	return $lo;
}
function Tmr($tmr){
	date_default_timezone_set("UTC");
	$col = [b,c,d,h,k,m,u];
	$sym = [' ─ ',' / ',' │ ',' \ ',];
	$timr = time()+$tmr+rand(5,10);
	$a = 0;
	while(true){
		$a +=1;
		$x = $col[array_rand($col)];
		$nic = auth($x);
			
		$res=$timr-time();
		if($res < 1) {
			break;
		}
		print "         ".$x.$sym[$a % 4].p.date('H',$res).$x.":".p.date('i',$res).$x.":".p.date('s',$res)." ".$nic[$a % count($nic)]."\r";
		usleep(100000);
	}
	print "\r                                   \r";
}

function num_rand($int){
	$rand_num = "1234567890";
	$split = str_split($rand_num);
	$res = "";while(true){
		$rand = array_rand($split);
		$res .= $split[$rand];
		if( strlen($res) == $int ){ 
			return $res; 
		}
	}
}
function str_rand($int){
	$rand_str = "abcdefghijklmnopqrstuvwqyz";
	$rand_num = "1234567890";
	$rand_str_up= "ABCDEFGHIJKLMNOPQRSTUVWQYZ";
	$split = str_split($rand_str.$rand_num.$rand_str_up);
	$res = "";while(true){
		$rand = array_rand($split);
		$res .= $split[$rand];
		if( strlen($res) == $int ){
			return $res;
		}
	}
}
function His($newdata,$data=0){
	if(!$data){
		$data = [];
	}
	return array_merge($data,$newdata);
}
function cfDecodeEmail($encodedString){
  $k = hexdec(substr($encodedString,0,2));
  for($i=2,$email='';$i<strlen($encodedString)-1;$i+=2){
    $email.=chr(hexdec(substr($encodedString,$i,2))^$k);
  }
  return $email;
}
function Satoshi($int){
	return sprintf('%.8f',floatval($int));
}

/*******GLOBAL CHECK*******/
function Simpan($nama_data){
	if(file_exists("Data/".nama_file."/".$nama_data)){
		$data = file_get_contents("Data/".nama_file."/".$nama_data);
	}else{
		if(!file_exists("Data/".nama_file)){
			system("mkdir ".nama_file);
			if(PHP_OS_FAMILY == "Windows"){
				system("move ".nama_file." Data");
			}else{
				system("mv ".nama_file." Data");
			}
			print Sukses(h."Đã tạo thành công Thư mục ".k.nama_file.n);
		}
		$data = readline(Isi($nama_data));echo "\n";
		file_put_contents("Data/".nama_file."/".$nama_data,$data);
	}
	return $data;
}
function ua(){
	$nama_data = "User_Agent";
	if(file_exists('Data/'.$nama_data)){
		$data = file_get_contents('Data/'.$nama_data);
	}else{
		$data = readline(Isi($nama_data));echo "\n";
		file_put_contents('Data/'.$nama_data,$data);
	}
	return $data;
}
function Hapus($nama_data){
	unlink("Data/".nama_file."/".$nama_data);
}
function GlobalCheck($source){
	(preg_match('/Cloudflare/',$source) || preg_match('/Just a moment.../',$source))? $data['cf']=true:$data['cf']=false;
	(preg_match('/Firewall/',$source))? $data['fw']=true:$data['fw']=false;
	return $data;
}
function Parsing($source){
	preg_match_all('#<input type="(.*?)" name="(.*?)" value="(.*?)"#',$source,$input);
	for($i = 0; $i<count($input[0]);$i++){
		$clear = explode('"',$input[2][$i])[0];
		$data[$clear] = $input[3][$i];
	}
	return $data;
}

/*************************** APIKEY ***************************/
function Simpan_Api($nama_data){
	if(file_exists("Data/Apikey/".$nama_data)){
		$data = file_get_contents("Data/Apikey/".$nama_data);
	}else{
		if(!file_exists("Data/Apikey")){
			system("mkdir Apikey");
			if(PHP_OS_FAMILY == "Windows"){
				system("move Apikey Data");
			}else{
				system("mv Apikey Data");
			}
			print Sukses(h."Đã tạo thành công Thư mục ".k."Apikey".n);
		}
		$data = readline(Isi($nama_data));echo "\n";
		file_put_contents("Data/Apikey/".$nama_data,$data);
	}
	return $data;
}
function CheckApi(){
	Cetak("Register",provider_ref);
	$apikey = Simpan_Api(provider_api."_Apikey");
	if(provider_api == "Xevil"){
		$api = New ApiXevil($apikey);
	}
	if(provider_api == "Multibot"){
		$api = New ApiMultibot($apikey);
	}
	if($api->getBalance()){
		print Sukses(h."OK\n");
		sleep(3);
		return $apikey;
	}else{
		unlink("Data/Apikey/".provider_api."_Apikey");
		exit(Error("Apikey: ".m."Something wrong!".n));
	}
}
function MenuApi(){
	Cetak("Captcha",typeCaptcha);
	if(typeCaptcha == "hcaptcha"){
		$multi = p."[".k."required".p."]";
		$xevil = "";
	}else{
		$multi = "";
		$xevil = p."[".k."required".p."]";
	}
	Menu(1, "Multibot $multi");
	Menu(2, "Xevil $xevil");
	$pil = readline(Isi("Provider Apikey"));
	print line();
	if($pil == 1){
		define("provider_api","Multibot");
		define("provider_ref", "http://api.multibot.in/");
		$apikey = CheckApi();
	}elseif($pil == 2){
		define("provider_api","Xevil");
		define("provider_ref", "t.me/Xevil_check_bot?start=6192660395");
		$apikey = CheckApi();
	}else{
		exit(Error("Tolol\n"));
	}
	return $apikey;
}
/********SL********/
function ApiShortlink(){
	if(!file_exists("Data/Apikey/Shortlink_Apikey")){
		Cetak("Register","@bpsl06_bot");
	}
	return Simpan_Api("Shortlink_Apikey");
}
function imgfail(){
print m."
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣀⠤⢶⣶⡶⣒⣂⣴⣶⣶⣤⣤⣀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⡠⠖⢉⡂⣀⣉⣶⣿⣏⣥⣤⣤⣄⣙⠿⣿⣿⣧⡠⢤⣴⣶⣶⣶⣶⣶⣶⣦⣤⣤⠀⡀⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⠞⣫⣴⣾⢏⣴⣿⣿⣿⣿⣷⣌⢿⣿⣿⣿⣿⠢⣝⣿⣿⣦⡙⢿⣿⣿⣿⣿⣿⣿⡟⢁⣾⠃⠀⠀⠀⠀⠀⠀⠀⠀
⠀⠀⠀⠀⠀⢀⠀⢀⣾⣋⣼⢿⣿⠏⣾⣿⣿⣿⣿⣿⣿⣿⣆⢻⣿⣿⣿⢷⣌⢻⣿⡿⣿⣦⠻⣿⣿⣿⠟⣋⣼⣿⡿⠀⠀⠀⠀⠀⠀⠀⠀⠀
⣤⣴⣶⣾⣿⡟⣱⣿⣿⡿⢡⡿⠟⣸⣿⣿⡟⡿⣿⣿⡌⣿⢹⡆⠙⣷⣼⣦⣫⡀⠻⣿⡸⣿⣦⠈⠛⢡⣤⣾⣿⣿⠇⠀⠀⠀⠀⠀⠀⠀⠀⠀
⣿⣿⣿⣿⡟⣴⣿⣟⡿⣱⡿⢡⡷⣿⢼⣿⣦⣦⣿⣿⣿⢸⣿⣷⢰⡜⢿⣿⠻⣷⡄⢹⣷⡹⣿⣷⡄⣶⣙⠻⢿⡟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⣍⠙⠿⠟⣸⣷⣿⣼⢣⣿⢣⣿⠃⣿⢼⣿⣿⣿⣿⣿⣿⡇⢿⣿⡆⣿⡌⠻⣷⡙⣿⠄⢿⣧⣿⣿⣷⡘⣋⣁⡬⠁⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⣿⠗⡀⢰⣿⣿⣿⠇⣾⠏⣾⢃⣶⢻⡏⣿⠸⣿⣿⣿⣿⢧⠸⡏⢇⢻⣿⣆⠙⢷⡈⢣⡈⢿⣿⣿⣿⢧⢈⣒⢃⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
⣴⣴⢇⣿⣿⣿⡿⢠⣿⢠⠏⢸⣿⠘⡇⢹⣦⢻⣿⣿⡿⢸⡀⠛⠸⢸⣿⣿⡄⠀⠱⣀⠃⠸⣿⣿⣿⡎⡚⠃⠸⡇⠀⠰
⠈⠟⣼⣿⣿⣿⡇⣼⡇⡼⢠⣿⣿⡇⠸⠀⢿⣇⢻⣯⣵⣿⡇⡎⣿⢸⣶⣶⣦⣤⠠⣌⡂⠀⣿⣿⣿⣿⢡⠀⢡⣿⠀⠈
⠀⢠⢇⣿⣿⣿⡇⣿⠃⠁⣛⣩⣥⣶⠈⣇⠈⣿⣆⢻⣿⣿⡇⣧⢘⢸⣿⣿⣿⣿⣷⡘⣿⡄⣿⣿⣿⣿⠘⡄⣾⣿⢠⠀
⠀⡸⢸⣿⢻⣿⡇⢩⣤⢸⣿⣿⣿⣿⣷⡘⡆⠈⢿⣆⢻⣿⡇⢹⡇⢘⣿⣿⣿⣿⣿⣿⡌⠇⢿⣿⡇⣿⡇⢷⠉⠃⢀⡆
⢀⠇⢸⣿⠈⣿⡇⢸⡏⣾⣿⣿⣿⣯⣭⣅⡘⣆⠈⢙⠦⠹⣷⢸⡛⠉⠁⠀⠀⠀⠀⠈⠙⠂⢸⣿⡇⣿⡇⠘⡆⢀⣾⡇
⢸⠀⢸⣿⢀⢹⣧⠀⢣⠟⠉⣁⠀⠀⠀⠀⢁⣸⣿⣦⣑⢤⣈⠸⣿⣧⣀⣄⣠⡀⢸⣿⡆⢀⣸⣿⠀⣿⠁⣦⢱⠀⣿⣷
⢸⢰⠈⣿⡜⠘⣿⡆⢀⠀⢸⣿⣄⠰⣀⣀⢠⣿⣿⣿⣿⣿⣿⣿⣿⣿⣯⣉⣉⣁⣿⣿⣤⡆⣿⠃⣸⣿⢀⡞⡸⠀⢻⣿
⡌⢸⡆⠘⣇⢳⠸⣿⡀⢿⣦⢻⣿⣬⣭⠥⢾⣿⣿⣿⣿⣿⣿⢿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠰⢃⣴⣿⡿⢈⡼⢁⠀⠻⣿
⡇⠀⣿⠀⡘⠈⡗⠙⢧⠘⢿⣿⣿⣿⣧⣴⣿⣿⣿⣿⣿⣿⣿⣿⣸⣿⣿⣿⣿⣿⣿⠟⠁⡴⢸⣿⡿⠁⠀⢠⣿⢰⡀⢸
⣿⣧⢹⢸⡇⡄⠿⣦⣀⠀⠈⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣵⣶⣾⠃⠟⣩⣶⡇⠀⢸⢹⢸⡇⣦
⣿⣿⣆⠸⡀⡇⢠⠻⣿⣧⠀⠈⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⢈⣶⣶⣾⣿⣿⣿⣿⠟⠁⠀⣼⣿⢻⠇⡀⢸⣿⢸⠀⣿
⣿⣿⣿⢠⠀⠿⢸⣷⣌⠻⠀⠀⠈⠻⢿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⣿⡿⠟⠁⠀⠀⢠⣿⠏⡾⠠⡇⢸⡏⢸⣇⢻
⣿⣿⡟⣸⠀⢷⡈⣿⣿⣷⡇⠲⡄⠀⠀⠈⠙⠛⠿⠿⣿⣿⣿⣿⣿⠿⠛⠁⣀⣤⠀⠀⠂⣼⡟⣼⠃⠀⡇⢸⡇⢸⣿⢸
⣿⣿⡇⡟⠀⢸⡇⠸⣿⡌⢷⠀⠉⢄⠀⠀⠀⠀⠀⢀⡀⠀⠉⠉⠀⢀⣠⣶⣿⡏⠀⠀⢰⡟⣼⠃⠀⠀⠃⣾⡇⣾⣿⡆
⣿⣿⢹⡇⠀⢸⡇⠀⢻⣿⣌⠀⠀⠀⠁⠀⢀⣤⠖⠸⣿⣦⣄⣠⡶⢿⣿⣿⣿⠇⠀⢀⣿⡾⠁⠀⠀⠀⢸⣿⢁⣿⠀⣧
⣿⡏⣼⠀⢀⣦⠣⠀⠀⠻⣿⣦⠀⠀⠘⢧⣶⡀⠀⠀⣿⣟⢙⣩⣶⣿⣿⡿⢟⣠⣴⡿⠋⣴⠖⣠⣀⢀⣿⠃⣼⠃⠀⠸
⣿⢡⡇⢠⢸⣿⢇⡄⠀⠀⠙⠻⣷⡄⠀⣬⣛⣿⣦⣄⡛⠿⣿⡿⠟⣋⣥⡶⠿⢛⠀⣰⡿⢋⣄⠹⠃⠾⠁⢄⠁⠸⡄⡀
".d;
}
function textfail(){
	print mp.str_pad(strtoupper("SCRIPT ERROR!!"),44, " ", STR_PAD_BOTH).d.n;
	print p."ID: syarat penggunaan script\n";
	print "- install dengan cara yang sudah saya ajarkan di youtube\n";
	print h."- https://youtu.be/BSWuetDKM0A?si=JVHxYswCVZL5o93X\n";
	print p."- jangan edit nama folder script / isi script\n";
	print "- jangan membuat duplicate folder\n";
	print Line();
	print p."EN: terms of use of the script\n";
	print "- install using the method I taught at youtube\n";
	print h."- https://youtu.be/BSWuetDKM0A?si=JVHxYswCVZL5o93X\n";
	print p."- do not edit the script folder name / script contents\n";
	print "- do not create duplicate folders\n";
	print Line();
	readline(m."Prees Enter to Exit");
	exit;
}