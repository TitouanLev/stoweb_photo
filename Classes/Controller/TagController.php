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
 * TagController
 */
class TagController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * tagRepository
     * 
     * @var \PhoSTO\StowebPhoto\Domain\Repository\TagRepository
     */
    protected $tagRepository = null;

    /**
     * @param \PhoSTO\StowebPhoto\Domain\Repository\TagRepository $tagRepository
     */
    public function injectTagRepository(\PhoSTO\StowebPhoto\Domain\Repository\TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $tags = $this->tagRepository->findAll();
        $this->view->assign('tags', $tags);
    }

    /**
     * action show
     * 
     * @param \PhoSTO\StowebPhoto\Domain\Model\Tag $tag
     * @return void
     */
    public function showAction(\PhoSTO\StowebPhoto\Domain\Model\Tag $tag)
    {
        $this->view->assign('tag', $tag);
    }
}
