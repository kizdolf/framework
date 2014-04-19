<?php

namespace Smia\WorkBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Sdz\BlogBundle\Entity\Tag;

/**
 * Login
 *
 * @ORM\Table(name="dk_users")
 * @ORM\Entity(repositoryClass="Smia\WorkBundle\Entity\LoginRepository")
 */
class Login
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
     * @ORM\Column(name="mail", type="string", length=255, unique=true)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="text", length=512)
     */
    private $passwd;

    /**
     * @var string
     *
     * @ORM\Column(name="pic", type="text")
     */
    private $pic;

    /**
     * @var string
     *
     * @ORM\Column(name="achievments", type="text")
     */
    private $achievments;

    /**
     * @var boolean
     * 
     * @ORM\Column(name="from42", type="boolean")
     */
     private $from42;

    public function __construct()
    {
        $this->achievments = serialize(array(array('points' => 42, 'text' => "You created a new account! this is nothing but AMAZING!")));
        $this->pic = base64_encode("http://www.42.fr/wp-content/themes/42/img/logo42-site.gif");
        $this->from42 = false;
    }

    /**
     * Set from42
     *
     * 
     * @return boolean
     */
    public function setFrom42()
    {
        if (strpos($this->mail, "student.42.fr") !== false)
            $this->from42 = true;
        else
            $this->from42 = false;
        return $this->from42;
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

    /**
     * Set mail
     *
     * @param string $mail
     * @return Login
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Login
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set passwd
     *
     * @param string $passwd
     * @return Login
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;

        return $this;
    }

    /**
     * Get passwd
     *
     * @return string 
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * Set pic
     *
     * @param string $pic
     * @return Login
     */
    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }

    /**
     * Get pic
     *
     * @return string 
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * Set achievments
     *
     * @param string $achievments
     * @return Login
     */
    public function setAchievments($achievments)
    {
        $this->achievments = $achievments;

        return $this;
    }

    /**
     * Get achievments
     *
     * @return string 
     */
    public function getAchievments()
    {
        return $this->achievments;
    }

    /**
     * Get from42
     *
     * @return boolean 
     */
    public function getFrom42()
    {
        return $this->from42;
    }
}
