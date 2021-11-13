<?php

namespace App\Entity;

use App\Repository\ProcedimentoRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProcedimentoRepository::class)
 * @ORM\Table(name="procedimentos")
 */
class Procedimento
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nome;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data_criacao;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data_agenda;

    /**
     * @ORM\Column(type="boolean")
     */
    private $esta_confirmado;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getDataCriacao(): ?\DateTimeInterface
    {
        return $this->data_criacao;
    }

    public function setDataCriacao(\DateTimeInterface $data_criacao): self
    {
        $this->data_criacao = $data_criacao;

        return $this;
    }

    public function getDataAgenda(): ?\DateTimeInterface
    {
        return $this->data_agenda;
    }

    public function setDataAgenda(\DateTimeInterface $data_agenda): self
    {
        $this->data_agenda = $data_agenda;

        return $this;
    }

    public function getEstaConfirmado(): ?bool
    {
        return $this->esta_confirmado;
    }

    public function setEstaConfirmado(bool $esta_confirmado): self
    {
        $this->esta_confirmado = $esta_confirmado;

        return $this;
    }
}
