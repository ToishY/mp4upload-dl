<?php
function MP4DL($embedId){
	preg_match_all('/<h2>Download File (?P<file>.*?)<\/h2>/', file_get_contents("https://www.mp4upload.com/".$embedId), $f);
	preg_match_all('/(?P<server>www\d{1,2}|s\d{1})\|.*\|poster\|([a-z0-9]+)\|([nivideo|video]+)\|(?P<string>[a-z0-9]{56})\|(?P<port>\d{1,3})/', file_get_contents("https://www.mp4upload.com/embed-".$embedId.".html"), $m);
	return sprintf('https://%s.mp4upload.com:%s/d/%s/%s', $m['server'][0], $m['port'][0], $m['string'][0], $f['file'][0]);
}
#how to use
echo MP4DL("f00lb4rz");
?>
