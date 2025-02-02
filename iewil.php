

class iewil {
	
	protected $author;
	protected $youtube;
	
	public function __construct() {
		$this->author = "iewilmaestro";
		$this->youtube = "https://www.youtube.com/@iewil";
	}
	static function start() {
		self::importColor();
		self::view();
		//require "App/main.php"; global error
	}
	static function getYt(){
		$yt = [];
	}
	static function importColor() {
		if( PHP_OS_FAMILY == "Linux" ){
			define("t","\t");
			define("n","\n");
			define("d","\033[0m");
			define("m","\033[1;31m");
			define("h","\033[1;32m");
			define("k","\033[1;33m");
			define("b","\033[1;34m");
			define("u","\033[1;35m");
			define("c","\033[1;36m");
			define("p","\033[1;37m");
			define("mp","\033[101m\033[1;37m");
			define("hp","\033[102m\033[1;30m");
			define("kp","\033[103m\033[1;37m");
			define("bp","\033[104m\033[1;37m");
			define("up","\033[105m\033[1;37m");
			define("cp","\033[106m\033[1;37m");
			define("pm","\033[107m\033[1;31m");
			define("ph","\033[107m\033[1;32m");
			define("pk","\033[107m\033[1;33m");
			define("pb","\033[107m\033[1;34m");
			define("pu","\033[107m\033[1;35m");
			define("pc","\033[107m\033[1;36m");
		} else {
			define("t","\t");
			define("n","\n");
			define("d","\033[0m");
			define("m","");
			define("h","");
			define("k","");
			define("b","");
			define("u","");
			define("c","");
			define("p","");
			define("mp","");
			define("hp","");
			define("kp","");
			define("bp","");
			define("up","");
			define("cp","");
			define("pm","");
			define("ph","");
			define("pk","");
			define("pb","");
			define("pu","");
			define("pc","");
		}
	}
	static function _checkversion() {
		$server = json_decode(file_get_contents("https://raw.githubusercontent.com/iewilmaestro/TOOL_PHP/main/App/setup.json"),1);
		$local = json_decode(file_get_contents("App/setup.json"),1);
		$version_server = $server['version'];
		$version_local = $local['version'];
		if($version_server != $version_local){
			return [1 => $version_server];
		}else{
			return [0 => $version_server];
		}
	}
	static function _checkDataApi( $file ) {
		if(file_exists("Data/Apikey/$file")) {
			return 1;
		}else{
			return 0;
		}
	}
	static function view(){
		$tanggal = date("dmy");
		$file = "Data/view";
		$youtube = "https://www.youtube.com/@iewil";
		if(!file_exists($file)){
			system("termux-open-url ".$youtube);
			file_put_contents($file, $tanggal);
		}else{
			$cek = file_get_contents($file);
			if($cek != $tanggal){
				system("termux-open-url ".$youtube);
				file_put_contents($file, $tanggal);
			}
		}
	}
}
