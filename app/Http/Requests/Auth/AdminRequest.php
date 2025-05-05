<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\password;

class AdminRequest extends FormRequest
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
            'name' => 'required|min:4|max:50|string|exists:users,name',
            'password' => [
                'required',
                'min:8',
                'max:50',
                'string',
                function ($attribute, $value, $fail) {
                    $user = User::where('name', $this->name)->first();
            
                    if ($user && !Hash::check($value, $user->password)) {
                        $fail('The selected password is invalid.');
                    }
                }
            ]
        ];
    }
}
