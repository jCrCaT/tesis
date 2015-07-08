<?php
namespace App\MediBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * @Annotation
 */
class Fecha extends Constraint
{
    public $message = 'La fecha no puede ser anterior a la fecha actual';
}

class FechaValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if ($value < getdate()) {
            $this->context->addViolation($constraint->message, array('%string%' => $value));
        }
    }
}
