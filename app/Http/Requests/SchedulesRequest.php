<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchedulesRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'start_lesson' => ['string', 'max:255', 'required'],
            'end_lesson' => ['string','required'],
            'science_name' => ['string', 'max:255', 'required'],
            'room' => ['string','required'],
            'science_type' => ['string','required'],
            'teacher' => ['string','required'],
        ];
    }
}
