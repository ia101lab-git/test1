<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>計算機</title>
	<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
</head>
<style>
	body{
		font-family: 微軟正黑體;
		font-size: 20px;
	}
	#counter{
		width: 200px;
		height: 240px;
		-webkit-border-radius: 15px;
		-moz-border-radius: 15px;
		border-radius: 15px;
		background-color: rgba(5, 138, 83, 0.24);
		position: relative;
		top:110px;
		left: 500px;
	}

	#counter_in{
		height: 49px;
		padding-left: 20px;
		padding-top: 25px;
		background-color: rgba(0, 0, 0, 0.35);
		border-top-left-radius: 15px;
		border-top-right-radius: 15px;
	}

	#counter_2{
		padding: 10px 0px 0px 25px;
	}

	button{
		width: 35px;
		height: 35px;
	}
</style>
<body>
		<div id="counter">
			<div id="counter_in">
				<textarea id="txt"></textarea><br>
			</div>
			<div id = "counter_2">
				<button id="n7">7</button>
				<button id="n8">8</button>
				<button id="n9">9</button>
				<button id="a4">/</button><br>
				<button id="n4">4</button>
				<button id="n5">5</button>
				<button id="n6">6</button>
				<button id="a3">*</button><br>
				<button id="n1">1</button>
				<button id="n2">2</button>
				<button id="n3">3</button>
				<button id="a2">-</button><br>
				<button id="n0" value="0">0</button>
				<button id="ac" value=".">AC</button>
				<button id="a5" value="=">=</button>
				<button id="a1" value="+">+</button>
			</div>
		</div>
			

	<script>
		var num1=0;
		var num2=0;
		var count="";

		//輸入數字
		$("#n1").click(function(){
			var line = $("#txt").val();
			$('#txt').val(line+"1");
		});
		$("#n2").click(function(){
			var line = $("#txt").val();
			$('#txt').val(line+"2");
		});
		$("#n3").click(function(){
			var line = $("#txt").val();
			$('#txt').val(line+"3");
		});
		$("#n4").click(function(){
			var line = $("#txt").val();
			$('#txt').val(line+"4");
		});
		$("#n5").click(function(){
			var line = $("#txt").val();
			$('#txt').val(line+"5");
		});
		$("#n6").click(function(){
			var line = $("#txt").val();
			$('#txt').val(line+"6");
		});
		$("#n7").click(function(){
			var line = $("#txt").val();
			$('#txt').val(line+"7");
		});
		$("#n8").click(function(){
			var line = $("#txt").val();
			$('#txt').val(line+"8");
		});
		$("#n9").click(function(){
			var line = $("#txt").val();
			$('#txt').val(line+"9");
		});
		$("#n0").click(function(){
			var line = $("#txt").val();
			$('#txt').val(line+"0");
		});

		$("#a1").click(function(){
			var line = $("#txt").val();
			if (line!="") {
				if (count=="") {
					$("#txt").val(line+"+");
					num1=line;
				}
				if (count="") {
					$("#txt").val(line.slice(0,-1)+"+");
					num1=line.slice(0,-1);
				}
				count="+";
			}
		});

		$("#a2").click(function(){
			var line = $("#txt").val();
			if (line!="") {
				if (count=="") {
					$("#txt").val(line+"-");
					num1=line;
				}
				if (count="") {
					$("#txt").val(line.slice(0,-1)+"-");
					num1=line.slice(0,-1);
				}
				count="-";
			}
		});

		$("#a3").click(function(){
			var line = $("#txt").val();
			if (line!="") {
				if (count=="") {
					$("#txt").val(line+"*");
					num1=line;
				}
				if (count="") {
					$("#txt").val(line.slice(0,-1)+"*");
					num1=line.slice(0,-1);
				}
				count="*";
			}
		});

		$("#a4").click(function(){
			var line = $("#txt").val();
			if (line!="") {
				if (count=="") {
					$("#txt").val(line+"/");
					num1=line;
				}
				if (count="") {
					$("#txt").val(line.slice(0,-1)+"/");
					num1=line.slice(0,-1);
				}
				count="/";
			}
		});

		$("#a5").click(function(){
			var line = $("#txt").val();
			var num = line.split(count);
			switch (count){
				case "+":
				var ans = parseInt(num[0])+parseInt(num[1]);
				break;
				case "-":
				var ans = parseInt(num[0])-parseInt(num[1]);
				break;
				case "*":
				var ans = parseInt(num[0])*parseInt(num[1]);
				break;
				case "/":
				var ans = parseInt(num[0])/parseInt(num[1]);
				break;
			}
			$("#txt").val(ans);
			count="";
		});

		$("#ac").click(function(){
			$("#txt").val("");
		});
	</script>
</body>
</html>