<?php
  $tag = $_POST['tag'];
  switch ($tag){
  		case 1:
  			$content = '{ "n1":"this is textpage1", "n2":"this is textpage1" }';
  			break;
  		case 2:
  			$content = '{ "n1":"this is textpage2", "n2":"this is textpage2" }';
  			break;
  		case 3:
  			$content = '{ "n1":"this is textpage3", "n2":"this is textpage3" }';
  			break;
  	}
  echo $content;
?>