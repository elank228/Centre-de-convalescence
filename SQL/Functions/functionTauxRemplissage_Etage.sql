DELIMITER $$
CREATE DEFINER=`root`@`localhost` FUNCTION `TauxRemplissage_Etage1`(`etg` INT) RETURNS float
    NO SQL
BEGIN
    DECLARE nbLitsOccupés INT;
    DECLARE nbLitsTotal INT;
    DECLARE total float DEFAULT 0;
    
    SELECT COUNT(id) INTO nbLitsOccupés
    FROM Lit
    WHERE Occupations = 1 AND numero_Chambres IN (SELECT numero FROM Chambres WHERE etages = etg);
    
    SELECT COUNT(id) INTO nbLitsTotal
    FROM Lit
    WHERE numero_Chambres IN (SELECT numero FROM Chambres WHERE etages = etg);
    
    SET total = nbLitsOccupés * 100 / nbLitsTotal;
    RETURN total;
END$$
DELIMITER ;