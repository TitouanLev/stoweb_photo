<?php
namespace PhoSTO\StowebPhoto\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Titouan LEVET <lev.titouan@gmail.com>
 * @author Matthias CATHELINEAU <mat.cathelineau@gmail.com>
 * @author Frédéric ALLEGRET <frederic.allegret@hotmail.fr>
 * @author Valerian LAFFERAYRIE <lafferayrie.val@gmail.com>
 * @author Thomas CHABROL <thomas.chabrol3@gmail.com>
 */
class PhotoTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PhoSTO\StowebPhoto\Domain\Model\Photo
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PhoSTO\StowebPhoto\Domain\Model\Photo();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFileReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getFile()
        );
    }

    /**
     * @test
     */
    public function setFileForFileReferenceSetsFile()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setFile($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'file',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getShootingDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getShootingDate()
        );
    }

    /**
     * @test
     */
    public function setShootingDateForDateTimeSetsShootingDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setShootingDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'shootingDate',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAuthorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAuthor()
        );
    }

    /**
     * @test
     */
    public function setAuthorForStringSetsAuthor()
    {
        $this->subject->setAuthor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'author',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPlaceReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPlace()
        );
    }

    /**
     * @test
     */
    public function setPlaceForStringSetsPlace()
    {
        $this->subject->setPlace('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'place',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSubjectReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubject()
        );
    }

    /**
     * @test
     */
    public function setSubjectForStringSetsSubject()
    {
        $this->subject->setSubject('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subject',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTagsReturnsInitialValueForTags()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTags()
        );
    }

    /**
     * @test
     */
    public function setTagsForObjectStorageContainingTagsSetsTags()
    {
        $tag = new \PhoSTO\StowebPhoto\Domain\Model\Tags();
        $objectStorageHoldingExactlyOneTags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTags->attach($tag);
        $this->subject->setTags($objectStorageHoldingExactlyOneTags);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTags,
            'tags',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTagToObjectStorageHoldingTags()
    {
        $tag = new \PhoSTO\StowebPhoto\Domain\Model\Tags();
        $tagsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tagsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($tag));
        $this->inject($this->subject, 'tags', $tagsObjectStorageMock);

        $this->subject->addTag($tag);
    }

    /**
     * @test
     */
    public function removeTagFromObjectStorageHoldingTags()
    {
        $tag = new \PhoSTO\StowebPhoto\Domain\Model\Tags();
        $tagsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tagsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($tag));
        $this->inject($this->subject, 'tags', $tagsObjectStorageMock);

        $this->subject->removeTag($tag);
    }

    /**
     * @test
     */
    public function getPhotosReturnsInitialValueForAlbum()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPhotos()
        );
    }

    /**
     * @test
     */
    public function setPhotosForObjectStorageContainingAlbumSetsPhotos()
    {
        $photo = new \PhoSTO\StowebPhoto\Domain\Model\Album();
        $objectStorageHoldingExactlyOnePhotos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePhotos->attach($photo);
        $this->subject->setPhotos($objectStorageHoldingExactlyOnePhotos);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePhotos,
            'photos',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addPhotoToObjectStorageHoldingPhotos()
    {
        $photo = new \PhoSTO\StowebPhoto\Domain\Model\Album();
        $photosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $photosObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($photo));
        $this->inject($this->subject, 'photos', $photosObjectStorageMock);

        $this->subject->addPhoto($photo);
    }

    /**
     * @test
     */
    public function removePhotoFromObjectStorageHoldingPhotos()
    {
        $photo = new \PhoSTO\StowebPhoto\Domain\Model\Album();
        $photosObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $photosObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($photo));
        $this->inject($this->subject, 'photos', $photosObjectStorageMock);

        $this->subject->removePhoto($photo);
    }

    /**
     * @test
     */
    public function getCommentsReturnsInitialValueForComment()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getComments()
        );
    }

    /**
     * @test
     */
    public function setCommentsForObjectStorageContainingCommentSetsComments()
    {
        $comment = new \PhoSTO\StowebPhoto\Domain\Model\Comment();
        $objectStorageHoldingExactlyOneComments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneComments->attach($comment);
        $this->subject->setComments($objectStorageHoldingExactlyOneComments);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneComments,
            'comments',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCommentToObjectStorageHoldingComments()
    {
        $comment = new \PhoSTO\StowebPhoto\Domain\Model\Comment();
        $commentsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $commentsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($comment));
        $this->inject($this->subject, 'comments', $commentsObjectStorageMock);

        $this->subject->addComment($comment);
    }

    /**
     * @test
     */
    public function removeCommentFromObjectStorageHoldingComments()
    {
        $comment = new \PhoSTO\StowebPhoto\Domain\Model\Comment();
        $commentsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $commentsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($comment));
        $this->inject($this->subject, 'comments', $commentsObjectStorageMock);

        $this->subject->removeComment($comment);
    }
}
