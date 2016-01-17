<?php

if (!empty($_SERVER["HTTP_IF_NONE_MATCH"])) {
    $etag = substr(str_replace(".", "", str_replace("/", "", str_replace("\\", "", $_SERVER["HTTP_IF_NONE_MATCH"]))), 0, 18);
}
else {
    $etag = substr(sha1($secret . sha1($_SERVER["REMOTE_ADDR"]) . sha1($_SERVER["HTTP_USER_AGENT"])), 0, 18);
}

header("ETag: " . substr($etag, 0, 18));
exit;
?>
