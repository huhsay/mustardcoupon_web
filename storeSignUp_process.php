<?php
 $user_id = $_POST["id"];
 $pwd = $_POST["pwd"];
 $nb = $_POST["nb"];
 $name = $_POST["name"];


 $conn = mysqli_connect("localhost:3307", "root", 'Iamthejust1');
 mysqli_select_db($conn, "ourcoupon");
 $query  = "INSERT INTO storemb(id,pwd,nb,name) values ('".$_POST['id']."', '".$_POST['pwd']."', '".$_POST['nb']."','".$_POST['name']."')";
 mysqli_query($conn, $query);

 echo "
 <script>
  window.alert('회원가입이 완료되었습니다.');
 </script>
 ";

  mysqli_close($conn);
?>
<script>
 location.href='http://168.131.35.106/';
</script>
