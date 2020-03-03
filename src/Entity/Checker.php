<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */


class Checker
{

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function checkSesh()
    {
        if (isset($_POST['name'])) {
            $_SESSION['name'] = $_POST['name'];
        }
        elseif (isset($_SESSION['name'])) {
            $this->name = $_SESSION['naùe'];
        }
        else {
            $this->name = 'stranger';
        }
    }
}
