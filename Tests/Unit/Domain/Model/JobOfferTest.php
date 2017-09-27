<?php
namespace TorbenAschmons\Joboffers\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Torben Aschmons <t3dev-YYYY@aschmons.de>
 */
class JobOfferTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \TorbenAschmons\Joboffers\Domain\Model\JobOffer
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \TorbenAschmons\Joboffers\Domain\Model\JobOffer();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );

    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDeactivatedReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getDeactivated()
        );

    }

    /**
     * @test
     */
    public function setDeactivatedForBoolSetsDeactivated()
    {
        $this->subject->setDeactivated(true);

        self::assertAttributeEquals(
            true,
            'deactivated',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );

    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );

    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTasksReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTasks()
        );

    }

    /**
     * @test
     */
    public function setTasksForStringSetsTasks()
    {
        $this->subject->setTasks('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'tasks',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getProfileReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProfile()
        );

    }

    /**
     * @test
     */
    public function setProfileForStringSetsProfile()
    {
        $this->subject->setProfile('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'profile',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDownloadsReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getDownloads()
        );

    }

    /**
     * @test
     */
    public function setDownloadsForFileReferenceSetsDownloads()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setDownloads($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'downloads',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getLocationReturnsInitialValueForLocation()
    {
        self::assertEquals(
            null,
            $this->subject->getLocation()
        );

    }

    /**
     * @test
     */
    public function setLocationForLocationSetsLocation()
    {
        $locationFixture = new \TorbenAschmons\Joboffers\Domain\Model\Location();
        $this->subject->setLocation($locationFixture);

        self::assertAttributeEquals(
            $locationFixture,
            'location',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDepartmentReturnsInitialValueForDepartment()
    {
        self::assertEquals(
            null,
            $this->subject->getDepartment()
        );

    }

    /**
     * @test
     */
    public function setDepartmentForDepartmentSetsDepartment()
    {
        $departmentFixture = new \TorbenAschmons\Joboffers\Domain\Model\Department();
        $this->subject->setDepartment($departmentFixture);

        self::assertAttributeEquals(
            $departmentFixture,
            'department',
            $this->subject
        );

    }
}
