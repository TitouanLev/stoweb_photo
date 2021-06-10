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
class CommentControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \PhoSTO\StowebPhoto\Controller\CommentController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\PhoSTO\StowebPhoto\Controller\CommentController::class)
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
    public function listActionFetchesAllCommentsFromRepositoryAndAssignsThemToView()
    {

        $allComments = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $commentRepository = $this->getMockBuilder(\PhoSTO\StowebPhoto\Domain\Repository\CommentRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $commentRepository->expects(self::once())->method('findAll')->will(self::returnValue($allComments));
        $this->inject($this->subject, 'commentRepository', $commentRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('comments', $allComments);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenCommentToCommentRepository()
    {
        $comment = new \PhoSTO\StowebPhoto\Domain\Model\Comment();

        $commentRepository = $this->getMockBuilder(\PhoSTO\StowebPhoto\Domain\Repository\CommentRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $commentRepository->expects(self::once())->method('add')->with($comment);
        $this->inject($this->subject, 'commentRepository', $commentRepository);

        $this->subject->createAction($comment);
    }
}
