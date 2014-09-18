<?php

function build_image_list() {
  // This should be a global variable for web root
  $web = getcwd(); 
  $handle = opendir($web ."/images");
  $image_list = array();
  while( false !== ($entry = readdir($handle))) {  
    $image_list[] = $entry;
  }
  $count = 0;
  $output = '';
  foreach($image_list as $key => $image) {
    if($image != '.' && $image != '..') {
      if($count < 5) {
         $output .= '<li class="business-photo"><img alt="Business Name" src="' ."images/$image" .'"/></li>';
         $count++;
      }else{
        $output .= '<li class="business-photo hidden"><img alt="Business Name" src="' ."images/$image" .'"/></li>';
        $count++;
      }
    }
  }
  return $output;
}

?>