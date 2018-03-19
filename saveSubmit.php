<?php 
if (isset($_POST['data'])) {
	$data=$_POST['data'];
	$arr=json_decode($data);
	// write into file
	file_put_contents($arr->userName . date("_Ymdhisa_") . 'feedback.json', $data);
	// var_dump($arr);
	// echo $arr->userName;


	echo 'Success!';
}
else{
	echo 'Fail!';
}
?>