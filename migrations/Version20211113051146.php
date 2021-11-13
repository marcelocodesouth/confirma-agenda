<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211113051146 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE funcionario_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE funcionarios_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE funcionarios (id INT NOT NULL, nome VARCHAR(255) NOT NULL, matricula VARCHAR(10) NOT NULL, senha VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE funcionario');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE funcionarios_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE funcionario_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE funcionario (id INT NOT NULL, nome VARCHAR(255) NOT NULL, matricula VARCHAR(10) NOT NULL, senha VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('DROP TABLE funcionarios');
    }
}
