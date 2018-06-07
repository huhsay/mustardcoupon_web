<?php
 $conn = mysqli_connect("localhost:3307", "root", 'Iamthejust1');
 mysqli_select_db($conn, "ourcoupon");
 $query  = "select * from storemb";
 $result = mysqli_query($conn, $query);

 $mid= $_COOKIE["ourcoupon"];
  $getmSeqq  = "select * from member where id='$mid'";
   $getmSeqr = mysqli_query($conn, $getmSeqq);
    $getmSeqd = mysqli_fetch_assoc($getmSeqr);

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
    <table>
    			<caption class="readHide">등록된 스토어 목록</caption>
    			<thead>
    				<tr>
    					<th scope="col" class="no">번호</th>
    					<th scope="col" class="title">storename</th>
    					<th scope="col" class="button">button</th>
    				</tr>
    			</thead>
    			<tbody>
    					<?php
                $int=1;
    						while( $data = mysqli_fetch_assoc($result)) :
    			    					?>
    				<tr>
    					<td class="no"><?php echo $int++?></td>
    					<td class="title"><?php echo $data['name']?></td>
    					<td class="button">
                <form class="makecoupon" action="http://168.131.35.106/main_user/signupstore_process.php" method="post">
                <input type="hidden" name="userSeq" value="<?php echo $getmSeqd['memberSeq']?>"/>
                <input type="hidden" name="storeSeq" value="<?php echo $data['memberSeq']?>"/>
                <input type="submit" value="쿠폰발행"/>
                 </form>
              </td>

    				</tr>
          <?php endwhile ?>

    			</tbody>
    		</table>
	</div>

	<div id="menu">
		<a href="http://168.131.35.106/logout.php">logout</a>
	</div>

</body>
</html>
