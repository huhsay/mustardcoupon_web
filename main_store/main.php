<?php
$a = $_COOKIE["ourcoupon"]; // 쿠키값 저장
if($a == null){ //쿠키 값이 없으면 화면이 뜨지 않음
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

	<div id="contents" text-align="center">
여기는 가게 입니다.
	</div>

</body>
</html>
