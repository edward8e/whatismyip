<?php
  // initialize
  $IP = "N/A";
  $externalContent = file_get_contents('http://checkip.dyndns.com/');
  preg_match('/Current IP Address: \[?([:.0-9a-fA-F]+)\]?/', $externalContent, $m);
  $IP = $m[1];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>What is my IP address?</title>
    <style>
      .outer-box { position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); }
      .ip-box { font-size: 48pt; font-weight: bold; }
    </style>
  </head>
  <body>
    <div class="outer-box">
      <span class="ip-box"><?php echo $IP; ?></span>
    </div>
  </body>
</html>
