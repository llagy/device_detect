<html lang="en">
   
    
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ClientJS/0.1.11/client.min.js"></script>
	<!--script  src="client.min.js"></script>-->
		
</head>


    
<body>


<script>

 //function descDevice(){

	var client = new ClientJS(); // Create A New Client Object

	var isMobileAndroid = client.isMobileAndroid(); // Check For Mobile Android
	var isIphone = client.isIphone(); // Check For iPhone
	var divice="";
	
	if (isMobileAndroid){
	divice=  "Android";
	document.write ('<H1>El disposito es '+divice+'</H1><br/><img src=android.jpg alt=android>');
	console.log("Es un dispositivo Android" );

    }else if (isIphone){
		
	divice=  "Iphone";
	document.write ('<H1>El disposito es '+divice+'</H1><br/><img src=iphone.jpg alt=iphone>');
	console.log("Es un dispositivo Iphone" );
	
	}else{
	   divice=  "Dispositivo desconocido";
	   console.log("Es un dispositivo desconocido" );
	}
	
	
	console.log("fin de logica" );
	//return divice;
	
 	
 
// divice='iphone';
	//------------------------------------------------

 
fetch('http://35.226.148.54/grupo-paas', { 
    method: 'GET',
    headers: new Headers({
    'device': divice,
	 
	
  })
})
.then( response => response.json())
.then(data => {
  console.log(data)
})
.catch(error => console.error(error))

 
 </script>
 
 
</body> 
</html>
