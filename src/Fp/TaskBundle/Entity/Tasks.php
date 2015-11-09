<?php

namespace Fp\TaskBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tasks
 *
 * @ORM\Table(name="Task_new")
 * @ORM\Entity(repositoryClass="Fp\TaskBundle\Entity\TasksRepository")
 */
class Tasks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="task_name", type="string", length=255)
     */
    private $taskName;

    /**
     * @var string
     *
     * @ORM\Column(name="task_description", type="string", length=255)
     */
    private $taskDescription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="task_run", type="datetime")
     */
    private $taskRun;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="task_end", type="datetime")
     */
    private $taskEnd;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set taskName
     *
     * @param string $taskName
     *
     * @return Tasks
     */
    public function setTaskName($taskName)
    {
        $this->taskName = $taskName;

        return $this;
    }

    /**
     * Get taskName
     *
     * @return string
     */
    public function getTaskName()
    {
        return $this->taskName;
    }

    /**
     * Set taskDescription
     *
     * @param string $taskDescription
     *
     * @return Tasks
     */
    public function setTaskDescription($taskDescription)
    {
        $this->taskDescription = $taskDescription;

        return $this;
    }

    /**
     * Get taskDescription
     *
     * @return string
     */
    public function getTaskDescription()
    {
        return $this->taskDescription;
    }

    /**
     * Set taskRun
     *
     * @param \DateTime $taskRun
     *
     * @return Tasks
     */
    public function setTaskRun($taskRun)
    {
        $this->taskRun = $taskRun;

        return $this;
    }

    /**
     * Get taskRun
     *
     * @return \DateTime
     */
    public function getTaskRun()
    {
        return $this->taskRun;
    }

    /**
     * Set taskEnd
     *
     * @param \DateTime $taskEnd
     *
     * @return Tasks
     */
    public function setTaskEnd($taskEnd)
    {
        $this->taskEnd = $taskEnd;

        return $this;
    }

    /**
     * Get taskEnd
     *
     * @return \DateTime
     */
    public function getTaskEnd()
    {
        return $this->taskEnd;
    }
}

