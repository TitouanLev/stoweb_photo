<?php
namespace PhoSTO\StowebPhoto\Controller;


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
 * CommentController
 */
class CommentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * commentRepository
     * 
     * @var \PhoSTO\StowebPhoto\Domain\Repository\CommentRepository
     */
    protected $commentRepository = null;

    /**
     * @param \PhoSTO\StowebPhoto\Domain\Repository\CommentRepository $commentRepository
     */
    public function injectCommentRepository(\PhoSTO\StowebPhoto\Domain\Repository\CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $comments = $this->commentRepository->findAll();
        $this->view->assign('comments', $comments);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \PhoSTO\StowebPhoto\Domain\Model\Comment $newComment
     * @return void
     */
    public function createAction(\PhoSTO\StowebPhoto\Domain\Model\Comment $newComment)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->commentRepository->add($newComment);
        $this->redirect('list');
    }
}
