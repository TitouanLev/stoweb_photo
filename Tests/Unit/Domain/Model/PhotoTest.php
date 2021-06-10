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
}
