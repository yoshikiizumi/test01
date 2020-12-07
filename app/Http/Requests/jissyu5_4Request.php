<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class jissyu5_4Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'jissyu12/create') {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:20',
            'mail' => 'required|email',
            'age' => 'required|integer|max:130',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力して下さい。',
            'name.max' => '名前は20文字以内で入力して下さい。',
            'mail.required' => 'メールアドレスは必ず入力して下さい。',
            'mail.email' => 'メールアドレスの形式で入力して下さい。',
            'age.required' => '年齢は必ず入力して下さい。',
            'age.max' => '正しい年齢を入力して下さい。',
            'age.integer' => '整数で入力して下さい。',
        ];
    }


}
