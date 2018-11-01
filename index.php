<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <link type="text/css" rel="stylesheet" href="css/style.css">

	    <title>Future Value Calculator</title>

	    <style>
				 #content{
			    width: 450px;
			    margin: 0 auto;
			    padding: 0px 20px 20px;	
			    background: white;
			    border: 2px solid navy;
			}

			h1{
			    color: navy;
			}

			label{
			    width: 10em;
			    padding-right: 1em;
			    float: left;
			}

			#data input{
			    float: left;
			    width: 15em;
			    margin-bottom: .5em;
			}

			#buttons input{
			    float: left;
			    margin-bottom: .5em;
			}
			br{
			    clear: left;
			}
			.error{
			    color: red;
			}
	    </style>
	</head>
	<body>
	    <div id="content">
	        <h1>Future Value Calculator</h1>
	        
	        <form action="display_result.php" method="POST">
	            <div id="data">
	                <label>Investment Amount:</label>
	                <input name="investment" value="0" type="text"><br>

	                <label>Yearly Interest Rate:</label>
	                <input name="rate" value="0" type="text"><br>

	                <label>Number of Years:</label>
	                <input name="years" value="0" type="text">
	            </div>
	            <div id="buttons">
	                <label>&nbsp;</label>
	                <input value="Calculate" type="submit"><br>
	            </div>
	        </form>
	    </div>

	</body>
</html>

<?php
	if($_SERVER["REQUEST_METHOD" == "POST"]){
		$invest = $_POST["investment"];
		$rate = $_POST["rate"];
		$year = $_POST["years"];
		$result = $invest + ($invest * $rate * 0.1);

		echo $result;
	}
?>