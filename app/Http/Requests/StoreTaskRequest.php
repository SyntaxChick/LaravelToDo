<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class StoreTaskRequest extends FormRequest
{
    
    protected $redirect = '/task/create';
    
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:1000',
            'description' => 'nullable',
            'status' => 'required|integer',
            'assigned' => 'required|integer'
        ];
    }
    
}
