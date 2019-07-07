<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190706111724 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE observation (id INT AUTO_INCREMENT NOT NULL, wind_chill INT NOT NULL, wind_direction INT NOT NULL, wind_speed NUMERIC(5, 2) NOT NULL, atm_humidity INT NOT NULL, atm_visibility NUMERIC(5, 2) NOT NULL, atm_pressure NUMERIC(5, 2) NOT NULL, atm_rising INT NOT NULL, ast_sunrise VARCHAR(255) NOT NULL, atm_sunset VARCHAR(255) NOT NULL, condition_text VARCHAR(255) NOT NULL, condition_code INT NOT NULL, condition_temperature INT NOT NULL, created_at DATETIME NOT NULL, city VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE observation');
    }
}
