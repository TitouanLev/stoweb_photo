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
 * TagsController
 */
class TagsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * tagsRepository
     * 
     * @var \PhoSTO\StowebPhoto\Domain\Repository\TagsRepository
     */
    protected $tagsRepository = null;

    /**
     * @param \PhoSTO\StowebPhoto\Domain\Repository\TagsRepository $tagsRepository
     */
    public function injectTagsRepository(\PhoSTO\StowebPhoto\Domain\Repository\TagsRepository $tagsRepository)
    {
        $this->tagsRepository = $tagsRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $tags = $this->tagsRepository->findAll();
        $this->view->assign('tags', $tags);
    }

    /**
     * action show
     * 
     * @param \PhoSTO\StowebPhoto\Domain\Model\Tags $tags
     * @return void
     */
    public function showAction(\PhoSTO\StowebPhoto\Domain\Model\Tags $tags)
    {
        $this->view->assign('tags', $tags);
    }
}
