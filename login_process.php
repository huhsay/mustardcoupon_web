<?php
 $user_id = $_POST["user_id"]; // form으로 id를 받아옴
 $pwd = $_POST["pwd"]; // form으로 패스워드를 받아옴

 $conn = mysqli_connect("localhost:3307", "root", 'Iamthejust1'); // 데이터 베이스에 연결
 mysqli_select_db($conn, "ourcoupon"); // 테이블 선택
 $query  = "select * from member where id='$user_id'";  // id를 찾는 쿼리문
 $result = mysqli_query($conn, $query); // 쿼리를 날린 값을 변수에 저장
 $data =  mysqli_fetch_assoc($result); // 값을 한줄씩 데이터 변수에 저장


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


   setcookie("ourcoupon",$user_id,time()+60*60*24,'/'); // 로그인에 성공하면 쿠키생성
   echo "
  <script>
   window.alert('로그인에성공하였습니다.');

  </script>
  ";
  mysqli_close($conn);
?>

<script>
 location.href='http://168.131.35.106/main_user/main.php';
</script>
