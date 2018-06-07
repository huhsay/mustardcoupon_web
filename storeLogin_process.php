<?php
 $user_id = $_POST["id"];
 $pwd = $_POST["pw"];

 $conn = mysqli_connect("localhost:3307", "root", 'Iamthejust1');
 mysqli_select_db($conn, "ourcoupon");
 $query  = "select * from storemb where id='$user_id'";
 $result = mysqli_query($conn, $query);
 $data =  mysqli_fetch_assoc($result);


 if($data['id']!= $user_id){
  echo "
  <script>
   window.alert('아이디가 없습니다.');
   history.back(1);
  </script>
  ";
  exit;
 }

 if($data['pwd']!= $pwd){
  echo "
  <script>
   window.alert('비밀번호가 틀렸습니다.');
   history.back(1);
  </script>
  ";
  exit;
 }


   setcookie("ourcoupon",$user_id,time()+60*60*24,'/');
   echo "
  <script>
   window.alert('로그인에성공하였습니다.');

  </script>
  ";
  mysqli_close($conn);
?>

<script>
 location.href='http://168.131.35.106/main_store/main.php';
</script>
