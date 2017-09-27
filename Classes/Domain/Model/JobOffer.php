<?php
namespace TorbenAschmons\Joboffers\Domain\Model;

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
 * Description of Job Offer
 */
class JobOffer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * deactivated
     *
     * @var bool
     */
    protected $deactivated = false;

    /**
     * date
     *
     * @var \DateTime
     */
    protected $date = null;

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * tasks
     *
     * @var string
     */
    protected $tasks = '';

    /**
     * profile
     *
     * @var string
     */
    protected $profile = '';

    /**
     * downloads
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $downloads = null;

    /**
     * location
     *
     * @var \TorbenAschmons\Joboffers\Domain\Model\Location
     */
    protected $location = null;

    /**
     * department
     *
     * @var \TorbenAschmons\Joboffers\Domain\Model\Department
     */
    protected $department = null;

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the deactivated
     *
     * @return bool $deactivated
     */
    public function getDeactivated()
    {
        return $this->deactivated;
    }

    /**
     * Sets the deactivated
     *
     * @param bool $deactivated
     * @return void
     */
    public function setDeactivated($deactivated)
    {
        $this->deactivated = $deactivated;
    }

    /**
     * Returns the boolean state of deactivated
     *
     * @return bool
     */
    public function isDeactivated()
    {
        return $this->deactivated;
    }

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Returns the tasks
     *
     * @return string $tasks
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Sets the tasks
     *
     * @param string $tasks
     * @return void
     */
    public function setTasks($tasks)
    {
        $this->tasks = $tasks;
    }

    /**
     * Returns the profile
     *
     * @return string $profile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets the profile
     *
     * @param string $profile
     * @return void
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    }

    /**
     * Returns the downloads
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $downloads
     */
    public function getDownloads()
    {
        return $this->downloads;
    }

    /**
     * Sets the downloads
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $downloads
     * @return void
     */
    public function setDownloads(\TYPO3\CMS\Extbase\Domain\Model\FileReference $downloads)
    {
        $this->downloads = $downloads;
    }

    /**
     * Returns the location
     *
     * @return \TorbenAschmons\Joboffers\Domain\Model\Location $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     *
     * @param \TorbenAschmons\Joboffers\Domain\Model\Location $location
     * @return void
     */
    public function setLocation(\TorbenAschmons\Joboffers\Domain\Model\Location $location)
    {
        $this->location = $location;
    }

    /**
     * Returns the department
     *
     * @return \TorbenAschmons\Joboffers\Domain\Model\Department $department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets the department
     *
     * @param \TorbenAschmons\Joboffers\Domain\Model\Department $department
     * @return void
     */
    public function setDepartment(\TorbenAschmons\Joboffers\Domain\Model\Department $department)
    {
        $this->department = $department;
    }
}
