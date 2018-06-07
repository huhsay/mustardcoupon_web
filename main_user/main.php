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
			<li><a href="http://168.131.35.106/main_user/myCoupon.php">My Coupon</a></li>
      <li><a href="http://168.131.35.106/main_user/searchStore.php">Search Store</a></li>
      <li><a href="http://168.131.35.106/main_user/myInfo.php">My Info</a></li>
		</ol>
	</div>

	<div id="contents">

<?php
if(empty($_GET['id'])==false) {
	echo file_get_contents($_GET['id'].".txt");
}
  ?>
	</div>

	<div id="menu">
		<a href="http://168.131.35.106/logout.php">logout</a>
	</div>

</body>
</html>
