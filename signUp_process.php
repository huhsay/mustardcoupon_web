<?php
 $conn = mysqli_connect("localhost:3307", "root", 'Iamthejust1');  // 데이터 베이스 연결
 mysqli_select_db($conn, "ourcoupon"); //
 $query  = "INSERT INTO member(id,pwd,name) values ('".$_POST['id']."', '".$_POST['pwd']."', '".$_POST['name']."')"; // form으로 받어온 값을 멤버 테이블에 저장
 mysqli_query($conn, $query); //쿼리 실행문

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
