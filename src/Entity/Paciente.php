<?php

namespace App\Entity;

use App\Repository\PacienteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PacienteRepository::class)
 * @ORM\Table(name="pacientes")
 */
class Paciente
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
     * @ORM\Column(type="string", length=15)
     */
    private $numero_cartao_sus;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data_nascimento;

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

    public function getNumeroCartaoSus(): ?string
    {
        return $this->numero_cartao_sus;
    }

    public function setNumeroCartaoSus(string $numero_cartao_sus): self
    {
        $this->numero_cartao_sus = $numero_cartao_sus;

        return $this;
    }

    public function getDataNascimento(): ?\DateTimeInterface
    {
        return $this->data_nascimento;
    }

    public function setDataNascimento(\DateTimeInterface $data_nascimento): self
    {
        $this->data_nascimento = $data_nascimento;

        return $this;
    }
}
