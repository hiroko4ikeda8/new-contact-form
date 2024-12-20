<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last_name' => 'required|string|max:50',
            'first_name' => 'required|string|max:50',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email',
            'tel' => 'required|digits_between:1,5',
            'address' => 'required|string|max:255',
            'inquiry_type' =>
            'required|in:ProductDelivery,ProductReplacement,ProductTrouble,other',
            'content' => 'required|string|max:120',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '性を入力してください',
            'first_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.digits_between' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'inquiry_type.required' => 'お問い合わせの種類を入力してください',
            'content.required' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
