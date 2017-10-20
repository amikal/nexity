<?php

namespace Nexity\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="Nexity\BackBundle\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", nullable=true, length=1)
     */
    private $civilite;


    /**
     * @var string
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


    /**
     * @var string
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;


    /**
     * @var string
     * @ORM\Column(name="code_postal", type="string", length=255)
     */
    private $code_postal;

    /**
     * @var string
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="optin_nexity", type="string", nullable=true, length=1)
     */
    private $optin_nexity;

    /**
     * @var string
     *
     * @ORM\Column(name="optin_partenaire", type="string", nullable=true, length=1)
     */
    private $optin_partenaire;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * @param string $civilite
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;
    }

    /**
     * @return string
     */
    public function getOptinNexity()
    {
        return $this->optin_nexity;
    }

    /**
     * @param string $optin_nexity
     */
    public function setOptinNexity($optin_nexity)
    {
        $this->optin_nexity = $optin_nexity;
    }

    /**
     * @return string
     */
    public function getOptinPartenaire()
    {
        return $this->optin_partenaire;
    }

    /**
     * @param string $optin_partenaire
     */
    public function setOptinPartenaire(string $optin_partenaire)
    {
        $this->optin_partenaire = $optin_partenaire;
    }



    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getCodePostal()
    {
        return $this->code_postal;
    }

    /**
     * @param string $code_postal
     */
    public function setCodePostal($code_postal)
    {
        $this->code_postal = $code_postal;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

}

