CREATE DEFINER=`root`@`localhost` PROCEDURE `AddOrEdit`(
IN _user_id INT,
IN _user_name VARCHAR(45),
IN _user_email VARCHAR(100)
)
BEGIN
IF _user_id = 0 THEN
INSERT INTO first_table(user_name,user_email)
VALUES (_user_name,_user_email);
SET _user_id = LAST_INSERT_ID();
ELSE
UPDATE first_table
SET
user_name = _user_name,
user_email = _user_email
WHERE user_id = _user_id;
END IF;
SELECT _user_id AS 'user_id';
END