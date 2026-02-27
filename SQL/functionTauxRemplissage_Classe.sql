DELIMITER $$
CREATE DEFINER=`root`@`localhost` FUNCTION `TauxRemplissage_Classe`() RETURNS float
    NO SQL
BEGIN
    DECLARE nbLitsOccupés INT;
    DECLARE nbLitsTotal INT;
    DECLARE total float DEFAULT 0;
    
    SELECT COUNT(id) INTO nbLitsOccupés
    FROM Lit
    WHERE Occupations = 1 AND numero_Chambres IN (SELECT numero FROM Chambres WHERE etages IN(SELECT id FROM Etages WHERE numeroClasse = cla));
    
    SELECT COUNT(id) INTO nbLitsTotal
    FROM Lit
    WHERE numero_Chambres IN (SELECT numero FROM Chambres WHERE etages IN(SELECT id FROM Etages WHERE numeroClasse = cla));
    
    SET total = nbLitsOccupés * 100 / nbLitsTotal;
    RETURN total;
END$$
DELIMITER ;