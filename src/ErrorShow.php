<?php
$wikon_version = WIKON;
echo <<<EOF
<!DOCTYPE html>
<style>
body {
    font-family: Arial, sans-serif;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 100vh;
    margin: 0 0 0 0;
}
h1 {
    font-weight: normal;
}
</style>
<h1>Wikon $wikon_version internal error</h1>
<p>$error</p>
EOF;
header("HTTP/1.1 500 Internal Server Error");
exit;
