<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191010152955 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO `users` VALUES(1, "apbcorp")');
        $this->addSql('INSERT INTO `characters` VALUES(1, 1, 10, 10, 10, 0, 0, 0)');
        $this->addSql('INSERT INTO `storedItems` VALUES(1, 1, 1, 10, 10)');
        $this->addSql('INSERT INTO `items` VALUES(1, 1)');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('TRUNCATE `users`');
        $this->addSql('TRUNCATE `characters`');
        $this->addSql('TRUNCATE `stores`');
        $this->addSql('TRUNCATE `items`');
        $this->addSql('TRUNCATE `itemProperties`');
    }
}
