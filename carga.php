<!DOCTYPE html>
<html>
<head>
	<title>Carga</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="loader"></div>






<style>

body{
    height: 100%;
    width: 100%;
    min-height: 100vh;
    background: linear-gradient(245.59deg, #4f8bfa 0%, #4f4cff 28.53%, #0717a886 75.52%);

    
    
    }

.loader {
	border: 16px solid #f3f3f3;
	border-top: 16px solid #3498db;
	border-radius: 50%;
	width: 120px;
	height: 120px;
	animation: spin 5s linear infinite;
	position: absolute;
	left: 44%;
	top: 30%;
	transform: translate(-50%, -50%);
}

@keyframes spin {
	0% { transform: rotate(0deg); }
	100% { transform: rotate(360deg); }
}

</style>





<script>
    setTimeout(function(){
	window.location.href = "iniicio.html";
}, 5000);
</script>




</body>
</html>