DROP DATABASE IF exists centredeconvalescence; 
CREATE DATABASE centredeconvalescence;
CREATE TABLE `Chambres`(
    `numeroChambre` BIGINT  NOT NULL PRIMARY KEY,
    `etages` BIGINT NOT NULL,
    `nbLits` BIGINT NOT NULL,
    `numeroClasse` BIGINT NOT NULL
) ENGINE = innodb;

CREATE TABLE `Lit`(
    `numeroLit` BIGINT  NOT NULL PRIMARY KEY,
    `numeroChambre` BIGINT NOT NULL,
    `dateEntree` DATE NOT NULL,
    `dateSortie` DATE NOT NULL,
    `Occupation` BIGINT NOT NULL
)ENGINE = innodb;

CREATE TABLE `Classes`(
    `idClasse` BIGINT  NOT NULL PRIMARY KEY,
    `libelle` VARCHAR(255) NOT NULL
)ENGINE = innodb;

CREATE TABLE `Etages`(
    `numeroEtage` BIGINT  NOT NULL PRIMARY KEY,
    `numeroClasse` BIGINT  NOT NULL
)ENGINE = innodb;

ALTER TABLE
    `Etages` ADD CONSTRAINT `etages_numeroclasse_foreign` FOREIGN KEY(`numeroClasse`) REFERENCES `Classes`(`idClasse`);
ALTER TABLE
    `Chambres` ADD CONSTRAINT `chambres_numeroclasse_foreign` FOREIGN KEY(`numeroClasse`) REFERENCES `Classes`(`idClasse`);
ALTER TABLE
    `Chambres` ADD CONSTRAINT `chambres_etages_foreign` FOREIGN KEY(`etages`) REFERENCES `Etages`(`numeroEtage`);
ALTER TABLE
    `Lit` ADD CONSTRAINT `lit_numero_chambres_foreign` FOREIGN KEY(`numeroChambre`) REFERENCES `Chambres`(`numeroChambre`);
