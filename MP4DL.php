<?php
function MP4DL($embedId){
	preg_match('/(?P<server>w{3}\d{1,2}).*(?P<string>[a-zA-Z0-9]{56}).(?P<port>\d{3})/', file_get_contents("https://www.mp4upload.com/embed-".$embedId.".html"), $result);
  	return "https://".$result["server"].".mp4upload.com:".$result["port"]."/d/".$result["string"]."/video.mp4";
}
#how to use
echo MP4DL("f00lb4rz");
?>
