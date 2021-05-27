-- 테이블 생성
CREATE TABLE MEMBERS (
  idx INT NOT NULL AUTO_INCREMENT COMMENT "고유번호",
  id VARCHAR(15) NOT NULL COMMENT "아이디",
  pass TEXT NOT NULL COMMENT "비밀번호",
  name VARCHAR(25) NOT NULL COMMENT "이름",
  phone varchar(13) not null comment "휴대폰 번호",
  primary key(idx)
)charset=utf8 comment="회원정보";

-- 테이블 삭제
DROP TABLE MEMBERS;

-- 속성 추가/변경
-- ALTER TABLE [테이블 이름] ADD [속성명] [속성 타입, 옵션들] AFTER [필드위치] BEFORE도 가능
-- alter table members change age national varchar(45);
alter table members add address int not null;

--데이터 입력
-- INSERT INTO [테이블 이름](속성명, 속성명, 속성명 ...) VALUES (값, 값, 값, ...);
insert into members (id, pass, name, phone, nationality) values ("dkdn1004", "#F12asdf54%@#$fdsan", "유인섭", "010-5403-0883", "KO");