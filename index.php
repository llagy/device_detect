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
