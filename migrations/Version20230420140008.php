<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230420140008 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artistepostuler DROP FOREIGN KEY FK_8DD006906B3CA4B');
        $this->addSql('ALTER TABLE artistepostuler DROP FOREIGN KEY FK_8DD006907983EA76');
        $this->addSql('ALTER TABLE artistepostuler ADD notif TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE artistepostuler ADD CONSTRAINT FK_8DD006906B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE artistepostuler ADD CONSTRAINT FK_8DD006907983EA76 FOREIGN KEY (idoffre) REFERENCES offretravail (idoffre)');
        $this->addSql('ALTER TABLE demandetravail CHANGE pdf pdf VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artistepostuler DROP FOREIGN KEY FK_8DD006906B3CA4B');
        $this->addSql('ALTER TABLE artistepostuler DROP FOREIGN KEY FK_8DD006907983EA76');
        $this->addSql('ALTER TABLE artistepostuler DROP notif');
        $this->addSql('ALTER TABLE artistepostuler ADD CONSTRAINT FK_8DD006906B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE artistepostuler ADD CONSTRAINT FK_8DD006907983EA76 FOREIGN KEY (idoffre) REFERENCES offretravail (idoffre) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE demandetravail CHANGE pdf pdf VARCHAR(255) DEFAULT NULL');
    }
}
