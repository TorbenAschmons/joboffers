<?php
namespace TorbenAschmons\Joboffers\Controller;

/***
 *
 * This file is part of the "Job Offers" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Torben Aschmons <t3dev-YYYY@aschmons.de>, www.aschmons.de
 *
 ***/

/**
 * JobOfferController
 */
class JobOfferController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * jobOfferRepository
     *
     * @var \TorbenAschmons\Joboffers\Domain\Repository\JobOfferRepository
     * @inject
     */
    protected $jobOfferRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
		$jobOffers = $this->jobOfferRepository->findAll();
		$this->view->assign('jobOffers', $jobOffers);


		$jobLocations = $this->jobOfferRepository->findGroupedLocation();
		$this->view->assign('jobLocations', $jobLocations);


		$jobDepartments = $this->jobOfferRepository->findGroupedDepartment();
		$this->view->assign('jobDepartments', $jobDepartments);
    }
}
