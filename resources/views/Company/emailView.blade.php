<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="IMAGE/EXAMPLE = edge">
	</head>

	<body>

		<div id="mailContainer" style="margin: 0 auto; width: 600px; overflow: hidden; color: #666;">
			<h2>JobleadChina</h2>
			<div class="mailContentContainer" style="
  background-color: #fff;
  border-top: 20px solid #694c9c;
  padding: 20px;">
				<div class="mailContent-enterprise">
					<h4>Welcome to join JobleadChina</h4>
					</br>
					Please click on the following link to verify your company email in 24 hours:
					</br>
					<a class="mailContent-enterpriseVerify" style="  text-align: center;
  color: blue;" href="{{ $validateLink }}">Confirm Your Company Account</a>
					</br></br>
					Or copy and paste the following into your browser:
					</br>
					<a class="backup-enterpriseVerify" href="{{ $validateLink }}">{{ $validateLink }}</a>
					</br>
					<hr/>
				</div>
				<div class="mail-furtherhelp">
					<h4>If you need further assistance, please contact us.</h4>
					<a href="mailto:service@jobleadchina.com?subject=The%20subject%20of%20the%20mail">Email:&nbsp;service@jobleadchina.com</a>
				</div>
			</div>
		</div>
	</body>


</html>