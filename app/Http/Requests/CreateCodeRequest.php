<?php

namespace App\Http\Requests;

use App\Domain\Enums\Accesses\Accesses;
use App\Domain\Enums\Activities\Activities;
use App\Domain\Enums\Languages\Languages;
use App\Models\Activity;
use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class CreateCodeRequest extends FormRequest
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
            'title' => 'bail|required|max:255',
            'paste' => 'required',
            'language' => [new Enum(Languages::class)],
            'activity' => [new Enum(Activities::class)],
            'access' => [new Enum(Accesses::class)],
        ];

    }




}
