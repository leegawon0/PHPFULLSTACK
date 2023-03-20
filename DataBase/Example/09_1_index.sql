SHOW INDEX FROM employees;

CREATE INDEX idx_employees_last_name ON employees(last_name);

DROP INDEX idx_employees_last_name ON employees;

-- 인덱스는 수정 기능이 없다!

SELECT * FROM employees WHERE last_name = 'Swan';