<?php	//Declare the URL
curl_edit();
function curl_edit(){
	$url = "https://creator.zoho.com/api/aorborctechnologiescpt/json/quotes-meena1/form/Account_client/record/update/";
	//Add POST parameters
	$post_fields = array();
	$post_fields['authtoken'] = "a69bd560ff2628b1ef64b37c2903cd22";
	$post_fields['scope'] = "creatorapi";
	$post_fields['Pan'] = "12222222222221";
	$post_fields['criteria'] = "(Bank_Name == Hdfc)";
	$ch = curl_init($url);
	//Set CURL options
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch,CURLOPT_POST, 1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);
	$response = curl_exec($ch);
	curl_close($ch);
	echo $response;
}
?>