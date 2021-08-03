<?php

namespace App\Http\Requests\Api\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'author_id'   => 'sometimes|required',
            'category_id' => 'sometimes|required',
            'title'       => 'sometimes|required',
            'content'     => 'sometimes|required',
            'slug'        => 'sometimes|required',
            'hero'        => 'sometimes|required',
        ];
    }
}
