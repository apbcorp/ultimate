<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191010150955 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE TABLE `users` (
            `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            `name` VARCHAR(256) NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8');

        $this->addSql('CREATE TABLE `characters` (
            `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            `userId` int(11) UNSIGNED NOT NULL,
            `statStr` SMALLINT UNSIGNED NOT NULL DEFAULT 10,
            `statDex` SMALLINT UNSIGNED NOT NULL DEFAULT 10,
            `statInt` SMALLINT UNSIGNED NOT NULL DEFAULT 10,
            `skillMining` SMALLINT UNSIGNED NOT NULL,
            `skillSmelting` SMALLINT UNSIGNED NOT NULL,
            `skillBlacksmith` SMALLINT UNSIGNED NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8');

        $this->addSql('CREATE TABLE `storedItems` (
            `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            `userId` int(11) UNSIGNED NOT NULL,
            `itemId` int(11) UNSIGNED NOT NULL,
            `amount` int(11) UNSIGNED NOT NULL,
            `durability` int(11) UNSIGNED NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8');

        $this->addSql('CREATE TABLE `items` (
            `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            `itemType` int(11) UNSIGNED NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8');

        $this->addSql('CREATE TABLE `itemProperties` (
            `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
            `itemId` int(11) UNSIGNED NOT NULL,
            `propertyId` int(11) UNSIGNED NOT NULL,
            `intValue` int(11) UNSIGNED NOT NULL,
            `stringValue` VARCHAR(256) NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DROP TABLE `users`');
        $this->addSql('DROP TABLE `characters`');
        $this->addSql('DROP TABLE `stores`');
        $this->addSql('DROP TABLE `items`');
        $this->addSql('DROP TABLE `itemProperties`');
    }
}
