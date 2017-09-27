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
 * DepartmentController
 */
class DepartmentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $departments = $this->departmentRepository->findAll();
        $this->view->assign('departments', $departments);
    }
}
