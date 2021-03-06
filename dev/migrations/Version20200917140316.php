<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200917140316 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE Modele_voiture');
        $this->addSql('ALTER TABLE Parking CHANGE nom nom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE Voiture CHANGE immatriculation immatriculation VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Modele_voiture (id INT AUTO_INCREMENT NOT NULL, id_voiture INT NOT NULL, marque INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE parking CHANGE nom nom INT NOT NULL');
        $this->addSql('ALTER TABLE voiture CHANGE immatriculation immatriculation INT NOT NULL');
    }
}
