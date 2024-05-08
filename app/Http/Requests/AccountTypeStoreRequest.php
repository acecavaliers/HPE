<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountTypeStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            // 'name'=>'required|max:255|unique:vendors,vName',
            // 'description'=>'required','string','max:255',
            // 'vendor_id'=>'required|exists:vendors,id',
            // 'qty'=>'required',
            // 'price'=>'required',
        ];
    }
}
