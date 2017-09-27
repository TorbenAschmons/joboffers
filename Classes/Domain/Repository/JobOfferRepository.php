<?php
namespace TorbenAschmons\Joboffers\Domain\Repository;

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
 * The repository for JobOffers
 */
class JobOfferRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = array(
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    );




	public function findGroupedLocation()
	{

		$enableFields = $GLOBALS['TSFE']->sys_page->enableFields('tx_joboffers_domain_model_joboffer');
		$query = $this->createQuery();

		$query->statement('SELECT * FROM tx_joboffers_domain_model_location, tx_joboffers_domain_model_joboffer WHERE tx_joboffers_domain_model_location.uid = tx_joboffers_domain_model_joboffer.location ' . $enableFields . ' GROUP BY tx_joboffers_domain_model_location.title ' );

		return $query->execute();
	}


	public function findGroupedDepartment()
	{

		$enableFields = $GLOBALS['TSFE']->sys_page->enableFields('tx_joboffers_domain_model_joboffer');
		$query = $this->createQuery();

		$query->statement('SELECT * FROM tx_joboffers_domain_model_department, tx_joboffers_domain_model_joboffer WHERE tx_joboffers_domain_model_department.uid = tx_joboffers_domain_model_joboffer.department ' . $enableFields . ' GROUP BY tx_joboffers_domain_model_department.title ' );

		return $query->execute();
	}
}
