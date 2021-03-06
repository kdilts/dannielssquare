<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				$('.trigger').on('click', function() {
					$(this).toggleClass('clicked');
				});
			});
		</script>

		<style>
			body {
				padding: 50px;
			}

			.trigger {
				width: 200px;
				height: 200px;
				border: 20px solid #999;
				background: #ddd;
			}

			.box {
				display: inline-block;
				background: pink;
				width: 200px;
				height: 200px;
				-webkit-transition: -webkit-transform 300ms cubic-bezier(0, 0.47, 0.32, 1.97);
				transition: -webkit-transform 300ms cubic-bezier(0, 0.47, 0.32, 1.97);
				transition: transform 300ms cubic-bezier(0, 0.47, 0.32, 1.97);
				transition: transform 300ms cubic-bezier(0, 0.47, 0.32, 1.97), -webkit-transform 300ms cubic-bezier(0, 0.47, 0.32, 1.97);
				pointer-events: none;
			}

			.trigger.clicked .box {
				-webkit-transform: translate(200px, 150px) rotate(20deg);
				transform: translate(200px, 150px) rotate(20deg);
			}

		</style>
	</head>
	<body>
		<!-- example from: http://codepen.io/anon/pen/YGooNZ -->
		<div class="trigger">
			<div class="box"></div>
		</div>
	</body>
</html>
