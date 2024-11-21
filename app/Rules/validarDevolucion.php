<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class validarDevolucion implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }
    public function passes($attribute, $value)
    {
        // Valida que el motivo no contenga caracteres ofensivos
        return !str_contains($value, ['invalido', 'error']);
    }

    public function message()
    {
        return 'El :attribute contiene términos no permitidos.';
    }
}
