<!DOCTYPE html>
<html>
<head>
	<title>Doctor Patient</title>
	<link rel="stylesheet"  href="doctorpatient.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="id=edge">


    <style>
    html,body{
	margin-top: 0;
	padding: 0;
}
body{
	height: 100vh;
	background: #151519;

}

.buttonA{
	position: absolute;
	top: 65%;
	left: 50%;
	transform: translate(-50%,-50%);
	
}
.buttonA{
	background: none;
	color: #ccc;
	width: 240px;
	height: 80px;
	border:3px solid #992828;
	font-size: 25px;
	border-radius: 4px;
	transition: .6s;
	overflow: hidden;

}
.buttonA:focus{
	outline: none;
}

.buttonA:before{
    content: '';
    display: block;
    position: absolute;
    background: #992828;
    width: 60px;
    height: 100%;
    left: 0;
    top: 0;
    opacity: .5;
    filter: blur(30px);
    transform: translateX(-130px) skewX(-15deg);
}

.buttonA:after{
    content: '';
    display: block;
    position: absolute;
    background: #992828;
    width: 30px;
    height: 100%;
    left: 30px;
    top: 0;
    opacity: 0;
    filter: blur(30px);
    transform: translateX(-100px) scaleX(-15deg);
}

.buttonA:hover:before {
   transform: translateX(300px) skewX(-15deg);
    opacity: .6;
    transition: .7s;
}

.buttonA:hover:after {
   transform: translateX(300px) skewX(-15deg);
    opacity: 1;
    transition: .7s;
}

.buttonA:hover {
  background: #992828;
  cursor: pointer;
}


.buttonP{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.buttonP{
	background: none;
	color: #ccc;
	width: 240px;
	height: 80px;
	border:3px solid #39ca74;
	font-size: 25px;
	border-radius: 4px;
	transition: .6s;
	overflow: hidden;

}
.buttonP:focus{
	outline: none;
}

.buttonP:before{
    content: '';
    display: block;
    position: absolute;
    background: #39ca74;
    width: 60px;
    height: 100%;
    left: 0;
    top: 0;
    opacity: .5;
    filter: blur(30px);
    transform: translateX(-130px) skewX(-15deg);
}

.buttonP:after{
    content: '';
    display: block;
    position: absolute;
    background: #39ca74;
    width: 30px;
    height: 100%;
    left: 30px;
    top: 0;
    opacity: 0;
    filter: blur(30px);
    transform: translateX(-100px) scaleX(-15deg);
}

.buttonP:hover:before {
   transform: translateX(300px) skewX(-15deg);
    opacity: .6;
    transition: .7s;
}

.buttonP:hover:after {
   transform: translateX(300px) skewX(-15deg);
    opacity: 1;
    transition: .7s;
}

.buttonP:hover {
  background: #39ca74;
  cursor: pointer;
}

.buttonD{
	position: absolute;
	top: 35%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.buttonD{
	background: none;
	color: #ccc;
	width: 240px;
	height: 80px;
	border:3px solid #423289;
	font-size: 25px;
	border-radius: 4px;
	transition: .6s;
	overflow: hidden;

}
.buttonD:focus{
	outline: none;
}

.buttonD:before{
    content: '';
    display: block;
    position: absolute;
    background: #423289;
    width: 60px;
    height: 100%;
    left: 0;
    top: 0;
    opacity: .5;
    filter: blur(30px);
    transform: translateX(-130px) skewX(-15deg);
}

.buttonD:after{
    content: '';
    display: block;
    position: absolute;
    background: #423289;
    width: 30px;
    height: 100%;
    left: 30px;
    top: 0;
    opacity: 0;
    filter: blur(30px);
    transform: translateX(-100px) scaleX(-15deg);
}

.buttonD:hover:before {
   transform: translateX(300px) skewX(-15deg);
    opacity: .6;
    transition: .7s;
}

.buttonD:hover:after {
   transform: translateX(300px) skewX(-15deg);
    opacity: 1;
    transition: .7s;
}

.buttonD:hover {
  background: #423289;
  cursor: pointer;
}


    </style>


</head>

<body>
	<div class="wrapper">
		<div class="btn" > <a href="admin_login.php">

<button type="button" class="buttonA" > Admin</button>

</div>

</div>


	<div class="wrapper" style="text-decoration: none;">
	<div class="btn" > <a href="patient_login.php"  >
<button type="button" class="buttonP">Patient</button>
</div>

</div>


	<div class="wrapper" style="text-decoration: none;">
	<div class="btn" > <a href="doctor_login.php"  >
<button type="button" class="buttonD">Doctor</button>
        </a>
        
</div>

<div>
      <li class="back-to-home">
        <a class="nav-link" href="index.php">Back to HOME</a>
      </li>
</div>

</div>


</body>
</html>