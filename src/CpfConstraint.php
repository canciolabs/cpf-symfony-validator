<?php

namespace CancioLabs\Validator\Cpf;

use Attribute;
use Symfony\Component\Validator\Constraint;

#[Attribute]
class CpfConstraint extends Constraint
{

    public string $message = 'The CPF is invalid.';

    public function __construct(?string $message = null, ?array $groups = null, $payload = null)
    {
        parent::__construct([], $groups, $payload);

        $this->message = $message ?? $this->message;
    }

    public function validatedBy(): string
    {
        return CpfValidator::class;
    }

}