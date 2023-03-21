DELIMITER $$
CREATE PROCEDURE test_proc(
	IN in_num INT
)
BEGIN
	SELECT *
	FROM employees
	LIMIT in_num;
END $$
DELIMITER
;

CALL test_proc(5);

DROP PROCEDURE test_proc;