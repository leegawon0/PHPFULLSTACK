SELECT CAST( '1234' AS INT );

SELECT CAST( 1234 AS CHAR(4));

SELECT CONVERT( 1234, CHAR(4) );

SELECT if( 1 > 2 , '참' , '거짓' );

SELECT emp_no, if( emp_no = 10001, first_name, birth_date )
FROM employees;

SELECT
    emp_no
    ,gender
    ,case gender
        when 'M' then '남자'
        when 'F' then '여자'
        ELSE ' '
    end
FROM employees LIMIT 10;

SELECT
    emp_no
    ,gender
    ,case gender
        when 'M' then '남자'
        ELSE '여자'
    end
FROM employees LIMIT 10;

SELECT CONCAT('안녕하세요.',' ','좋은아침입니다.');

SELECT CONCAT(last_name,' ',first_name)
FROM employees
WHERE emp_no = 500000;

SELECT CONCAT_WS(' / ', 'a', 'b', 'c');

SELECT FORMAT(123456, 2);

SELECT LEFT('abcdefg', 3);
SELECT RIGHT('abcdefg', 3);

SELECT UPPER('abc');
SELECT LOWER('ABC');

SELECT LPAD('abc',5,'@');
SELECT LPAD('1',6,'0');
SELECT RPAD('956',6,'0');

SELECT TRIM('  abc  ');
SELECT LTRIM('  abc  ');
SELECT RTRIM('  abc  ');

SELECT TRIM(LEADING 'abc' FROM 'abcdefg');
SELECT TRIM(TRAILING 'efg' FROM 'abcdefg');

SELECT SUBSTRING('abcdef',2,4);
SELECT SUBSTRING_INDEX('ab.cd.ef.gh','.',2);
SELECT SUBSTRING_INDEX('ab.cd.ef.gh','.',4);

SELECT CEILING(1.1);
SELECT FLOOR(1.9);
SELECT ROUND(1.5);

SELECT TRUNCATE(0.12345,2);

SELECT NOW();
SELECT DATE(19980712);

SELECT ADDDATE(NOW(), INTERVAL 1 DAY);
SELECT ADDDATE(NOW(), INTERVAL 1 MONTH);
SELECT SUBDATE(NOW(), INTERVAL 1 DAY);

SELECT ADDTIME(NOW(), '1:1:1');
SELECT ADDTIME(NOW(), '-1:1:1');

SELECT emp_no, RANK() over(ORDER BY salary ASC), salary
FROM salaries;

SELECT emp_no, ROW_NUMBER() over(ORDER BY salary ASC), salary
FROM salaries;