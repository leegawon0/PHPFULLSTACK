-- 1. 사원의 사원번호, 풀네임, 직책명을 출력해 주세요.

SELECT e.emp_no, CONCAT(e.first_name,' ',e.last_name) full_name, t.title
FROM employees e
	INNER JOIN titles t
		ON e.emp_no = t.emp_no
WHERE t.to_date = DATE(99990101);

-- 2. 사원의 사원번호, 성별, 현재 월급을 출력해 주세요.

SELECT e.emp_no, e.gender, s.salary
FROM employees e
	INNER JOIN salaries s
		ON e.emp_no = s.emp_no
WHERE s.to_date = DATE(99990101);

-- 3. 10010 사원의 풀네임, 과거부터 현재까지 월급 이력을 출력해 주세요.

SELECT e.emp_no, CONCAT(e.first_name,' ',e.last_name), s.salary
FROM employees e
	INNER JOIN salaries s
		ON e.emp_no = s.emp_no
WHERE e.emp_no = 10010;

-- 4. 사원의 사원번호, 풀네임, 소속부서명을 출력해 주세요.

SELECT e.emp_no, CONCAT(e.first_name,' ',e.last_name), d_n.dept_name
FROM employees e
	INNER JOIN dept_emp d_e
		ON e.emp_no = d_e.emp_no
    INNER JOIN departments d_n
        ON d_e.dept_no = d_n.dept_no
WHERE d_e.to_date = DATE(99990101)
ORDER BY e.emp_no ASC;

-- 5. 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력해 주세요.

SELECT e.emp_no, CONCAT(e.first_name,' ',e.last_name), s.salary
FROM employees e
	INNER JOIN salaries s
		ON e.emp_no = s.emp_no
WHERE s.to_date = DATE(99990101)
ORDER BY salary DESC
LIMIT 10;

-- 6. 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력해 주세요.

SELECT d_n.dept_name, CONCAT(e.first_name,' ',e.last_name), e.hire_date
FROM departments d_n
	INNER JOIN dept_manager d_m
		ON d_n.dept_no = d_m.dept_no
	INNER JOIN employees e
		ON d_m.emp_no = e.emp_no
WHERE d_m.to_date = DATE(99990101);

-- 7. 현재 직책이 "Staff"인 사원의 현재 전체 평균 월급을 출력해 주세요.

SELECT title, AVG(salary)
FROM titles t
	INNER JOIN salaries s
		ON t.emp_no = s.emp_no
WHERE title = 'Staff'
	AND t.to_date = DATE(99990101)
	AND s.to_date = DATE(99990101);

-- 8. 부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호를 출력해 주세요.

SELECT CONCAT(e.first_name,' ',e.last_name) full_name, e.hire_date, e.emp_no, d_n.dept_no
FROM departments d_n
	INNER JOIN dept_manager d_m
		ON d_n.dept_no = d_m.dept_no
	INNER JOIN employees e
		ON d_m.emp_no = e.emp_no;

-- 9. 현재 각 직급별 평균월급 중 60,000 이상인 직급의 직급명, 평균월급(정수)를 내림차순으로 출력해 주세요.

SELECT t.title, FORMAT(AVG(s.salary),0)
FROM titles t
	INNER JOIN salaries s
		ON t.emp_no = s.emp_no
WHERE t.to_date = DATE(99990101)
	AND s.to_date = DATE(99990101)
GROUP BY t.title
	HAVING AVG(s.salary) >= 60000
ORDER BY AVG(s.salary) DESC;

-- 10. 성별이 여자인 사원들의 직급별 사원수를 출력해 주세요.

SELECT t.title, COUNT(e.emp_no)
FROM employees e
	INNER JOIN titles t
		ON e.emp_no = t.emp_no
WHERE e.gender = 'F'
	AND t.to_date = DATE(99990101)
GROUP BY t.title;

-- 11. 성별 퇴사한 사원 수

SELECT e.gender, COUNT(e.emp_no) AS fired
FROM employees e
INNER JOIN (
	SELECT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING MAX(to_date) != DATE(99990101)
) t
ON e.emp_no = t.emp_no
GROUP BY e.gender;

M: 35,859
F: 24,041

-- title / 해고된사람수

(SELECT emp_no
	FROM titles
	GROUP BY emp_no
	HAVING MAX(to_date) != DATE(99990101)) fired

SELECT t.title, COUNT(e.emp_no)
FROM employees e
	INNER JOIN titles t
		ON e.emp_no = t.emp_no
	INNER JOIN (
		SELECT emp_no
		FROM titles
		GROUP BY emp_no
		HAVING MAX(to_date) != DATE(99990101)
		) fired
		ON e.emp_no = fired.emp_no
WHERE e.gender = 'M'
GROUP BY t.title;

-- 퇴사한 사람중에서 직급 이동 한 이력이 안 걸러지는거같다...

SELECT COUNT(DISTINCT titles.emp_no)
FROM titles
	INNER JOIN (
		SELECT emp_no
		FROM titles
		GROUP BY emp_no
		HAVING MAX(to_date) != DATE(99990101)
		) fired
	ON titles.emp_no = fired.emp_no;

59,900 

SELECT *
FROM titles t
	INNER JOIN (
		SELECT emp_no
		FROM titles
		GROUP BY emp_no
		HAVING MAX(to_date) != DATE(99990101)
		) fired
	ON t.emp_no = fired.emp_no
GROUP BY t.emp_no
HAVING MAX(to_date);

SELECT t.title, COUNT(e.emp_no)
FROM employees e
	INNER JOIN titles t
		ON e.emp_no = t.emp_no
	INNER JOIN (
		SELECT emp_no
		FROM titles
		GROUP BY emp_no
		HAVING MAX(to_date) != DATE(99990101)
		) fired
		ON e.emp_no = fired.emp_no
WHERE e.gender = 'F'
GROUP BY e.emp_no HAVING MAX(to_date)
ORDER BY e.emp_no;

SELECT t.title, COUNT(distinct e.emp_no)
FROM employees e
	INNER JOIN titles t
		ON e.emp_no = t.emp_no
	INNER JOIN (
		SELECT emp_no
		FROM titles
		GROUP BY emp_no
		HAVING MAX(to_date) != DATE(99990101)
		) fired
		ON e.emp_no = fired.emp_no
WHERE e.gender = 'M'
GROUP BY t.title;

-- COUNT(distinct) 다음에 GROUP BY가 실행되었으면 하지만 SQL에서는 GROUP BY가 SELECT보다 먼저 실행되어 버리는 것 같다....