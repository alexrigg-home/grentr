<?php

namespace AppBundle\Entity;

/**
 * Email
 */
class Email
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $friendsname;

    /**
     * @var string
     */
    private $friendsemail;

    /**
     * @var \DateTime
     */
    private $createddate = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Email
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set friendsname
     *
     * @param string $friendsname
     *
     * @return Email
     */
    public function setFriendsname($friendsname)
    {
        $this->friendsname = $friendsname;

        return $this;
    }

    /**
     * Get friendsname
     *
     * @return string
     */
    public function getFriendsname()
    {
        return $this->friendsname;
    }

    /**
     * Set friendsemail
     *
     * @param string $friendsemail
     *
     * @return Email
     */
    public function setFriendsemail($friendsemail)
    {
        $this->friendsemail = $friendsemail;

        return $this;
    }

    /**
     * Get friendsemail
     *
     * @return string
     */
    public function getFriendsemail()
    {
        return $this->friendsemail;
    }

    /**
     * Set createddate
     *
     * @param \DateTime $createddate
     *
     * @return Email
     */
    public function setCreateddate($createddate)
    {
        $this->createddate = $createddate;

        return $this;
    }

    /**
     * Get createddate
     *
     * @return \DateTime
     */
    public function getCreateddate()
    {
        return $this->createddate;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

