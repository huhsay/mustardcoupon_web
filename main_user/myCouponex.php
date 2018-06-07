<?php

 $conn = mysqli_connect("localhost:3307", "root", 'Iamthejust1');
 mysqli_select_db($conn, "ourcoupon");
 $id = $_COOKIE["ourcoupon"];
 $query  = "select * from member where id='$id'";
 $result = mysqli_query($conn, $query);
 $data = mysqli_fetch_assoc($result);
 $memberSeq = $data['memberSeq'];


 $query  = "select * from coupon where mSeq='$memberSeq'";
 $result = mysqli_query($conn, $query);
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
    					<th scope="col" class="count">stamp</th>
              <th scope="col" class="coupon">coupons</th>
    				</tr>
    			</thead>
    			<tbody>
    					<?php
                $int=1;
    						while( $data =  mysqli_fetch_assoc($result)) :
                        ?>
    				<tr>
    					<td class="no"><?php echo $int++?></td>
    					<td class="title"><?php
              $storemb = $data['smSeq'];
              $sq  = "select * from storemb where memberSeq=$storemb";
              $sr = mysqli_query($conn, $sq);
               $sd = mysqli_fetch_assoc($sr);

              echo "$sd[name]"?></td>
    					<td class="button"><?php echo $data['count']?></td>
              <td class="button"><?php echo ($data['count']-($data['count']%10))/10?></td>
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
