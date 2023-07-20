<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
            'title' => 'required|min:3',
            'softwarehouse' => 'required|min:5',
            'description' => 'required|max:100|min:20',
            'cover' => 'required|image',
        ];
    }

    public function messages(){
        return [
            'title.required' => "Hai dimenticato di inserire il titolo del videogioco",
            'title.min' => "Il titolo dev'essere di almeno 3 caratteri",
            'softwarehouse.required' => "Hai dimenticato di inserire la software house",
            'softwarehouse.min' => "La software house deve essere minimo di 5 caratteri",
            'description.required' => "Hai dimenticato di inserire la descrizione",
            'description.max' => "La descrizione non può essere lunga più di 100 caratteri",
            'description.min' => "La descrizione non può essere lunga meno di 20 caratteri",
            'cover.required' => "Hai dimenticato di inserire l'immagine",
            'cover.image' => "Puoi inserire solo immagini",
        ];
    }
}
