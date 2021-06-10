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
 * Tags
 */
class Tags extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Titre
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * Couleur
     * 
     * @var int
     */
    protected $color = 0;

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
     * Returns the color
     * 
     * @return int $color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets the color
     * 
     * @param int $color
     * @return void
     */
    public function setColor($color)
    {
        $this->color = $color;
    }
}
