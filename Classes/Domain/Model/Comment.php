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
 * Comment
 */
class Comment extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Nom de l'auteur
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $author = '';

    /**
     * Contenu
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $content = '';

    /**
     * Note (0-5)
     * 
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $mark = 0;

    /**
     * Date de creation
     * 
     * @var \DateTime
     */
    protected $date = null;

    /**
     * Returns the author
     * 
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     * 
     * @param string $author
     * @return void
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Returns the content
     * 
     * @return string $content
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the content
     * 
     * @param string $content
     * @return void
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * Returns the mark
     * 
     * @return int $mark
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Sets the mark
     * 
     * @param int $mark
     * @return void
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    }

    /**
     * Returns the date
     * 
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     * 
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }
}
