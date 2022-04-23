<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFruitRequest extends FormRequest
{
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        //$comment = Comment::find($this->route('comment'));
        //return $comment && $this->user()->can('update', $comment);

        //If you plan to handle authorization logic for the request in another part of your application, you may simply return true from the authorize method:

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
            'name' => ['required', "max:50"],
            'weight'  => ['required']
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    /*public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'body.required' => 'A message is required',
        ];
    }*/

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    /*public function attributes()
    {
        return [
            'email' => 'email address',
        ];
    }*/

    //use Illuminate\Support\Str;
    // for sanitizing inputs
    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    /*protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->slug),
        ]);
    }*/
}
