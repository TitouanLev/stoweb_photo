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
 * Photo jolie
 */
class Photo extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * Titre
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * Description
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Photo file
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $file = null;

    /**
     * Date
     * 
     * @var \DateTime
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $shootingDate = null;

    /**
     * Auteur
     * 
     * @var string
     */
    protected $author = '';

    /**
     * Lieu
     * 
     * @var string
     */
    protected $place = '';

    /**
     * Sujet
     * 
     * @var string
     */
    protected $subject = '';

    /**
     * Tags
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhoSTO\StowebPhoto\Domain\Model\Tags>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $tags = null;

    /**
     * Photos
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhoSTO\StowebPhoto\Domain\Model\Album>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $photos = null;

    /**
     * Commentaires
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhoSTO\StowebPhoto\Domain\Model\Comment>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $comments = null;

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
     * Returns the file
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $file
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets the file
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $file
     * @return void
     */
    public function setFile(\TYPO3\CMS\Extbase\Domain\Model\FileReference $file)
    {
        $this->file = $file;
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
     * Returns the place
     * 
     * @return string $place
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Sets the place
     * 
     * @param string $place
     * @return void
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * Returns the subject
     * 
     * @return string $subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Sets the subject
     * 
     * @param string $subject
     * @return void
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->photos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->comments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Tags
     * 
     * @param \PhoSTO\StowebPhoto\Domain\Model\Tags $tag
     * @return void
     */
    public function addTag(\PhoSTO\StowebPhoto\Domain\Model\Tags $tag)
    {
        $this->tags->attach($tag);
    }

    /**
     * Removes a Tags
     * 
     * @param \PhoSTO\StowebPhoto\Domain\Model\Tags $tagToRemove The Tags to be removed
     * @return void
     */
    public function removeTag(\PhoSTO\StowebPhoto\Domain\Model\Tags $tagToRemove)
    {
        $this->tags->detach($tagToRemove);
    }

    /**
     * Returns the tags
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhoSTO\StowebPhoto\Domain\Model\Tags> $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets the tags
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhoSTO\StowebPhoto\Domain\Model\Tags> $tags
     * @return void
     */
    public function setTags(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags)
    {
        $this->tags = $tags;
    }

    /**
     * Adds a Album
     * 
     * @param \PhoSTO\StowebPhoto\Domain\Model\Album $photo
     * @return void
     */
    public function addPhoto(\PhoSTO\StowebPhoto\Domain\Model\Album $photo)
    {
        $this->photos->attach($photo);
    }

    /**
     * Removes a Album
     * 
     * @param \PhoSTO\StowebPhoto\Domain\Model\Album $photoToRemove The Album to be removed
     * @return void
     */
    public function removePhoto(\PhoSTO\StowebPhoto\Domain\Model\Album $photoToRemove)
    {
        $this->photos->detach($photoToRemove);
    }

    /**
     * Returns the photos
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhoSTO\StowebPhoto\Domain\Model\Album> $photos
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Sets the photos
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhoSTO\StowebPhoto\Domain\Model\Album> $photos
     * @return void
     */
    public function setPhotos(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $photos)
    {
        $this->photos = $photos;
    }

    /**
     * Adds a Comment
     * 
     * @param \PhoSTO\StowebPhoto\Domain\Model\Comment $comment
     * @return void
     */
    public function addComment(\PhoSTO\StowebPhoto\Domain\Model\Comment $comment)
    {
        $this->comments->attach($comment);
    }

    /**
     * Removes a Comment
     * 
     * @param \PhoSTO\StowebPhoto\Domain\Model\Comment $commentToRemove The Comment to be removed
     * @return void
     */
    public function removeComment(\PhoSTO\StowebPhoto\Domain\Model\Comment $commentToRemove)
    {
        $this->comments->detach($commentToRemove);
    }

    /**
     * Returns the comments
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhoSTO\StowebPhoto\Domain\Model\Comment> $comments
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets the comments
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\PhoSTO\StowebPhoto\Domain\Model\Comment> $comments
     * @return void
     */
    public function setComments(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $comments)
    {
        $this->comments = $comments;
    }
}
