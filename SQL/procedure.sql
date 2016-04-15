DROP PROCEDURE IF EXISTS nacist_podkategorie;

delimiter $$
CREATE PROCEDURE nacist_podkategorie(IN startid INT, OUT n INT)
BEGIN
DECLARE pocet, poradi INT DEFAULT 0;
DECLARE katNazev VARCHAR(60);
DROP TABLE IF EXISTS __podkat;
CREATE TEMPORARY TABLE __podkat
(poradi INT, uroven INT, id INT, katNazev VARCHAR(60))
ENGINE=HEAP;

SELECT COUNT(*) FROM categories WHERE id=startid INTO pocet;

IF pocet=1 THEN
SELECT name FROM categories WHERE id=startid INTO katNazev;
INSERT INTO __podkat VALUES(0, 0, startid, katNazev);

END IF;

SELECT COUNT(*) FROM __podkat INTO n;
END $$
delimiter ;

SHOW PROCEDURE STATUS;


CALL nacist_podkategorie(1, @param2);
Select @param2;
