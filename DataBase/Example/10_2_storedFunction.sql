DELIMITER $$
CREATE FUNCTION fc_sum(num INT)
	RETURNS INT
BEGIN
	RETURN num + num + num;
END $$
DELIMITER
;

SELECT fc_sum(2);

DROP FUNCTION fc_sum;