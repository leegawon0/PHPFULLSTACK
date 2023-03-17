CREATE VIEW TEST_VIEW
AS
	SELECT t.title, COUNT(e.emp_no)
	FROM employees e
		INNER JOIN titles t
			ON e.emp_no = t.emp_no
	WHERE e.gender = 'F'
		AND t.to_date = DATE(99990101)
	GROUP BY t.title
;

SELECT *
FROM test_view
WHERE title = 'Staff';

CREATE OR REPLACE VIEW TEST_VIEW
AS
	SELECT t.title, COUNT(e.emp_no)
	FROM employees e
		INNER JOIN titles t
			ON e.emp_no = t.emp_no
	WHERE e.gender = 'M'
		AND t.to_date = DATE(99990101)
	GROUP BY t.title
;

DROP VIEW test_view;