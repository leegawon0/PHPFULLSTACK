CREATE TABLE TEST_MEMBER (
	mem_no INT(11) PRIMARY KEY AUTO_INCREMENT
	,mem_name VARCHAR(50)
);

INSERT INTO test_member (mem_name)
VALUES('이가원');
INSERT INTO test_member (mem_name)
VALUES('이태경');

SELECT *
FROM test_member;

DELETE FROM test_member
WHERE mem_no = 2;

INSERT INTO test_member (mem_name)
VALUES('이태경');

SELECT *
FROM test_member;

-- 한번 숫자가 올라가면 삭제하고 다시 입력해도 같은 번호로 입력되는게 아니라 다음 순서의 번호가 입력됨
-- ex) 1번 레코드 입력, 2번 레코드 입력 후 2번 레코드를 삭제한 뒤 같은 내용을 다시 입력하면 3번 레코드로 입력됨
-- 단, TRNCATE로 데이터를 싹 다 지우고 다시 레코드를 입력하면 AUTO_INCREMENT가 초기화됨

DROP TABLE test_member;

CREATE TABLE TEST_MEMBER (
	mem_no INT(11) PRIMARY KEY
	,mem_name VARCHAR(50)
);

ALTER TABLE test_member
MODIFY mem_no INT(11) AUTO_INCREMENT;

INSERT INTO test_member (mem_name)
VALUES('이가원');
INSERT INTO test_member (mem_name)
VALUES('이태경');

ALTER TABLE test_member AUTO_INCREMENT=10;

INSERT INTO test_member (mem_name)
VALUES('유현주');