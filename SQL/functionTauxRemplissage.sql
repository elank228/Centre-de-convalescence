DELIMITER $$
CREATE DEFINER=`root`@`localhost` FUNCTION `TauxRemplissage1`() RETURNS float
    NO SQL
BEGIN
    DECLARE nbLitsOccupés INT;
    DECLARE nbLitsTotal INT;
    DECLARE total float DEFAULT 0;
    
    SELECT COUNT(id) INTO nbLitsOccupés
    FROM Lit
    WHERE Occupations = 1;
    
    SELECT COUNT(id) INTO nbLitsTotal
    FROM Lit;
    
    SET total = nbLitsOccupés * 100 / nbLitsTotal;
    RETURN total;
END$$
DELIMITER ;