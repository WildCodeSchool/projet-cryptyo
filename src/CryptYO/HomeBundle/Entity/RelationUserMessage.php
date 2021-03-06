<?php

namespace CryptYO\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelationUserMessage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CryptYO\HomeBundle\Entity\RelationUserMessageRepository")
 */
class RelationUserMessage
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
     * @var integer
     *
     * @ORM\Column(name="id_destinataire", type="integer")
     */
    private $idDestinataire;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_message", type="integer")
     */
    private $idMessage;


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
     * Set idDestinataire
     *
     * @param integer $idDestinataire
     *
     * @return RelationUserMessage
     */
    public function setIdDestinataire($idDestinataire)
    {
        $this->idDestinataire = $idDestinataire;

        return $this;
    }

    /**
     * Get idDestinataire
     *
     * @return integer
     */
    public function getIdDestinataire()
    {
        return $this->idDestinataire;
    }

    /**
     * Set idMessage
     *
     * @param integer $idMessage
     *
     * @return RelationUserMessage
     */
    public function setIdMessage($idMessage)
    {
        $this->idMessage = $idMessage;

        return $this;
    }

    /**
     * Get idMessage
     *
     * @return integer
     */
    public function getIdMessage()
    {
        return $this->idMessage;
    }
}

