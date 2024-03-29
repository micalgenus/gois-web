<?php
session_start();
setcookie('info_list_page', 0, time() + (86400 * 30), "/main.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GOIS Test Page</title>
  <?php
		//logined
		if(isset($_SESSION['loged_id'])){
			echo '
			<meta http-equiv="refresh" content="0; url=https://gois.me/main.php" />';
		}
		?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/mycss.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style>
		/* On small screens, set height to 'auto' for sidenav and grid */
		@media screen and (min-width: 1024px) {
			.container-fluid {
				margin-left:20%;
				margin-right:20%;
			}
		}

		.account .form-control{
			margin-top:5px;
			margin-bottom:5px;
		}
	</style>
</head>
<body>

<?php include 'header.php'; ?>
  
<div class="container">

	<div class="row">
		<div class="account">
			<h1><strong>가입하기</strong></h1>
			<h4>항상 지금처럼 무료로 즐기실 수 있습니다.</h4>
			<div class="pull-left">
				<form class="form-horizontal">
						<input type="text" class="form-control input-lg" id="account_id" placeholder="아이디">
						<input type="password" class="form-control input-lg" id="account_pw" placeholder="비밀번호">
						<input type="text" class="form-control input-lg" id="account_nickname" placeholder="별명">
						<input type="text" class="form-control input-lg" id="account_name" placeholder="이름">
						<br>생일<br>
						<input type="date" class="form-control input-lg" id="account_birth" placeholder="생일">

						<div id="account_sex">
							<label class="radio-inline input-lg">
							<input type="radio" name="account_sex" value="M" checked>남성
							</label>
							<label class="radio-inline input-lg">
								<input type="radio" name="account_sex" value="F">여성
							</label>
						</div>
						<br>
						<input type="text" class="form-control input-lg" id="account_key" placeholder="인증 키(없을 시 공백)">
						<br>
						<input type="button" class="btn btn-success btn-lg" id="loadAccount" value="가입하기">
				</form>
				
				
			</div>
		</div>

		<div class ="pull-right">
			<h4><strong>GOIS에서 전세계에 있는 친구, 가족, 지인들과 함께 건강해지세요!</strong></h4>
			<img src="image/main_banner.jpg" width="500px" height="350px"/>
		</div>
	</div>

	<!--
	<div class="row">
		<p id="demo">test...</p>
		<form method="post" action="./GodHose/bridge.php">
			<input type="text" name="select_id" value="dkdlrja">
			<input type="submit">
		</form>
	</div>
	-->
</div>

<script>

$("#loadAccount").click(function(){	
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

			var result = this.responseText;

			if(result == 100){
				alert("성공적으로 계정을 생성했습니다");
				document.location.href='index.php';
			}
			else if(result == 300){
				alert("이미 존재하는 아이디입니다");
			}
			else if(result == 301 || result == 310){
				alert("등록할 수 없는 아이디 형식입니다");
			}
			else if(result == 400 || result == 401){
				alert("등록할 수 없는 비밀번호 형식입니다");
			}
			else if(result == 500){
				alert("이미 존재하는 별명입니다");
			}
			else if(result == 501 || result == 510){
				alert("등록할 수 없는 별명 형식입니다");
			}
			else if(result == 501 || result == 510){
				alert("등록할 수 없는 별명 형식입니다");
			}
			else if(result == 601 || result == 701 || result == 801){
				alert("기존 인바디 정보와 일치하지 않는 개인 정보입니다");
			}
			else if(result == 700 || result == 710){
				alert("등록할 수 없는 생일 형식 입니다");
			}
    }
  };
  xhttp.open("POST", "./GodHose/bridge.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	var str="";
	
	var len = $("#account_key").val().length;
	if(len > 0)str+="account_key="+$("#account_key").val()+"&";

	str+="account_id="+$("#account_id").val()+"&";
	str+="account_pw="+$("#account_pw").val()+"&";
	str+="account_nickname="+$("#account_nickname").val()+"&";
	str+="account_name="+$("#account_name").val()+"&";
	str+="account_birth="+$("#account_birth").val()+"&";
	str+="account_sex="+$("#account_sex input:checked").val();

  xhttp.send(str);
	
});

$("#loadLogin").click(function(){
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

			var result = this.responseText;

			if(result == 100){
				alert("로그인 성공!");
				document.location.href='main.php';
			}
			else{
				alert("로그인 실패!");
			}
			//
    }
  };
  xhttp.open("POST", "./GodHose/bridge.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	var str="";
	str+="login_id="+$("#login_id").val()+"&";
	str+="login_pw="+$("#login_pw").val();

  xhttp.send(str);
});

$("#loadLogout").click(function(){
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

			var result = this.responseText;
			if(result == 100){
				alert("로그아웃!");
				document.location.href='index.php';
			}
    }
  };
  xhttp.open("POST", "./GodHose/bridge.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhttp.send("logout=true");
});

$("#insertInbody").click(function(){
	document.location.href='insertinbody.php';
});
</script>

</body>
</html>

