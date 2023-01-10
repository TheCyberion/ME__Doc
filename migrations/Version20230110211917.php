<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230110211917 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messages (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, nom_patient_id INT NOT NULL, INDEX IDX_65E8AA0A6AC6120E (nom_patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A6AC6120E FOREIGN KEY (nom_patient_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE membre ADD region VARCHAR(255) DEFAULT NULL, ADD departement VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE rendez_vous_c ADD nom_patient_id INT NOT NULL, ADD prenom_patient_id INT NOT NULL, ADD nom_medecin_id INT NOT NULL, ADD prenom_medecin_id INT NOT NULL, ADD date DATETIME NOT NULL, ADD numero_voie INT NOT NULL, ADD voie VARCHAR(255) NOT NULL, ADD ville VARCHAR(255) NOT NULL, ADD code_postal INT NOT NULL, ADD nature_rendez_vous VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE rendez_vous_c ADD CONSTRAINT FK_64ADA4126AC6120E FOREIGN KEY (nom_patient_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE rendez_vous_c ADD CONSTRAINT FK_64ADA4123F593915 FOREIGN KEY (prenom_patient_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE rendez_vous_c ADD CONSTRAINT FK_64ADA4125BC9AF3 FOREIGN KEY (nom_medecin_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE rendez_vous_c ADD CONSTRAINT FK_64ADA4125023B1E8 FOREIGN KEY (prenom_medecin_id) REFERENCES membre (id)');
        $this->addSql('CREATE INDEX IDX_64ADA4126AC6120E ON rendez_vous_c (nom_patient_id)');
        $this->addSql('CREATE INDEX IDX_64ADA4123F593915 ON rendez_vous_c (prenom_patient_id)');
        $this->addSql('CREATE INDEX IDX_64ADA4125BC9AF3 ON rendez_vous_c (nom_medecin_id)');
        $this->addSql('CREATE INDEX IDX_64ADA4125023B1E8 ON rendez_vous_c (prenom_medecin_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A6AC6120E');
        $this->addSql('DROP TABLE messages');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('ALTER TABLE membre DROP region, DROP departement');
        $this->addSql('ALTER TABLE rendez_vous_c DROP FOREIGN KEY FK_64ADA4126AC6120E');
        $this->addSql('ALTER TABLE rendez_vous_c DROP FOREIGN KEY FK_64ADA4123F593915');
        $this->addSql('ALTER TABLE rendez_vous_c DROP FOREIGN KEY FK_64ADA4125BC9AF3');
        $this->addSql('ALTER TABLE rendez_vous_c DROP FOREIGN KEY FK_64ADA4125023B1E8');
        $this->addSql('DROP INDEX IDX_64ADA4126AC6120E ON rendez_vous_c');
        $this->addSql('DROP INDEX IDX_64ADA4123F593915 ON rendez_vous_c');
        $this->addSql('DROP INDEX IDX_64ADA4125BC9AF3 ON rendez_vous_c');
        $this->addSql('DROP INDEX IDX_64ADA4125023B1E8 ON rendez_vous_c');
        $this->addSql('ALTER TABLE rendez_vous_c DROP nom_patient_id, DROP prenom_patient_id, DROP nom_medecin_id, DROP prenom_medecin_id, DROP date, DROP numero_voie, DROP voie, DROP ville, DROP code_postal, DROP nature_rendez_vous');
    }
}
