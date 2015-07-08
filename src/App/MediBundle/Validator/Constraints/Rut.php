<?php
namespace App\MediBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * @Annotation
 */
class Rut extends Constraint
{
    public $message = 'El formato debe ser de la cadena %string% debe ser esta manera: 1111111-1';
}

class RutValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if (!preg_match('/^([0-9])+\-([kK0-9])+$/', $value)) {
            $this->context->addViolation($constraint->message, array('%string%' => $value));
        }
    }
}
