CREATE TABLE test_txt(
	txt_no INT PRIMARY KEY AUTO_INCREMENT
	,f_txt VARCHAR(4000)
	,FULLTEXT idx_full_test_txt_f_txt(f_txt)
);

INSERT INTO test_txt(f_txt) VALUES('동해물과 백두산이 마르고 닳도록 하느님이 보우하사 우리나라 만세');
INSERT INTO test_txt(f_txt) VALUES('남산 위에 저 소나무 철갑을 두른 듯 바람서리 불변함은 우리 기상일세');
INSERT INTO test_txt(f_txt) VALUES('가을 하늘 공활한데 높고 구름 없이 밝은 달은 우리 가슴 일편단심일세');
INSERT INTO test_txt(f_txt) VALUES('이 기상과 이 맘으로 충성을 다하여 괴로우나 즐거우나 나라 사랑하세');
INSERT INTO test_txt(f_

SELECT * FROM test_txt
WHERE MATCH(f_txt) AGAINST('');

-- 세글자부터 검색되는듯?