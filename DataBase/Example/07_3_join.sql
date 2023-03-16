SELECT emp.emp_no, demp.dept_no, emp.first_name
FROM employees emp
	INNER JOIN dept_emp demp
		ON emp.emp_no = demp.emp_no
LIMIT 10;

INSERT INTO departments
VALUES('d010', 'test');
COMMIT;
SELECT * FROM departments;

SELECT dept.dept_no, dept.dept_name, d_m.emp_no
FROM departments dept
	left OUTER JOIN dept_manager d_m
		ON dept.dept_no = d_m.dept_no;

SELECT dept.dept_no, dept.dept_name, d_m.emp_no
FROM departments dept
	RIGHT OUTER JOIN dept_manager d_m
		ON dept.dept_no = d_m.dept_no;

SELECT dept.dept_no, dept.dept_name, d_m.emp_no
FROM departments dept
	CROSS JOIN dept_manager d_m;

ALTER TABLE employees ADD COLUMN sup_no INT(11);
COMMIT;
SELECT emp2.*
FROM employees emp1
	INNER JOIN employees emp2
		ON emp1.sup_no = emp2.emp_no
WHERE emp1.emp_no = 10001;
-- 똑같은 데이터 유형일 경우 JOIN 할 수 있는 조건 만족

-- 중복값X
SELECT * FROM employees WHERE emp_no = 10001
UNION
SELECT * FROM employees WHERE emp_no = 10005;
-- 중복값O
SELECT * FROM employees WHERE emp_no = 10001
UNION ALL
SELECT * FROM employees WHERE emp_no = 10005;

SELECT * FROM employees WHERE emp_no = 10001 OR emp_no = 10005
UNION
SELECT * FROM employees WHERE emp_no = 10005;

SELECT * FROM employees WHERE emp_no = 10001 OR emp_no = 10005
UNION ALL
SELECT * FROM employees WHERE emp_no = 10005;