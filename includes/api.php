<?php
///////////////////////////////////////////////////////////////////////////////////////////
// mixerfy v1                                                                            //
// Description: Simple  customizable one-page website template made for mixer streamers. //
// Author: MSFTserver                                                                    //
// Website: http://msft.online                                                           //
// Support: sawyerlemmo@gmail.com                                                        //
// Twitter: http://twitter.com/MSFTserver                                                //
///////////////////////////////////////////////////////////////////////////////////////////
?>
<?php
	$api = json_decode(curl_get_file_contents('https://mixer.com/api/v1/channels/'.$mixer_channel), true);
	$display_name = $api['token'];
	$game = $api['type']['name'];
	$status = $api['online'];
	if($status === true){
		$status = 'online';
		} 	else {
			$status = 'offline';
	}
	$url = $api['token'];
	$avatar = $api['user']['avatarUrl'];
	$views = $api['viewersTotal'];
	$followers = $api['numFollowers'];
	$profile_color = false;
	if($accent_color){ 
		$profile_color = $accent_color;
	}
	elseif($api['profile_banner_background_color'] != null){ 
		$profile_color = $api['profile_banner_background_color'];
	}
	$stream = $api;
	$viewers = $stream['viewersCurrent'];
	$online = false;
	if ($stream['online'] === true) {
		$online = true;
	}
	$referral="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$version = '1.1';
	$profile = $api;
	$bio = $profile['user']['avatarUrl'];
	function curl_get_file_contents($URL){
		$c = curl_init();
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($c, CURLOPT_URL, $URL);
		$contents = curl_exec($c);
		curl_close($c);
		if ($contents) return $contents;
		else return FALSE;
	}
?>