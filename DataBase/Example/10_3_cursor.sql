DELIMITER $$
CREATE PROCEDURE test()
BEGIN
DECLARE sal INT;
DECLARE sum_sal INT;
DECLARE cur_sal INT;
DECLARE end_row BOOLEAN DEFAULT FALSE;

DECLARE cur_sal CURSOR FOR
	SELECT salary FROM salaries WHERE emp_no = 10001;

DECLARE CONTINUE HANDLER FOR NOT FOUND
	SET end_row = TRUE;

OPEN cur_sal;

cursor_loop: LOOP
	FETCH cur_sal INTO sal;
	IF end_row THEN
		LEAVE cursor_loop;
		END IF;
		
		SET sum_sal = sum_sal + sal;
	END LOOP cursor_loop;

SELECT sum_sal;
END $$
DELIMITER
;

CALL test();