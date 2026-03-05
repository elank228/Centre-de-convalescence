DELIMITER $$
CREATE DEFINER=`root`@`localhost` FUNCTION `TauxRemplissage`() RETURNS float
    NO SQL
BEGIN
    DECLARE nbLitsOccupés INT;
    DECLARE nbLitsTotal INT;
    DECLARE total float DEFAULT 0;
    
    SELECT COUNT(numeroLit) INTO nbLitsOccupés
    FROM Lit
    WHERE Occupation = 1;
    
    SELECT COUNT(numeroLit) INTO nbLitsTotal
    FROM Lit;
    
    SET total = nbLitsOccupés * 100 / nbLitsTotal;
    RETURN total;
END$$
DELIMITER ;
