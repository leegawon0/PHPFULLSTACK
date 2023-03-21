DELIMITER $$
CREATE TRIGGER test_update
AFTER UPDATE
ON departments
FOR EACH ROW

BEGIN
	UPDATE titles
	SET title = 'trigger test'
	WHERE emp_no = '10001';
END $$
DELIMITER ;

UPDATE departments
SET dept_name = 'update test'
WHERE dept_no = 'd010';

SHOW TRIGGERS;

DROP TRIGGER test_update;