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