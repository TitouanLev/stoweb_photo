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
 * PhotoController
 */
class PhotoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * photoRepository
     * 
     * @var \PhoSTO\StowebPhoto\Domain\Repository\PhotoRepository
     */
    protected $photoRepository = null;

    /**
     * @param \PhoSTO\StowebPhoto\Domain\Repository\PhotoRepository $photoRepository
     */
    public function injectPhotoRepository(\PhoSTO\StowebPhoto\Domain\Repository\PhotoRepository $photoRepository)
    {
        $this->photoRepository = $photoRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $photos = $this->photoRepository->findAll();
        $this->view->assign('photos', $photos);
    }

    /**
     * action show
     * 
     * @param \PhoSTO\StowebPhoto\Domain\Model\Photo $photo
     * @return void
     */
    public function showAction(\PhoSTO\StowebPhoto\Domain\Model\Photo $photo)
    {
        $this->view->assign('photo', $photo);
    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {
    }

    /**
     * action cartography
     * 
     * @return void
     */
    public function cartographyAction()
    {
    }
}
