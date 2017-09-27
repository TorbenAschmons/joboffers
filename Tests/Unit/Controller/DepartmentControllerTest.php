<?php
namespace TorbenAschmons\Joboffers\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Torben Aschmons <t3dev-YYYY@aschmons.de>
 */
class DepartmentControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \TorbenAschmons\Joboffers\Controller\DepartmentController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\TorbenAschmons\Joboffers\Controller\DepartmentController::class)
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
    public function listActionFetchesAllDepartmentsFromRepositoryAndAssignsThemToView()
    {

        $allDepartments = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $departmentRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $departmentRepository->expects(self::once())->method('findAll')->will(self::returnValue($allDepartments));
        $this->inject($this->subject, 'departmentRepository', $departmentRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('departments', $allDepartments);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
