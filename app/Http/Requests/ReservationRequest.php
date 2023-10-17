<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'numero' => 'required|integer',
            'id_reservation' => 'required|integer',
            'date_reservation' => 'required|date',
            'place_reservation' => 'required|integer',
            'prix' => 'required|integer',
            'salle_id' => 'required|integer'
        ];
    }
}
