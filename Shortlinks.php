<?php

Class Shortlinks {
	function __construct($apikey){
		$this->host = "http://api-xnoxs.my.id";
		$this->apikey = $apikey;
	}
	function check($nama){
		$check = strtolower($nama);
		print k."--[".p."?".k."] ".p."check $check";
		$supported = [
			"linksfly" => "fly",
			"shortsfly" => "fly",
			"urlsfly" => "fly",
			"wefly" => "fly",
			"clicksflyme" => "fly",
			"linksly" => "linksly",
			"adcorto" => "adcorto",
			"c2g" => "c2g",
			"shrinkme" => "shrinkme",
			"shrkearn" => "shrinkearn",
			"urlhives" => "urlhives",
			"linkhives" =>"linkhives",
			"shortsme" => "shortsme",
			"adlink" => "adlink",
			"revcut" => "revcut",
			"bitad" => "bitad",
			"urlcut" => "urlcut",
			"cutlink" => "cutlink",
			"msshort" => "msshort"
		];
		sleep(2);
		$filter = $supported[$check];
		if($filter){
			print "\r                              \r";
			print h."[".p."√".h."] support shortlink";
			sleep(2);
			print "\r                              \r";
			return ["status" => 1,"shortlink_name" => $filter];
		}else{
			print "\r                                \r";
			print m."[".p."!".m."] not support shortlink";
			sleep(2);
			print "\r                              \r";
			return ["status" => 0,"message" => "not supported shortlink"];
		}
	}
	function Bypass($name, $shortlink){
		$r = json_decode(
			file_get_contents(
				$this->host."/api.php?apikey=".$this->apikey."&name=".$name."&url=".$shortlink
			),
			true
		);
		
		if($r['status'] == "success"){
			return $r;
		}else{
			exit(Error($r['msg']."\n"));
		}
	}
}