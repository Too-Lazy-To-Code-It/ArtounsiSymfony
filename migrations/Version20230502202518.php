<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230502202518 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rating_tutoriel (id INT AUTO_INCREMENT NOT NULL, rating INT NOT NULL, tutorielId INT NOT NULL, idRater INT NOT NULL, INDEX IDX_FC3A8F1A761B5E6 (tutorielId), INDEX IDX_FC3A8F1A2417D8B7 (idRater), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rating_tutoriel ADD CONSTRAINT FK_FC3A8F1A761B5E6 FOREIGN KEY (tutorielId) REFERENCES tutoriel (id_tutoriel)');
        $this->addSql('ALTER TABLE rating_tutoriel ADD CONSTRAINT FK_FC3A8F1A2417D8B7 FOREIGN KEY (idRater) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE rating CHANGE challenge_id challenge_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE video CHANGE date_p date_p DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rating_tutoriel DROP FOREIGN KEY FK_FC3A8F1A761B5E6');
        $this->addSql('ALTER TABLE rating_tutoriel DROP FOREIGN KEY FK_FC3A8F1A2417D8B7');
        $this->addSql('DROP TABLE rating_tutoriel');
        $this->addSql('ALTER TABLE rating CHANGE challenge_id challenge_id INT NOT NULL');
        $this->addSql('ALTER TABLE video CHANGE date_p date_p DATE NOT NULL');
    }
}
