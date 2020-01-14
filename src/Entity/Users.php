<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users implements UserInterface, \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $usr;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pass;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $regIP;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dt;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $roles;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $default_two_factor_method;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $two_factor_authentication;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $two_factor_code;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $google_authenticator_code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jwt_token;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jwt_refresh_token;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsr(): ?string
    {
        return $this->usr;
    }


    public function setUsr(string $usr): self
    {
        $this->usr = $usr;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPass(): ?string
    {
        return $this->pass;
    }

    public function setPass(string $pass): self
    {
        $this->pass = $pass;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRegIP(): ?string
    {
        return $this->regIP;
    }

    public function setRegIP(string $regIP): self
    {
        $this->regIP = $regIP;

        return $this;
    }

    public function getDt(): ?\DateTimeInterface
    {
        return $this->dt;
    }

    public function setDt(\DateTimeInterface $dt): self
    {
        $this->dt = $dt;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRoles()
    {
        $roles_array = ['ROLE_USER'];
        $roles = $this->roles;

        return $roles_array;
    }

    public function getSalt(){}


    public function eraseCredentials() {}

    public function setRoles(string $roles)
    {
        $this->roles = $roles;

        return $this;
    }

    public function getDefaultTwoFactorMethod(): ?string
    {
        return $this->default_two_factor_method;
    }

    public function setDefaultTwoFactorMethod(string $default_two_factor_method): self
    {
        $this->default_two_factor_method = $default_two_factor_method;

        return $this;
    }

    public function getTwoFactorAuthentication(): ?int
    {
        return $this->two_factor_authentication;
    }

    public function setTwoFactorAuthentication(int $two_factor_authentication): self
    {
        $this->two_factor_authentication = $two_factor_authentication;

        return $this;
    }

    public function getTwoFactorCode(): ?string
    {
        return $this->two_factor_code;
    }

    public function setTwoFactorCode(string $two_factor_code): self
    {
        $this->two_factor_code = $two_factor_code;

        return $this;
    }

    public function getGoogleAuthenticatorCode(): ?string
    {
        return $this->google_authenticator_code;
    }

    public function setGoogleAuthenticatorCode(string $google_authenticator_code): self
    {
        $this->google_authenticator_code = $google_authenticator_code;

        return $this;
    }

    public function getJwtToken(): ?string
    {
        return $this->jwt_token;
    }

    public function setJwtToken(string $jwt_token): self
    {
        $this->jwt_token = $jwt_token;

        return $this;
    }

    public function getJwtRefreshToken(): ?string
    {
        return $this->jwt_refresh_token;
    }

    public function setJwtRefreshToken(string $jwt_refresh_token): self
    {
        $this->jwt_refresh_token = $jwt_refresh_token;

        return $this;
    }

    public function serialize(){
        return serialize([
            $this->id,
            $this->usr,
            $this->email,
            $this->password
        ]);
    }

    public function unserialize($string)
    {
        list(
            $this->id,
            $this->usr,
            $this->email,
            $this->password
            ) = unserialize($string, ['allowed_classes' => false]);
    }
}
