<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
 	
<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
	num1<input type="text" id="num1"><br>
	 	num2<input type="text" id="num2"><br>
	 	operator<select id="operator">
	 		<option value ="+">+</option>
	 		<option value="-">-</option>
	 		<option value="*">*</option>
	 		<option value="/">/</option>
	 	</select><br>
	 	<button id="hello">Calculate</button>
	 	<label id="result">result</label>
	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	<input type="submit" name="click" value="click">
</div>
	 <script type="text/javascript">
	 	$(document).ready(function() {
	 		$('body').on('click', 'button', function(event) {
	 			event.preventDefault();
	 			var get = {num:$('#num1').val(), numa:$('#num2').val(), 
	 							operator:$('#operator').val()};
	 			var set = get.num+get.operator+get.numa+'=4';
	 				set+= operate(get.num,get.numa,get.operator);
	 			$('#result').text(set);
	 		}); 	
	 		function operate(a,b,o) {
	 			if(o==='+')
	 				return Number(a)+Number(b);
	 			if(o==='-')
	 				return Number(a)-Number(b);
	 			if(o==='/')
	 				return Number(a)/Number(b);
	 			if(o==='*')
	 				return Number(a)*Number(b);
	 		}
	 		$('#container').on('click', '#body', function(event) {
	 			event.preventDefault();
	 			alert('hey');
	 		});
	 	});
	 </script>
	 <!-- num1<input type="text" id="num1"><br>
	 	num2<input type="text" id="num2"><br>
	 	operator<select id="operator">
	 		<option value ="+">+</option>
	 		<option value="-">-</option>
	 		<option value="*">*</option>
	 		<option value="/">/</option>
	 	</select><br>
	 	<button onclick="cal()">Calculate</button>
	 	<label id="result">result</label> -->
	 	
	 <!-- <script type="text/javascript">
	 	jQuery(document).ready(function($) {
	 		$('document').on('click', '#container', function(event) {
	 			event.preventDefault();
	 			alert('hey you');
	 		});;
	 	});
	 		
	
	 	// var math = {
	 	// 	a: 0,
	 	// 	b: 0,
	 	// 	calculate: function(a, b, o) {
	 	// 		r	
	 	// 	}
	 	// }
	 	// var m = new math();

	 	// m.calculate(m.a, m.b, m.o)

	 	function math(a, b, o) {
	 		this.a = a;
	 		this.b = b;
	 		this.o = o;
	 		this.calculate = function () {
	 			if (this.o === '+') {
	 				return (a + b);
	 			}

	 			if (this.o === '-') {
	 				return (a - b);
	 			}

	 			if (this.o === '*') {
	 				return (a * b);
	 			}

	 			if (this.o === '/') {
	 				return (a / b);
	 			}
	 			
	 		}
	 	}
	 	function cal() {
	 		// var m = new math(1,2, '+');
	 		// alert(m.calculate());
	 		// return '';
	 			var person = {num:document.getElementById('num1').value, numa:document.getElementById('num2').value, 
	 							operator:document.getElementById('operator').value};
	 			alert(num);
	 			// var m = new math(person.num,person.numa,person.operator);
	 			// var num1=m.calculate();
	 			// alert(num1);
	 			// document.getElementById('result').innerHTML=num1;
	 	}	 	
	 </script> -->
</body>
</html>