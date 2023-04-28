<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230428002955 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE allusers ADD number VARCHAR(255) NOT NULL, ADD _2fa TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE panier CHANGE nbr_produits nbr_produits INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE allusers DROP number, DROP _2fa');
        $this->addSql('ALTER TABLE panier CHANGE nbr_produits nbr_produits VARCHAR(255) NOT NULL');
    }
}
