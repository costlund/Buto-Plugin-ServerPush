<?php
class PluginServerPush{
  public function push($url, $data){
    $postdata = http_build_query($data);
    $opts = array('http' => 
      array (
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata,
        'timeout' => 60*5
      )
    );
    $context  = stream_context_create($opts);
    return file_get_contents($url, false, $context);
  }
}
