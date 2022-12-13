CREATE TABLE `gestion bibliotheque`.`users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT , 
    `nom` VARCHAR(255) NOT NULL , 
    `prenom` VARCHAR(255) NOT NULL , 
    `login` VARCHAR(255) NOT NULL , 
    `password` VARCHAR(255) NOT NULL , 
    `role` VARCHAR(255) NOT NULL , 
    PRIMARY KEY (`id`), 
    UNIQUE (`login`)
) ENGINE = InnoDB;


INSERT INTO `users`(`id`, `nom`, `prenom`, `login`, `password`, `role`) 
VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')