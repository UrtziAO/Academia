<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230328084438 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE alumno (id INT AUTO_INCREMENT NOT NULL, dni VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, apellidos VARCHAR(255) NOT NULL, fecha_na DATE NOT NULL, direccion_a VARCHAR(255) NOT NULL, correo_a VARCHAR(255) NOT NULL, telefono_a INT NOT NULL, cuenta VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grupo (id INT AUTO_INCREMENT NOT NULL, id_profesor_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, nivel VARCHAR(255) NOT NULL, INDEX IDX_8C0E9BD3FD391480 (id_profesor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profesor (id INT AUTO_INCREMENT NOT NULL, dni VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, apellidos VARCHAR(255) NOT NULL, fecha_n DATE NOT NULL, correo VARCHAR(255) NOT NULL, telefono INT NOT NULL, direccion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE grupo ADD CONSTRAINT FK_8C0E9BD3FD391480 FOREIGN KEY (id_profesor_id) REFERENCES profesor (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE grupo DROP FOREIGN KEY FK_8C0E9BD3FD391480');
        $this->addSql('DROP TABLE alumno');
        $this->addSql('DROP TABLE grupo');
        $this->addSql('DROP TABLE profesor');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
