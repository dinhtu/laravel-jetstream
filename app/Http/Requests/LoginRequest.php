<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8|max:15|regex:/^[A-Za-z0-9]*$/i',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'ユーザー名を入力してください。',
            'email.email' => 'メールアドレス形式が正しくありません。',
            'password.required' => 'パスワードを入力してください。',
            'password.min' => 'パスワードは8文字以上にしてください。',
        ];
    }
}
