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
class PhotoControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PhoSTO\StowebPhoto\Controller\PhotoController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\PhoSTO\StowebPhoto\Controller\PhotoController::class)
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
    public function listActionFetchesAllPhotosFromRepositoryAndAssignsThemToView()
    {

        $allPhotos = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $photoRepository = $this->getMockBuilder(\PhoSTO\StowebPhoto\Domain\Repository\PhotoRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $photoRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPhotos));
        $this->inject($this->subject, 'photoRepository', $photoRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('photos', $allPhotos);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenPhotoToView()
    {
        $photo = new \PhoSTO\StowebPhoto\Domain\Model\Photo();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('photo', $photo);

        $this->subject->showAction($photo);
    }
}
