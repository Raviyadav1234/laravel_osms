<?php

function prx($arg,$exit=true){

	echo '<pre style="background-color:yellow;font-size:1.5rem;color:red;font-weight:bold;">';
	if(is_array($arg)){

		print_r($arg);

	}else if(is_object($arg) or is_bool($arg)){

		var_dump($arg);

	}else{
		echo $arg;
	}
	echo '</pre>';
	if($exit==true){
			exit;	
	}

}

function pr($arg){

	echo '<pre style="background-color:yellow;font-size:1.5rem;color:red;font-weight:bold">';
	if(is_array($arg)){

		print_r($arg);

	}else if(is_object($arg) or is_bool($arg)){

		var_dump($arg);

	}else{
		echo $arg;
	}
	echo '</pre>';

}


//hide flash message
if(!function_exists('hide_msg')){
	function hide_msg($msg_id=''){
     echo "<script>
		setTimeout(function(){
		document.getElementById('$msg_id').style='display:none';
		},3000);
		</script>";
	}
}


?>