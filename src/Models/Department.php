<?php

namespace Models;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Department
 * @package Models
 *
 * @Entity @Table(name="departments")
 */
class Department
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id;

    /**
     * @Column(type="string")
     */
    protected $title;

    /**
     * @OneToMany(targetEntity="Person", mappedBy="department")
     */
    protected $persons;

    public function __construct()
    {
        $this->persons=new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function addPerson($person)
    {
        $this->persons[]=$person;
    }

    /**
     * @return ArrayCollection
     */
    public function getPersons()
    {
        return $this->persons;
    }
}