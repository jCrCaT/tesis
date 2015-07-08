<?php
namespace App\MediBundle\Services;

use Doctrine\ORM\EntityManager;

class Encoder
{
    protected $em;
    
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }
    
    public function EncodeItem($propiedades)
    {
        $factory = $this->get('security.encoder_factory');
        $encoder = $factory->getEncoder($user);
        $password = $encoder->encodePassword('ryanpass', $user->getSalt());
        $user->setPassword($password);
    }        
}
