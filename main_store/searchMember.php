<?php

 $conn = mysqli_connect("localhost:3307", "root", 'Iamthejust1');
 mysqli_select_db($conn, "ourcoupon");
 $id = $_COOKIE["ourcoupon"]; //쿠키값을 통해 아이디 구하기
 $query  = "select * from storemb where id='$id'";
 $result = mysqli_query($conn, $query);
 $data = mysqli_fetch_assoc($result);
 $smSeq = $data['memberSeq']; // store의 프라이머리키 찾기

 $query2 = "select * from coupon where smSeq='$smSeq'"; // 쿠폰테이블에서 스토어에 등록된 회원찾기
 $result = mysqli_query($conn, $query2);

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
    <table>
    			<caption class="readHide">등록된 스토어 목록</caption>
    			<thead>
    				<tr>
    					<th scope="col" class="no">번호</th>
    					<th scope="col" class="title">member</th>
              <th scope="col" class="title">도장찍기</th>
    					<th scope="col" class="button">쿠폰사용하기</th>
              <th scope="col" class="button">회원정보삭제</th>
    				</tr>
    			</thead>
    			<tbody>
    					<?php
                $int=1;
    						while( $data = mysqli_fetch_assoc($result)) : // 퀴리 결과값이 있으면 while문 반복
                      			    					?>
    				<tr>
    					<td class="no"><?php echo $int++?></td>
    					<td class="title"><?php
               $mSeq = $data['mSeq']; // 쿠폰테이블에서 회원 외래키 찾기
               $mquery  = "select * from member where memberSeq='$mSeq'"; //회원 테이블에서 등록된 회원찾기
                $mresult = mysqli_query($conn, $mquery);
                 $data2 = mysqli_fetch_assoc($mresult);
                 $mSeq2 = $data2['name']; // 회원 이름 구하기
                 echo "$mSeq2";?></td>
    					<td class="stamp_button">
                <form class="makecoupon" action="http://168.131.35.106/main_store/searchMember_process_countup.php" method="post">
                <input type="hidden" name="mSeq" value="<?php echo $mSeq?>"/>
                <input type="hidden" name="smSeq" value="<?php echo $smSeq?>"/>
                <input type="submit" value="도장찍기"/>
                 </form>
              </td>
              <td class="use_button">
                <form class="makecoupon" action="http://168.131.35.106/main_store/searchMember_process_use.php" method="post">
                  <input type="hidden" name="mSeq" value="<?php echo $mSeq?>"/>
                  <input type="hidden" name="smSeq" value="<?php echo $smSeq?>"/>
                <input type="submit" value="쿠폰사용"/>
                 </form>
              </td>
              <td class="del_button">
                <form class="makecoupon" action="http://168.131.35.106/main_store/searchMember_process_delete.php" method="post">
                  <input type="hidden" name="mSeq" value="<?php echo $mSeq?>"/>
                  <input type="hidden" name="smSeq" value="<?php echo $smSeq?>"/>
                <input type="submit" value="회원삭제"/>
                 </form>
              </td>

    				</tr>
          <?php endwhile ?>

    			</tbody>
    		</table>
	</div>

	<div id="menu" style="text-align:right">
		<a href="http://168.131.35.106/logout.php">logout</a>
	</div>

</body>
</html>
