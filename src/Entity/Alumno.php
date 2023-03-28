<?php

namespace App\Entity;

use App\Repository\AlumnoRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlumnoRepository::class)]
class Alumno
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $dni = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $apellidos = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fechaNA = null;

    #[ORM\Column(length: 255)]
    private ?string $direccionA = null;

    #[ORM\Column(length: 255)]
    private ?string $correoA = null;

    #[ORM\Column]
    private ?int $telefonoA = null;

    #[ORM\Column(length: 255)]
    private ?string $cuenta = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(string $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getFechaNA(): ?\DateTimeInterface
    {
        return $this->fechaNA;
    }

    public function setFechaNA(\DateTimeInterface $fechaNA): self
    {
        $this->fechaNA = $fechaNA;

        return $this;
    }

    public function getDireccionA(): ?string
    {
        return $this->direccionA;
    }

    public function setDireccionA(string $direccionA): self
    {
        $this->direccionA = $direccionA;

        return $this;
    }

    public function getCorreoA(): ?string
    {
        return $this->correoA;
    }

    public function setCorreoA(string $correoA): self
    {
        $this->correoA = $correoA;

        return $this;
    }

    public function getTelefonoA(): ?int
    {
        return $this->telefonoA;
    }

    public function setTelefonoA(int $telefonoA): self
    {
        $this->telefonoA = $telefonoA;

        return $this;
    }

    public function getCuenta(): ?string
    {
        return $this->cuenta;
    }

    public function setCuenta(string $cuenta): self
    {
        $this->cuenta = $cuenta;

        return $this;
    }
}
