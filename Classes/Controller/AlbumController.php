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
 * AlbumController
 */
class AlbumController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * albumRepository
     * 
     * @var \PhoSTO\StowebPhoto\Domain\Repository\AlbumRepository
     */
    protected $albumRepository = null;

    /**
     * @param \PhoSTO\StowebPhoto\Domain\Repository\AlbumRepository $albumRepository
     */
    public function injectAlbumRepository(\PhoSTO\StowebPhoto\Domain\Repository\AlbumRepository $albumRepository)
    {
        $this->albumRepository = $albumRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $albums = $this->albumRepository->findAll();
        $this->view->assign('albums', $albums);
    }

    /**
     * action show
     * 
     * @param \PhoSTO\StowebPhoto\Domain\Model\Album $album
     * @return void
     */
    public function showAction(\PhoSTO\StowebPhoto\Domain\Model\Album $album)
    {
        $this->view->assign('album', $album);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {
    }
}
