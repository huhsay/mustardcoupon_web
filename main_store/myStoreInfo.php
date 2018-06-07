<?php
if(empty($_COOKIE["ourcoupon"])){
  echo "사용자 인증이 필요합니다.";
exit;
}
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
		<title>우리들의쿠폰</title>
		<link rel="stylesheet" type="text/css" href="http://168.131.35.106/style.css">
</head>
<body>

	<div id="wrap">
		<h1><a href="http://168.131.35.106/">Our Coupon</h1>
	</div>

	<div id="side">
		<ol>
      <li><a href="http://168.131.35.106/main_store/searchMember.php">Search Member</a></li>
      <li><a href="http://168.131.35.106/main_store/myStoreInfo.php">My Info</a></li>
		</ol>
	</div>

	<div id="contents">
내정보
	</div>

	<div id="menu" style="text-align:right" >
		<a href="http://168.131.35.106/logout.php">logout</a>
	</div>

</body>
</html>
