DELIMITER $$
CREATE DEFINER=`root`@`localhost` FUNCTION `TauxRemplissage_Chambre`(`cha` INT) RETURNS float
    NO SQL
BEGIN
    DECLARE nbLitsOccupés INT;
    DECLARE nbLitsTotal INT;
    DECLARE total FLOAT;

    SELECT COUNT(numeroLit) INTO nbLitsOccupés
    FROM Lit
    WHERE Occupation = 1 AND numeroChambre = cha;

    SELECT COUNT(numeroLit) INTO nbLitsTotal
    FROM Lit
    WHERE numeroChambre = cha;

    SET total = IF (nbLitsOccupés = 0, 0, IF(nbLitsOccupés < nbLitsTotal, 0.5, IF(nbLitsOccupés = nbLitsTotal, 1, 2)));
    RETURN total;
END$$
DELIMITER ;