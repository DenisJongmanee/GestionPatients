<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211124075536 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chambre (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, num_chambre INT NOT NULL, nombre_lits INT NOT NULL, INDEX IDX_C509E4FFED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lit (id INT AUTO_INCREMENT NOT NULL, num_lit INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, id_patient INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personnel_soigant (id INT AUTO_INCREMENT NOT NULL, id_personnel_soigant INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sejour (id INT AUTO_INCREMENT NOT NULL, patient_id INT NOT NULL, lit_id INT DEFAULT NULL, id_sejour INT NOT NULL, date_entree_sejour DATETIME NOT NULL, date_sortie_sejour DATETIME NOT NULL, probleme VARCHAR(255) NOT NULL, INDEX IDX_96F520286B899279 (patient_id), INDEX IDX_96F52028278B5057 (lit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, id_service INT NOT NULL, nom_service VARCHAR(255) NOT NULL, zone_geographique VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service_sejour (service_id INT NOT NULL, sejour_id INT NOT NULL, INDEX IDX_A832251EED5CA9E6 (service_id), INDEX IDX_A832251E84CF0CF (sejour_id), PRIMARY KEY(service_id, sejour_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FFED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id)');
        $this->addSql('ALTER TABLE sejour ADD CONSTRAINT FK_96F520286B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE sejour ADD CONSTRAINT FK_96F52028278B5057 FOREIGN KEY (lit_id) REFERENCES lit (id)');
        $this->addSql('ALTER TABLE service_sejour ADD CONSTRAINT FK_A832251EED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE service_sejour ADD CONSTRAINT FK_A832251E84CF0CF FOREIGN KEY (sejour_id) REFERENCES sejour (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sejour DROP FOREIGN KEY FK_96F52028278B5057');
        $this->addSql('ALTER TABLE sejour DROP FOREIGN KEY FK_96F520286B899279');
        $this->addSql('ALTER TABLE service_sejour DROP FOREIGN KEY FK_A832251E84CF0CF');
        $this->addSql('ALTER TABLE chambre DROP FOREIGN KEY FK_C509E4FFED5CA9E6');
        $this->addSql('ALTER TABLE service_sejour DROP FOREIGN KEY FK_A832251EED5CA9E6');
        $this->addSql('DROP TABLE chambre');
        $this->addSql('DROP TABLE lit');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE personnel_soigant');
        $this->addSql('DROP TABLE sejour');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE service_sejour');
    }
}
