<?php
namespace Volleyball\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Volleyball\Bundle\UserBundle\Validator\Constraints\UniqueEntity;

use Volleyball\Bundle\UserBundle\Entity\User;

/**
 * @ORM\Entity(repositoryClass="Volleyball\Bundle\UserBundle\Repository\AdminRepository")
 * @ORM\Table(name="admin")
 * @UniqueEntity(fields = "username", targetClass = "Volleyball\Bundle\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Volleyball\Bundle\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Admin extends User
{
}
