<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211113044207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE funcionario_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE pacientes_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE procedimentos_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE funcionario (id INT NOT NULL, nome VARCHAR(255) NOT NULL, matricula VARCHAR(10) NOT NULL, senha VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE pacientes (id INT NOT NULL, nome VARCHAR(255) NOT NULL, numero_cartao_sus VARCHAR(15) NOT NULL, data_nascimento TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE procedimentos (id INT NOT NULL, nome VARCHAR(255) NOT NULL, data_criacao TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, data_agenda TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, esta_confirmado BOOLEAN NOT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE funcionario_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE pacientes_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE procedimentos_id_seq CASCADE');
        $this->addSql('DROP TABLE funcionario');
        $this->addSql('DROP TABLE pacientes');
        $this->addSql('DROP TABLE procedimentos');
    }
}
