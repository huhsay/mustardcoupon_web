<?php
$mSeq = $_POST["mSeq"];
$smSeq = $_POST["smSeq"];

$conn = mysqli_connect("localhost:3307", "root", 'Iamthejust1');
mysqli_select_db($conn, "ourcoupon");
$delete_query = "delete from coupon where mSeq='$mSeq' and smSeq='$smSeq'";
mysqli_query($conn, $delete_query);

echo "
<script>
window.alert('회원정보를 삭제하였습니다.');
</script>
";

  ?>


  <script>
location.href='http://168.131.35.106/main_store/searchMember.php';
  </script>
