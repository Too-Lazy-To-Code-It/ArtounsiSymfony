<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230324112433 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE offretravailarchive (idoffre INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_category INT NOT NULL, titreoffre VARCHAR(255) NOT NULL, descriptionoffre VARCHAR(255) NOT NULL, categorieoffre VARCHAR(255) NOT NULL, nickname VARCHAR(255) NOT NULL, dateajoutoffre DATETIME NOT NULL, typeoffre VARCHAR(255) NOT NULL, localisationoffre VARCHAR(255) NOT NULL, INDEX IDX_6B381EBD6B3CA4B (id_user), INDEX IDX_6B381EBD5697F554 (id_category), PRIMARY KEY(idoffre)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE offretravailarchive ADD CONSTRAINT FK_6B381EBD6B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE offretravailarchive ADD CONSTRAINT FK_6B381EBD5697F554 FOREIGN KEY (id_category) REFERENCES category (id_category)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE offretravailarchive DROP FOREIGN KEY FK_6B381EBD6B3CA4B');
        $this->addSql('ALTER TABLE offretravailarchive DROP FOREIGN KEY FK_6B381EBD5697F554');
        $this->addSql('DROP TABLE offretravailarchive');
    }
}
