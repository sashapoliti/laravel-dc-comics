<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    protected $errorBag = 'store';
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'series' => 'required|max:100|min:3',
            'thumb' => 'required|max:255|min:3',
            'price' => 'required|max:20|min:3',
            'type' => 'required|max:50|min:3',
        ];
    }

    public function messages()
    {
        return [
            'series.required' => 'Il campo :attribute è obbligatorio',
            'series.min' => 'Il campo :attribute deve avere almeno :min caratteri',
            'series.max' => 'Il campo :attribute deve avere al massimo :max caratteri',
            'thumb.required' => 'Il campo :attribute è obbligatorio',
            'thumb.min' => 'Il campo :attribute deve avere almeno :min caratteri',
            'thumb.max' => 'Il campo :attribute deve avere al massimo :max caratteri',
            'price.required' => 'Il campo :attribute è obbligatorio',
            'price.min' => 'Il campo :attribute deve avere almeno :min caratteri',
            'price.max' => 'Il campo :attribute deve avere al massimo :max caratteri',
            'type.required' => 'Il campo :attribute è obbligatorio',
            'type.min' => 'Il campo :attribute deve avere almeno :min caratteri',
            'type.max' => 'Il campo :attribute deve avere al massimo :max caratteri',
        ];
    }
}
