<?php

namespace Locapp\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Biens
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Locapp\MainBundle\Entity\BiensRepository")
 */
class Biens
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant", type="string", length=255)
     */
    private $identifiant;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="batiment", type="string", length=25)
     */
    private $batiment;

    /**
     * @var integer
     *
     * @ORM\Column(name="escalier", type="integer")
     */
    private $escalier;

    /**
     * @var integer
     *
     * @ORM\Column(name="etage", type="integer")
     */
    private $etage;

    /**
     * @var string
     *
     * @ORM\Column(name="no_porte", type="string", length=25)
     */
    private $noPorte;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="quartier", type="string", length=255)
     */
    private $quartier;

    /**
     * @var string
     *
     * @ORM\Column(name="superficie", type="decimal")
     */
    private $superficie;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_piece", type="integer")
     */
    private $nbrePiece;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_chambre", type="integer")
     */
    private $nbChambre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_toilette", type="integer")
     */
    private $nbreToilette;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_construction", type="integer")
     */
    private $anneeConstruction;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text")
     */
    private $notes;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_location", type="integer")
     */
    private $typeLocation;

    /**
     * @var string
     *
     * @ORM\Column(name="loyer_hc", type="decimal")
     */
    private $loyerHc;

    /**
     * @var string
     *
     * @ORM\Column(name="charge", type="decimal")
     */
    private $charge;

    /**
     * @var string
     *
     * @ORM\Column(name="regime_juridique", type="string", length=255)
     */
    private $regimeJuridique;

    /**
     * @var string
     *
     * @ORM\Column(name="designation_partie", type="string", length=255)
     */
    private $designationPartie;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="proprietaire", type="string", length=255)
     */
    private $proprietaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime")
     */
    private $dateAdd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_upd", type="datetime")
     */
    private $dateUpd;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Biens
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set identifiant
     *
     * @param string $identifiant
     * @return Biens
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string 
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Biens
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set batiment
     *
     * @param string $batiment
     * @return Biens
     */
    public function setBatiment($batiment)
    {
        $this->batiment = $batiment;

        return $this;
    }

    /**
     * Get batiment
     *
     * @return string 
     */
    public function getBatiment()
    {
        return $this->batiment;
    }

    /**
     * Set escalier
     *
     * @param integer $escalier
     * @return Biens
     */
    public function setEscalier($escalier)
    {
        $this->escalier = $escalier;

        return $this;
    }

    /**
     * Get escalier
     *
     * @return integer 
     */
    public function getEscalier()
    {
        return $this->escalier;
    }

    /**
     * Set etage
     *
     * @param integer $etage
     * @return Biens
     */
    public function setEtage($etage)
    {
        $this->etage = $etage;

        return $this;
    }

    /**
     * Get etage
     *
     * @return integer 
     */
    public function getEtage()
    {
        return $this->etage;
    }

    /**
     * Set noPorte
     *
     * @param string $noPorte
     * @return Biens
     */
    public function setNoPorte($noPorte)
    {
        $this->noPorte = $noPorte;

        return $this;
    }

    /**
     * Get noPorte
     *
     * @return string 
     */
    public function getNoPorte()
    {
        return $this->noPorte;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Biens
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set quartier
     *
     * @param string $quartier
     * @return Biens
     */
    public function setQuartier($quartier)
    {
        $this->quartier = $quartier;

        return $this;
    }

    /**
     * Get quartier
     *
     * @return string 
     */
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * Set superficie
     *
     * @param string $superficie
     * @return Biens
     */
    public function setSuperficie($superficie)
    {
        $this->superficie = $superficie;

        return $this;
    }

    /**
     * Get superficie
     *
     * @return string 
     */
    public function getSuperficie()
    {
        return $this->superficie;
    }

    /**
     * Set nbrePiece
     *
     * @param integer $nbrePiece
     * @return Biens
     */
    public function setNbrePiece($nbrePiece)
    {
        $this->nbrePiece = $nbrePiece;

        return $this;
    }

    /**
     * Get nbrePiece
     *
     * @return integer 
     */
    public function getNbrePiece()
    {
        return $this->nbrePiece;
    }

    /**
     * Set nbChambre
     *
     * @param integer $nbChambre
     * @return Biens
     */
    public function setNbChambre($nbChambre)
    {
        $this->nbChambre = $nbChambre;

        return $this;
    }

    /**
     * Get nbChambre
     *
     * @return integer 
     */
    public function getNbChambre()
    {
        return $this->nbChambre;
    }

    /**
     * Set nbreToilette
     *
     * @param integer $nbreToilette
     * @return Biens
     */
    public function setNbreToilette($nbreToilette)
    {
        $this->nbreToilette = $nbreToilette;

        return $this;
    }

    /**
     * Get nbreToilette
     *
     * @return integer 
     */
    public function getNbreToilette()
    {
        return $this->nbreToilette;
    }

    /**
     * Set anneeConstruction
     *
     * @param integer $anneeConstruction
     * @return Biens
     */
    public function setAnneeConstruction($anneeConstruction)
    {
        $this->anneeConstruction = $anneeConstruction;

        return $this;
    }

    /**
     * Get anneeConstruction
     *
     * @return integer 
     */
    public function getAnneeConstruction()
    {
        return $this->anneeConstruction;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Biens
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return Biens
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string 
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set typeLocation
     *
     * @param integer $typeLocation
     * @return Biens
     */
    public function setTypeLocation($typeLocation)
    {
        $this->typeLocation = $typeLocation;

        return $this;
    }

    /**
     * Get typeLocation
     *
     * @return integer 
     */
    public function getTypeLocation()
    {
        return $this->typeLocation;
    }

    /**
     * Set loyerHc
     *
     * @param string $loyerHc
     * @return Biens
     */
    public function setLoyerHc($loyerHc)
    {
        $this->loyerHc = $loyerHc;

        return $this;
    }

    /**
     * Get loyerHc
     *
     * @return string 
     */
    public function getLoyerHc()
    {
        return $this->loyerHc;
    }

    /**
     * Set charge
     *
     * @param string $charge
     * @return Biens
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge
     *
     * @return string 
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set regimeJuridique
     *
     * @param string $regimeJuridique
     * @return Biens
     */
    public function setRegimeJuridique($regimeJuridique)
    {
        $this->regimeJuridique = $regimeJuridique;

        return $this;
    }

    /**
     * Get regimeJuridique
     *
     * @return string 
     */
    public function getRegimeJuridique()
    {
        return $this->regimeJuridique;
    }

    /**
     * Set designationPartie
     *
     * @param string $designationPartie
     * @return Biens
     */
    public function setDesignationPartie($designationPartie)
    {
        $this->designationPartie = $designationPartie;

        return $this;
    }

    /**
     * Get designationPartie
     *
     * @return string 
     */
    public function getDesignationPartie()
    {
        return $this->designationPartie;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Biens
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set proprietaire
     *
     * @param string $proprietaire
     * @return Biens
     */
    public function setProprietaire($proprietaire)
    {
        $this->proprietaire = $proprietaire;

        return $this;
    }

    /**
     * Get proprietaire
     *
     * @return string 
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     * @return Biens
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime 
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     * @return Biens
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime 
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Biens
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }
}
