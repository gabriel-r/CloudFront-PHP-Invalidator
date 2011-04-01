<?
	require 'CloudFront.php';
	
	// your AWS/CloudFront keys go here
	$keyId          = ""; 
	$secretKey      = "";
	$distributionId = "";
	
  // String representing the existing CloudFront object to invalidate
  // See also http://www.subchild.com/2010/09/17/amazon-cloudfront-php-invalidator/
  	$key = array(
  	 "/sites/all/themes/blueprint/css/style.css",
  	 );
	
	$cf  = new CloudFront($keyId, $secretKey, $distributionId);
?>
<html>
<head>
<style> textarea {width:100%; height:600px; font:12px/16px consolas;} </style>
</head>
<body>
	Key: <?=$key?><br/>
	<hr/>
	CF call:<br/>
	<?/* 
	 	Passing "true" to enable debugging for the purpose of this example. 
		This will render the XML response.
	*/?>
	<textarea><?=$cf->invalidate($key, true)?></textarea>
</body>
</html>