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
class TagsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PhoSTO\StowebPhoto\Domain\Model\Tags
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \PhoSTO\StowebPhoto\Domain\Model\Tags();
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
    public function getColorReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getColor()
        );
    }

    /**
     * @test
     */
    public function setColorForIntSetsColor()
    {
        $this->subject->setColor(12);

        self::assertAttributeEquals(
            12,
            'color',
            $this->subject
        );
    }
}
