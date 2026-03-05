DELIMITER $$
CREATE DEFINER=`root`@`localhost` FUNCTION `TauxRemplissage_Classe`() RETURNS float
    NO SQL
BEGIN
    DECLARE nbLitsOccupés INT;
    DECLARE nbLitsTotal INT;
    DECLARE total float DEFAULT 0;
    
    SELECT COUNT(numeroLit) INTO nbLitsOccupés
    FROM Lit
    WHERE Occupation = 1 AND numeroChambre IN (SELECT numeroChambre FROM Chambres WHERE etages IN(SELECT numeroEtage FROM Etages WHERE numeroClasse = cla));
    
    SELECT COUNT(numeroLit) INTO nbLitsTotal
    FROM Lit
    WHERE numeroChambre IN (SELECT numeroChambre FROM Chambres WHERE etages IN(SELECT numeroEtage FROM Etages WHERE numeroClasse = cla));
    
    SET total = nbLitsOccupés * 100 / nbLitsTotal;
    RETURN total;
END$$
DELIMITER ;
