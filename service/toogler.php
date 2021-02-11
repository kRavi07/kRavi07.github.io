<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*
{
    -webkit-tap-highlight-color: transparent;
}

html, body
{
    height: 100%;
}

body
{
    margin: 0;
    background-color: #f3fbff;
}

p
{
     position: fixed;
     top: 0;
     right: 0;
     left: 0;
     padding: 10px;
     color: #143240;
     text-align: center;
     font-size: 14px;
     font-family: Helvetica, serif;
}

#switch1
{
    display: none;
}

label
{
    position: absolute;
    top: 50%;
    right: 0;
    left: 0;
    display: block;
    width: 140px;
    height: 70px;
    margin: 0 auto;
    transform: translateY(-50%);
    cursor: pointer;
}

label:before
{
    top: 8px;
    left: 8px;
    width: 72px;
    height: 54px;
    border: 3px solid red;
}

label:after
{
    top: 0;
    right: 0;
    width: 140px;
    height: 70px;
    border: 3px solid #143240;
}

label:before, label:after
{
    content: "";
    position: absolute;
    border-radius: 50px;
    box-sizing: border-box;
    transition: 0.5s ease top, 0.5s ease left, 0.5s ease right, 0.5s ease width, 0.5s ease height, 0.5s ease border-color;
}

#switch1:checked + label:before
{
    top: 0;
    left: 0;
    width: 140px;
    height: 70px;
    border-color: #143240;
}

#switch1:checked + label:after
{
    top: 8px;
    right: 8px;
    width: 54px;
    height: 54px;
    border-color: red;
}
	</style>
</head>
<body>
<div class="container">
	<div class="row ">
		<div class="col-4 ">
			<h5 class="ml-5 ">New ?Create Account  <i class="bi-arrow-right" style="font-size:2rem;color: green; "></i></h5>

		</div>
<div class="col-4 	.d-none .d-lg-block .d-xl-none">
<span> <b>Register</b></span>
<input type="checkbox" id="switch1">
<label for="switch1"></label>
<span><b>Login</b></span>
</div>
<div class="col-4">
	<h5 class="mr-5">    <i class="bi-arrow-left" style="font-size:2rem;color: green; "></i>   Login   </h5>
</div>
</div>
</div>

</body>
</html>