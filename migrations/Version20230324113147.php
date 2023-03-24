<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230324113147 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artistepostuler ADD idoffre INT NOT NULL');
        $this->addSql('ALTER TABLE artistepostuler ADD CONSTRAINT FK_8DD006907983EA76 FOREIGN KEY (idoffre) REFERENCES offretravail (idoffre)');
        $this->addSql('CREATE INDEX IDX_8DD006907983EA76 ON artistepostuler (idoffre)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artistepostuler DROP FOREIGN KEY FK_8DD006907983EA76');
        $this->addSql('DROP INDEX IDX_8DD006907983EA76 ON artistepostuler');
        $this->addSql('ALTER TABLE artistepostuler DROP idoffre');
    }
}
