
<?php
$userSeq = $_POST["userSeq"];
$storeSeq = $_POST["storeSeq"];

$conn = mysqli_connect("localhost:3307", "root", 'Iamthejust1');
mysqli_select_db($conn, "ourcoupon");
$query  = "insert into coupon values ($userSeq, $storeSeq, '0')";
$result = mysqli_query($conn, $query);
  ?>

  <script>
   location.href='http://168.131.35.106/main_user/myCoupon.php';
  </script>
