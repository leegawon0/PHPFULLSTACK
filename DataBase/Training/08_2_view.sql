SELECT e.emp_no, CONCAT(first_name,' ',last_name) full_name, d.dept_name
FROM employees e
	INNER JOIN dept_emp d_e
		ON e.emp_no = d_e.emp_no
	INNER JOIN departments d
		ON d_e.dept_no = d.dept_no
WHERE d_e.to_date = DATE(99990101);

CREATE VIEW TEST_VIEW
AS
	SELECT e.emp_no, CONCAT(first_name,' ',last_name) full_name, d.dept_name
	FROM employees e
		INNER JOIN dept_emp d_e
			ON e.emp_no = d_e.emp_no
		INNER JOIN departments d
			ON d_e.dept_no = d.dept_no
	WHERE d_e.to_date = DATE(99990101)
;

SELECT *
FROM test_view;