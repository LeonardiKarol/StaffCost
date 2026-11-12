<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
       return $this->user()->can('update', $this->route('employees'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'birth_date' => ['required',Rule::date()->before('-16 years')],
            'tax_code' =>['required','size:16' ,'regex:/^[A-Z]{6}[0-9]{2}[A-Z]{1}[0-9]{2}[A-Z]{1}[0-9]{3}[A-Z]{1}$/',Rule::unique('employees','tax_code')->ignore($this->route('employee'))]
        ];
    }
    public function messages(): array
    {
        return [
            'first_name.required' => 'Il nome del prodotto è obbligatorio.',
            'first_name.max' => 'nome troppo lungo, massimo 100 caratteri',
            'last_name.required' => 'Il cognome del dipendente è obbligatorio.',
            'last_name.max' => 'cognome troppo lungo, massimo 100 caratteri',
            'birth_date.required' => 'la data di nascita è obbligatorio.',
            'birth_date.before' => 'il dipendente deve avere minimo 16 anni.',
            'tax_code.required' => 'il codice fiscale è obbligatorio.',
            'tax_code.size' => 'il codice fiscale deve avere 16 caratteri.',
            'tax_code.regex' => 'il codice fiscale deve avere un formato seguente: 6 caratteri, 2 numeri, 1 lettera, 2 numeri, 1 lettera, 3 numeri, 1 lettera.',
        ];
    }
}
