
<?php
$mSeq = $_POST["mSeq"];
$sbSeq = $_POST["smSeq"];

$conn = mysqli_connect("localhost:3307", "root", 'Iamthejust1');
mysqli_select_db($conn, "ourcoupon");
$query  = "delete from coupon where (mSeq='$mSeq' and smSeq='$sbSeq')";
$result = mysqli_query($conn, $query);
  ?>

  <script>
   location.href='http://168.131.35.106/main_user/myCoupon.php';
  </script>
