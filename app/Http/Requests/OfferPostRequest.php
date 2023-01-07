<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferPostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:1', 'max:255'],
			'offer_id' => ['required', 'unique:offers,offer_id'],
			'image' => ['required'],
			'status' => ['required'],
			'offer_type' => ['required']
        ];
    }

	/**
	 * Get the error messages for the defined validation rules.
	 *
	 * @return array
	 */
	public function messages()
	{
		return [
			'name.required' => 'Не указано название!',
			'offer_id.required' => 'Не указан ид оффера!',
			'image.required' => 'Не указано изображение!',
			'status.required' => 'Не указан статус!',
			'offer_type.required' => 'Не указан тип!',
		];
	}
}
