<?php
namespace PhoSTO\StowebPhoto\Domain\Model;


/***
 *
 * This file is part of the "PhoSTO" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 Titouan LEVET <lev.titouan@gmail.com>, STOWeb
 *           Matthias CATHELINEAU <mat.cathelineau@gmail.com>, STOWeb
 *           Frédéric ALLEGRET <frederic.allegret@hotmail.fr>, STOWeb
 *           Valerian LAFFERAYRIE <lafferayrie.val@gmail.com>, STOWeb
 *           Thomas CHABROL <thomas.chabrol3@gmail.com>, STOWeb
 *
 ***/
/**
 * Album
 */
class Album extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * Description
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $description = '';

    /**
     * Date de prise
     * 
     * @var \DateTime
     */
    protected $shootingDate = null;

    /**
     * Image
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $thumbnail = null;

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the shootingDate
     * 
     * @return \DateTime $shootingDate
     */
    public function getShootingDate()
    {
        return $this->shootingDate;
    }

    /**
     * Sets the shootingDate
     * 
     * @param \DateTime $shootingDate
     * @return void
     */
    public function setShootingDate(\DateTime $shootingDate)
    {
        $this->shootingDate = $shootingDate;
    }

    /**
     * Returns the thumbnail
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Sets the thumbnail
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail
     * @return void
     */
    public function setThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }
}
