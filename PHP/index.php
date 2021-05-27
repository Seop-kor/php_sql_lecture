<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data</title>
</head>
<body>
  <form action="./insert_data.php" method="post">
    아이디 : <input type="text" name="id" placeholder="아이디">
    비밀번호 : <input type="password" name="password" placeholder="비밀번호">
    이름 : <input type="text" name="name" placeholder="이름">
    핸드폰 번호 : <input type="text" name="phone" placeholder="폰번호">
    국적 : <input type="text" name="nationality" placeholder="국적">
    <button type="submit">제출</button>
  </form>
</body>
</html>