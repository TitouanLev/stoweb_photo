<?php
namespace PhoSTO\StowebPhoto\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Titouan LEVET <lev.titouan@gmail.com>
 * @author Matthias CATHELINEAU <mat.cathelineau@gmail.com>
 * @author Frédéric ALLEGRET <frederic.allegret@hotmail.fr>
 * @author Valerian LAFFERAYRIE <lafferayrie.val@gmail.com>
 * @author Thomas CHABROL <thomas.chabrol3@gmail.com>
 */
class AlbumControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PhoSTO\StowebPhoto\Controller\AlbumController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\PhoSTO\StowebPhoto\Controller\AlbumController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllAlbumsFromRepositoryAndAssignsThemToView()
    {

        $allAlbums = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $albumRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $albumRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAlbums));
        $this->inject($this->subject, 'albumRepository', $albumRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('albums', $allAlbums);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAlbumToView()
    {
        $album = new \PhoSTO\StowebPhoto\Domain\Model\Album();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('album', $album);

        $this->subject->showAction($album);
    }
}
