# CPF Symfony Validator

A custom Symfony Validator that validates CPF.

## Requirements

- PHP >= 8.0
- intl extension

## Installation

    composer require cancio-labs/cpf-symfony-validator

## How to use it

Add the CpfConstraint in your entity...

    use CancioLabs\Validator\Cpf\CpfConstraint;

    #[CpfConstraint]
    private ?Cpf $cpf = null;

or add it to a constraint list:

    use CancioLabs\Validator\Cpf\CpfConstraint;    

    $formBuilder->add('cpf', TextType::class, [
        'constraints' => [
            new CpfConstraint(),
        ],
    ]);