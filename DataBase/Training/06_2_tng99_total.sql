-- 1. 사원 정보 테이블에 각자의 정보를 적절하게 넣어주세요.

INSERT INTO employees (
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES (
	500000
	,DATE(19980712)
	,'Gawon'
	,'Lee'
	,'F'
	,DATE(20230228)
);

-- 2. 월급, 직책, 소속부서 테이블에 각자의 정보를 적절하게 넣어주세요.

INSERT INTO salaries (
    emp_no
    ,salary
    ,from_date
    ,to_date
)
VALUES (
    500000
    ,77777
    ,DATE(20230228)
    ,DATE(20240228)
);

INSERT INTO titles (
    emp_no
    ,title
    ,from_date
    ,to_date
)
VALUES (
    500000
    ,'Junior Developer'
    ,DATE(20230228)
    ,DATE(20240228)
);

INSERT INTO dept_emp (
    emp_no
    ,dept_no
    ,from_date
    ,to_date
)
VALUES (
    500000
    ,'d005'
    ,DATE(20230228)
    ,DATE(20240228)
);

-- 3. 짝꿍의 [1,2] 내용도 넣어주세요.

INSERT INTO employees (
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES (
	500001
	,DATE(19970811)
	,'Yujin'
	,'Shin'
	,'F'
	,DATE(20230316)
);

INSERT INTO salaries (
    emp_no
    ,salary
    ,from_date
    ,to_date
)
VALUES (
    500001
    ,3000000
    ,DATE(20181130)
    ,DATE(99990101)
);

INSERT INTO titles (
    emp_no
    ,title
    ,from_date
    ,to_date
)
VALUES (
    500001
    ,'Assistant Engineer'
    ,DATE(20181130)
    ,DATE(99990101)
);

INSERT INTO dept_emp (
    emp_no
    ,dept_no
    ,from_date
    ,to_date
)
VALUES (
    500001
    ,'d001'
    ,DATE(20181130)
    ,DATE(99990101)
);

-- 4. 나와 짝꿍의 소속 부서를 d009로 변경해 주세요.

UPDATE dept_emp
SET to_date = NOW()
WHERE emp_no = 500000 OR emp_no = 500001;

INSERT INTO dept_emp (
    emp_no
    ,dept_no
    ,from_date
    ,to_date
)
VALUES (
    500000
    ,'d009'
    ,NOW()
    ,DATE(20240228)
);

INSERT INTO dept_emp (
    emp_no
    ,dept_no
    ,from_date
    ,to_date
)
VALUES (
    500001
    ,'d009'
    ,NOW()
    ,DATE(99990101)
);

-- 5. 짝꿍의 모든 정보를 삭제해 주세요.

DELETE FROM employees 
WHERE emp_no = 500001;

-- 6. 'd009' 부서의 관리자를 나로 변경해 주세요.

UPDATE dept_manager
SET to_date = NOW()
WHERE emp_no = 111939;

INSERT INTO dept_manager (
	dept_no
	,emp_no
	,from_date
	,to_date
)
VALUES (
	'd009'
	,500000
	,NOW()
	,DATE(20240228)
);

-- 7. 오늘 날짜부로 나의 직책을 'Senior Engineer'로 변경해 주세요.

UPDATE titles
SET to_date = NOW()
WHERE emp_no = 500000;

INSERT INTO titles (
    emp_no
    ,title
    ,from_date
    ,to_date
)
VALUES (
    500000
    ,'Senior Engineer'
    ,NOW()
    ,DATE(20240228)
);

-- 8. 최고 연봉 사원과 최저 연봉 사원의 사번과 이름을 출력해 주세요.

SELECT emp_no, first_name, last_name
FROM employees
WHERE emp_no IN ( SELECT emp_no
				FROM salaries
				WHERE salary IN ((SELECT MAX(salary) FROM salaries),
                                (SELECT MIN(salary)	FROM salaries)
				)
);

SELECT emp_no, first_name, last_name
FROM employees
WHERE emp_no = ( SELECT emp_no FROM salaries ORDER BY salary LIMIT 1 )
OR emp_no = ( SELECT emp_no FROM salaries ORDER BY salary DESC LIMIT 1 );

-- 9. 전체 사원의 평균 연봉을 출력해 주세요.

SELECT AVG(salary)
FROM salaries;

-- 10. 사번이 499975인 사원의 지금까지 평균 연봉을 출력해 주세요.

SELECT AVG(salary)
FROM salaries
WHERE emp_no = 499975;