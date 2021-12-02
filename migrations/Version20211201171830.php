<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211201171830 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chambre_lit (chambre_id INT NOT NULL, lit_id INT NOT NULL, INDEX IDX_5A92649C9B177F54 (chambre_id), INDEX IDX_5A92649C278B5057 (lit_id), PRIMARY KEY(chambre_id, lit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sejour_chambre (sejour_id INT NOT NULL, chambre_id INT NOT NULL, INDEX IDX_4F761FE784CF0CF (sejour_id), INDEX IDX_4F761FE79B177F54 (chambre_id), PRIMARY KEY(sejour_id, chambre_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chambre_lit ADD CONSTRAINT FK_5A92649C9B177F54 FOREIGN KEY (chambre_id) REFERENCES chambre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE chambre_lit ADD CONSTRAINT FK_5A92649C278B5057 FOREIGN KEY (lit_id) REFERENCES lit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sejour_chambre ADD CONSTRAINT FK_4F761FE784CF0CF FOREIGN KEY (sejour_id) REFERENCES sejour (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sejour_chambre ADD CONSTRAINT FK_4F761FE79B177F54 FOREIGN KEY (chambre_id) REFERENCES chambre (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE chambre_lit');
        $this->addSql('DROP TABLE sejour_chambre');
    }
}
