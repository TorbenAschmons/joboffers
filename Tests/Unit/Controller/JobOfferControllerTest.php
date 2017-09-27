<?php
namespace TorbenAschmons\Joboffers\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Torben Aschmons <t3dev-YYYY@aschmons.de>
 */
class JobOfferControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \TorbenAschmons\Joboffers\Controller\JobOfferController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\TorbenAschmons\Joboffers\Controller\JobOfferController::class)
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
    public function listActionFetchesAllJobOffersFromRepositoryAndAssignsThemToView()
    {

        $allJobOffers = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $jobOfferRepository = $this->getMockBuilder(\TorbenAschmons\Joboffers\Domain\Repository\JobOfferRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $jobOfferRepository->expects(self::once())->method('findAll')->will(self::returnValue($allJobOffers));
        $this->inject($this->subject, 'jobOfferRepository', $jobOfferRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('jobOffers', $allJobOffers);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
