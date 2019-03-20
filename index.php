<html lang="en">
   
    
<head>
	<!--script src="https://cdnjs.cloudflare.com/ajax/libs/ClientJS/0.1.11/client.min.js"></script>-->
	<!--script  src="client.min.js"></script>-->
		
</head>


    
<body>
<?php
require_once('Mobile_Detect.php');

$mobile = new Mobile_Detect();

if($mobile->isAndroidOS()){
	$DEVICE = 'android';
	
}
else if($mobile->isiOS()){
	$DEVICE = 'iphone';
}
else{
	$DEVICE = 'Dispositivo desconocido';
}
//$DEVICE = 'iphone';
//echo  $DEVICE;
if($DEVICE=='android')
    
    echo '<H1>El disposito es '.$DEVICE.'</H1><br/><img src=android.jpg alt=android>';
else if($DEVICE=='android')
    echo '<H1>El disposito es '.$DEVICE.'</H1><br/><img src=iphone.jpg alt=android>';
else


$ch = curl_init();
//curl_setopt($ch, CURLOPT_URL, "https://api.github.com/users/KrunalLathiya");
curl_setopt($ch, CURLOPT_URL, "http://35.226.148.54/grupo-paas");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('device: '.$DEVICE.''));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($ch);
//echo $res;
curl_close($ch);


?>
<script>

/* function descDevice(){

	var client = new ClientJS(); // Create A New Client Object

	var isMobileAndroid = client.isMobileAndroid(); // Check For Mobile Android
	var isIphone = client.isIphone(); // Check For iPhone
	var divice="";
	
	if (isMobileAndroid){
	divice=  "Es Android";
	console.log("Es un dispositivo Android" );

    }else if (isIphone){
		
	divice=  "Es Iphone";
	console.log("Es un dispositivo Iphone" );
	
	}else{
	   divice=  "Dispositivo desconocido";
	   console.log("Es un dispositivo desconocido" );
	}
	document.write("<br>"+divice);
	console.log("fin de logica" );
	return divice;
 }	*/
	//------------------------------------------------


  //url='http://35.226.148.54/grupo-paas';
  
//------------------------------------------------
/* fetch('http://35.226.148.54/grupo-paas', {
  headers: new Headers({
    'device': 'iphone',
	
  })
})
.then(response => response.json())
.then(data => {
  console.log(data)
})
.catch(error => console.error(error))*/




	//----------------------------
	
	
//}
 </script>
 
 
</body> 
</html>
