<?php

namespace App\Http\Resources\Friend;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class suggestionResource extends JsonResource {

    public function toArray(Request $request): array {
        return [
            'status' => 'success',
            'data' => [
                'id' => $this -> id,
                'name' => $this -> name,
                'email' => $this -> email
            ]
        ];
    }

}
