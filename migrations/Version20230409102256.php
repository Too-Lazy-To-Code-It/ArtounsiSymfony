<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230409102256 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE allusers (id_user INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, birthday DATE NOT NULL, password VARCHAR(255) NOT NULL, salt VARCHAR(255) NOT NULL, nationality VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, nickname VARCHAR(255) NOT NULL, avatar VARCHAR(255) NOT NULL, background VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, bio VARCHAR(255) NOT NULL, PRIMARY KEY(id_user)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE artistepostuler (id_artpostuler INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, idoffre INT NOT NULL, nomartiste VARCHAR(255) NOT NULL, titreoffre VARCHAR(255) NOT NULL, datepostuler DATETIME NOT NULL, INDEX IDX_8DD006906B3CA4B (id_user), INDEX IDX_8DD006907983EA76 (idoffre), PRIMARY KEY(id_artpostuler)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ban (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, reason VARCHAR(255) NOT NULL, date_b DATE NOT NULL, INDEX IDX_62FED0E56B3CA4B (id_user), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category (id_category INT AUTO_INCREMENT NOT NULL, name_category VARCHAR(255) NOT NULL, PRIMARY KEY(id_category)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE challenge (id_challenge INT AUTO_INCREMENT NOT NULL, id_category INT NOT NULL, id_user INT NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, date_c DATE NOT NULL, pathimg VARCHAR(255) NOT NULL, niveau INT NOT NULL, INDEX IDX_D70989515697F554 (id_category), INDEX IDX_D70989516B3CA4B (id_user), PRIMARY KEY(id_challenge)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id_comment INT AUTO_INCREMENT NOT NULL, id_post INT NOT NULL, id_user INT NOT NULL, date_comment DATETIME NOT NULL, comment VARCHAR(255) NOT NULL, INDEX IDX_9474526CD1AA708F (id_post), INDEX IDX_9474526C6B3CA4B (id_user), PRIMARY KEY(id_comment)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE demandetravail (id_demande INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_category INT NOT NULL, nickname VARCHAR(255) NOT NULL, titre_demande VARCHAR(255) NOT NULL, description_demande VARCHAR(255) NOT NULL, pdf VARCHAR(255) NOT NULL, dateajoutdemande DATETIME NOT NULL, categoriedemande VARCHAR(255) NOT NULL, INDEX IDX_2BFEDBD76B3CA4B (id_user), INDEX IDX_2BFEDBD75697F554 (id_category), PRIMARY KEY(id_demande)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE favoris_turoial (id_favoris INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_tutoriel INT NOT NULL, INDEX IDX_F4FDCDF16B3CA4B (id_user), INDEX IDX_F4FDCDF1F2DCD678 (id_tutoriel), PRIMARY KEY(id_favoris)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grosmots (id_mot INT AUTO_INCREMENT NOT NULL, mot VARCHAR(255) NOT NULL, PRIMARY KEY(id_mot)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lignepanier (idlignepanier INT AUTO_INCREMENT NOT NULL, idpanier INT NOT NULL, idproduit INT NOT NULL, dateajout DATETIME NOT NULL, INDEX IDX_AD580B5E4071A05E (idpanier), INDEX IDX_AD580B5EF6A1BE49 (idproduit), PRIMARY KEY(idlignepanier)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offretravail (idoffre INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_category INT NOT NULL, titreoffre VARCHAR(255) NOT NULL, descriptionoffre VARCHAR(255) NOT NULL, categorieoffre VARCHAR(255) NOT NULL, nickname VARCHAR(255) NOT NULL, dateajoutoofre DATETIME NOT NULL, typeoffre VARCHAR(255) NOT NULL, localisationoffre VARCHAR(255) NOT NULL, INDEX IDX_E30FD136B3CA4B (id_user), INDEX IDX_E30FD135697F554 (id_category), PRIMARY KEY(idoffre)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE offretravailarchive (idoffre INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_category INT NOT NULL, titreoffre VARCHAR(255) NOT NULL, descriptionoffre VARCHAR(255) NOT NULL, categorieoffre VARCHAR(255) NOT NULL, nickname VARCHAR(255) NOT NULL, dateajoutoffre DATETIME NOT NULL, typeoffre VARCHAR(255) NOT NULL, localisationoffre VARCHAR(255) NOT NULL, INDEX IDX_6B381EBD6B3CA4B (id_user), INDEX IDX_6B381EBD5697F554 (id_category), PRIMARY KEY(idoffre)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (idpanier INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, nbr_produits INT NOT NULL, montant_total DOUBLE PRECISION NOT NULL, INDEX IDX_24CC0DF26B3CA4B (id_user), PRIMARY KEY(idpanier)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participation (id_participation INT AUTO_INCREMENT NOT NULL, id_challenge INT NOT NULL, id_user INT NOT NULL, img_participation VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_AB55E24F573C3576 (id_challenge), INDEX IDX_AB55E24F6B3CA4B (id_user), PRIMARY KEY(id_participation)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id_post INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_category INT NOT NULL, description_p VARCHAR(255) NOT NULL, media VARCHAR(255) NOT NULL, title_p VARCHAR(255) NOT NULL, date_p DATETIME NOT NULL, post_type VARCHAR(255) NOT NULL, INDEX IDX_5A8A6C8D6B3CA4B (id_user), INDEX IDX_5A8A6C8D5697F554 (id_category), PRIMARY KEY(id_post)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post_like (id_like INT AUTO_INCREMENT NOT NULL, id_post INT NOT NULL, id_user INT NOT NULL, INDEX IDX_653627B8D1AA708F (id_post), INDEX IDX_653627B86B3CA4B (id_user), PRIMARY KEY(id_like)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produits (idproduit INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_category INT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, dateajout DATETIME NOT NULL, INDEX IDX_BE2DDF8C6B3CA4B (id_user), INDEX IDX_BE2DDF8C5697F554 (id_category), PRIMARY KEY(idproduit)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rating (id_rating INT AUTO_INCREMENT NOT NULL, challenge_id INT NOT NULL, participator_id INT NOT NULL, rater_id INT NOT NULL, rating INT NOT NULL, INDEX IDX_D889262298A21AC6 (challenge_id), INDEX IDX_D88926228E46E9DE (participator_id), INDEX IDX_D88926223FC1CD0A (rater_id), PRIMARY KEY(id_rating)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tutoriel (id_tutoriel INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_category INT NOT NULL, pathimg VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, niveau INT NOT NULL, INDEX IDX_A2073AED6B3CA4B (id_user), INDEX IDX_A2073AED5697F554 (id_category), PRIMARY KEY(id_tutoriel)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video (id_video INT AUTO_INCREMENT NOT NULL, id_tutoriel INT NOT NULL, title VARCHAR(255) NOT NULL, date_p DATE NOT NULL, description VARCHAR(255) NOT NULL, pathvideo VARCHAR(255) NOT NULL, pathimage VARCHAR(255) NOT NULL, INDEX IDX_7CC7DA2CF2DCD678 (id_tutoriel), PRIMARY KEY(id_video)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE view (id_view INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_video INT NOT NULL, date_v DATETIME NOT NULL, INDEX IDX_FEFDAB8E6B3CA4B (id_user), INDEX IDX_FEFDAB8E92429B1C (id_video), PRIMARY KEY(id_view)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE artistepostuler ADD CONSTRAINT FK_8DD006906B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE artistepostuler ADD CONSTRAINT FK_8DD006907983EA76 FOREIGN KEY (idoffre) REFERENCES offretravail (idoffre)');
        $this->addSql('ALTER TABLE ban ADD CONSTRAINT FK_62FED0E56B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE challenge ADD CONSTRAINT FK_D70989515697F554 FOREIGN KEY (id_category) REFERENCES category (id_category)');
        $this->addSql('ALTER TABLE challenge ADD CONSTRAINT FK_D70989516B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CD1AA708F FOREIGN KEY (id_post) REFERENCES post (id_post)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C6B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE demandetravail ADD CONSTRAINT FK_2BFEDBD76B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE demandetravail ADD CONSTRAINT FK_2BFEDBD75697F554 FOREIGN KEY (id_category) REFERENCES category (id_category)');
        $this->addSql('ALTER TABLE favoris_turoial ADD CONSTRAINT FK_F4FDCDF16B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE favoris_turoial ADD CONSTRAINT FK_F4FDCDF1F2DCD678 FOREIGN KEY (id_tutoriel) REFERENCES tutoriel (id_tutoriel)');
        $this->addSql('ALTER TABLE lignepanier ADD CONSTRAINT FK_AD580B5E4071A05E FOREIGN KEY (idpanier) REFERENCES panier (idpanier)');
        $this->addSql('ALTER TABLE lignepanier ADD CONSTRAINT FK_AD580B5EF6A1BE49 FOREIGN KEY (idproduit) REFERENCES produits (idproduit)');
        $this->addSql('ALTER TABLE offretravail ADD CONSTRAINT FK_E30FD136B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE offretravail ADD CONSTRAINT FK_E30FD135697F554 FOREIGN KEY (id_category) REFERENCES category (id_category)');
        $this->addSql('ALTER TABLE offretravailarchive ADD CONSTRAINT FK_6B381EBD6B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE offretravailarchive ADD CONSTRAINT FK_6B381EBD5697F554 FOREIGN KEY (id_category) REFERENCES category (id_category)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF26B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F573C3576 FOREIGN KEY (id_challenge) REFERENCES challenge (id_challenge)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F6B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D6B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D5697F554 FOREIGN KEY (id_category) REFERENCES category (id_category)');
        $this->addSql('ALTER TABLE post_like ADD CONSTRAINT FK_653627B8D1AA708F FOREIGN KEY (id_post) REFERENCES post (id_post)');
        $this->addSql('ALTER TABLE post_like ADD CONSTRAINT FK_653627B86B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8C6B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE produits ADD CONSTRAINT FK_BE2DDF8C5697F554 FOREIGN KEY (id_category) REFERENCES category (id_category)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D889262298A21AC6 FOREIGN KEY (challenge_id) REFERENCES challenge (id_challenge)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D88926228E46E9DE FOREIGN KEY (participator_id) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE rating ADD CONSTRAINT FK_D88926223FC1CD0A FOREIGN KEY (rater_id) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE tutoriel ADD CONSTRAINT FK_A2073AED6B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE tutoriel ADD CONSTRAINT FK_A2073AED5697F554 FOREIGN KEY (id_category) REFERENCES category (id_category)');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2CF2DCD678 FOREIGN KEY (id_tutoriel) REFERENCES tutoriel (id_tutoriel)');
        $this->addSql('ALTER TABLE view ADD CONSTRAINT FK_FEFDAB8E6B3CA4B FOREIGN KEY (id_user) REFERENCES allusers (id_user)');
        $this->addSql('ALTER TABLE view ADD CONSTRAINT FK_FEFDAB8E92429B1C FOREIGN KEY (id_video) REFERENCES video (id_video)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artistepostuler DROP FOREIGN KEY FK_8DD006906B3CA4B');
        $this->addSql('ALTER TABLE artistepostuler DROP FOREIGN KEY FK_8DD006907983EA76');
        $this->addSql('ALTER TABLE ban DROP FOREIGN KEY FK_62FED0E56B3CA4B');
        $this->addSql('ALTER TABLE challenge DROP FOREIGN KEY FK_D70989515697F554');
        $this->addSql('ALTER TABLE challenge DROP FOREIGN KEY FK_D70989516B3CA4B');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CD1AA708F');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C6B3CA4B');
        $this->addSql('ALTER TABLE demandetravail DROP FOREIGN KEY FK_2BFEDBD76B3CA4B');
        $this->addSql('ALTER TABLE demandetravail DROP FOREIGN KEY FK_2BFEDBD75697F554');
        $this->addSql('ALTER TABLE favoris_turoial DROP FOREIGN KEY FK_F4FDCDF16B3CA4B');
        $this->addSql('ALTER TABLE favoris_turoial DROP FOREIGN KEY FK_F4FDCDF1F2DCD678');
        $this->addSql('ALTER TABLE lignepanier DROP FOREIGN KEY FK_AD580B5E4071A05E');
        $this->addSql('ALTER TABLE lignepanier DROP FOREIGN KEY FK_AD580B5EF6A1BE49');
        $this->addSql('ALTER TABLE offretravail DROP FOREIGN KEY FK_E30FD136B3CA4B');
        $this->addSql('ALTER TABLE offretravail DROP FOREIGN KEY FK_E30FD135697F554');
        $this->addSql('ALTER TABLE offretravailarchive DROP FOREIGN KEY FK_6B381EBD6B3CA4B');
        $this->addSql('ALTER TABLE offretravailarchive DROP FOREIGN KEY FK_6B381EBD5697F554');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF26B3CA4B');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F573C3576');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F6B3CA4B');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D6B3CA4B');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D5697F554');
        $this->addSql('ALTER TABLE post_like DROP FOREIGN KEY FK_653627B8D1AA708F');
        $this->addSql('ALTER TABLE post_like DROP FOREIGN KEY FK_653627B86B3CA4B');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8C6B3CA4B');
        $this->addSql('ALTER TABLE produits DROP FOREIGN KEY FK_BE2DDF8C5697F554');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D889262298A21AC6');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D88926228E46E9DE');
        $this->addSql('ALTER TABLE rating DROP FOREIGN KEY FK_D88926223FC1CD0A');
        $this->addSql('ALTER TABLE tutoriel DROP FOREIGN KEY FK_A2073AED6B3CA4B');
        $this->addSql('ALTER TABLE tutoriel DROP FOREIGN KEY FK_A2073AED5697F554');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2CF2DCD678');
        $this->addSql('ALTER TABLE view DROP FOREIGN KEY FK_FEFDAB8E6B3CA4B');
        $this->addSql('ALTER TABLE view DROP FOREIGN KEY FK_FEFDAB8E92429B1C');
        $this->addSql('DROP TABLE allusers');
        $this->addSql('DROP TABLE artistepostuler');
        $this->addSql('DROP TABLE ban');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE challenge');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE demandetravail');
        $this->addSql('DROP TABLE favoris_turoial');
        $this->addSql('DROP TABLE grosmots');
        $this->addSql('DROP TABLE lignepanier');
        $this->addSql('DROP TABLE offretravail');
        $this->addSql('DROP TABLE offretravailarchive');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE participation');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE post_like');
        $this->addSql('DROP TABLE produits');
        $this->addSql('DROP TABLE rating');
        $this->addSql('DROP TABLE tutoriel');
        $this->addSql('DROP TABLE video');
        $this->addSql('DROP TABLE view');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
