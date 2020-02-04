<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200122232647 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mesures (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, created_at DATETIME NOT NULL, poids DOUBLE PRECISION NOT NULL, imc DOUBLE PRECISION NOT NULL, img DOUBLE PRECISION NOT NULL, muscle DOUBLE PRECISION NOT NULL, hydratation DOUBLE PRECISION NOT NULL, densite_osseuse DOUBLE PRECISION NOT NULL, bmr DOUBLE PRECISION NOT NULL, tx_proteine DOUBLE PRECISION NOT NULL, age_corps DOUBLE PRECISION NOT NULL, graisse_viscerale DOUBLE PRECISION NOT NULL, graisse_sous_cutanee DOUBLE PRECISION NOT NULL, poids_normal DOUBLE PRECISION NOT NULL, controle_poids DOUBLE PRECISION NOT NULL, graisse_corporelle DOUBLE PRECISION NOT NULL, poids_sans_graisse DOUBLE PRECISION NOT NULL, poids_musculaire DOUBLE PRECISION NOT NULL, qty_proteine DOUBLE PRECISION NOT NULL, tour_epaule DOUBLE PRECISION NOT NULL, tour_poitrine DOUBLE PRECISION NOT NULL, biceps_g DOUBLE PRECISION NOT NULL, biceps_d DOUBLE PRECISION NOT NULL, tour_taille DOUBLE PRECISION NOT NULL, cuisse_g DOUBLE PRECISION NOT NULL, cuisse_d DOUBLE PRECISION NOT NULL, mollet_g DOUBLE PRECISION NOT NULL, mollet_d DOUBLE PRECISION NOT NULL, INDEX IDX_4B54A559A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photos (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, date DATETIME NOT NULL, link VARCHAR(255) NOT NULL, INDEX IDX_876E0D9A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mesures ADD CONSTRAINT FK_4B54A559A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_876E0D9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE mesures');
        $this->addSql('DROP TABLE photos');
    }
}
