<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticle extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $article = $this->route()->parameter('article');
        $id = $article->id ?? null;
        // var_dump($id);
        $this->session()->flash('error', json_encode($article));
        return [
            'name' => 'required|unique:articles,name,' . $id,
            'body' => 'required|min:10'
            //
        ];
    }
}
