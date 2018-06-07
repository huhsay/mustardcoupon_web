
<?php
$mSeq = $_POST["mSeq"];
$smSeq = $_POST["smSeq"];

$conn = mysqli_connect("localhost:3307", "root", 'Iamthejust1');
mysqli_select_db($conn, "ourcoupon");
//$select_query = "select count from coupon where mSeq=$mSeq and smSeq=$smSeq"
//$count_result = mysqli_query($conn, $select_query);
$update_query  = "update coupon set count=(count+1) where mSeq=$mSeq and smSeq=$smSeq";
mysqli_query($conn, $update_query);
  ?>

  <script>
 location.href='http://168.131.35.106/main_store/searchMember.php';
  </script>
