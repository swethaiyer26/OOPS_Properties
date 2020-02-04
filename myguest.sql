INSERT INTO myguest(firstname,lastname) VALUES('John','Doe');
SELECT * FROM myguest;
DELETE FROM myguest WHERE id=5;
SELECT id,firstname,lastname FROM myguest ORDER BY id DESC;
UPDATE myguest set lastname='janardhan' WHERE id=7;
SELECT * FROM myguest LIMIT 10 OFFSET 15;








