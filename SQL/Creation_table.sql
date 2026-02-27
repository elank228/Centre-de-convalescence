CREATE TABLE `Chambres`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `numero` BIGINT NOT NULL,
    `etages` BIGINT NOT NULL,
    `nbLits` BIGINT NOT NULL,
    `numeroClasse` BIGINT NOT NULL
);
CREATE TABLE `Lit`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `numero_Chambres` BIGINT NOT NULL,
    `dateEntree` DATE NOT NULL,
    `dateSortie` DATE NOT NULL,
    `Occupation` BIGINT NOT NULL
);
CREATE TABLE `Classes`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `libelle` VARCHAR(255) NOT NULL
);
CREATE TABLE `Etages`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `numeroClasse` BIGINT NOT NULL
);
ALTER TABLE
    `Etages` ADD CONSTRAINT `etages_numeroclasse_foreign` FOREIGN KEY(`numeroClasse`) REFERENCES `Classes`(`id`);
ALTER TABLE
    `Chambres` ADD CONSTRAINT `chambres_numeroclasse_foreign` FOREIGN KEY(`numeroClasse`) REFERENCES `Classes`(`id`);
ALTER TABLE
    `Chambres` ADD CONSTRAINT `chambres_etages_foreign` FOREIGN KEY(`etages`) REFERENCES `Etages`(`id`);
ALTER TABLE
    `Lit` ADD CONSTRAINT `lit_numero_chambres_foreign` FOREIGN KEY(`numero_Chambres`) REFERENCES `Chambres`(`numero`);
