<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SearchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'repos_name' => $this->repos_name,
            'autor_name' => $this->autor_name,
            'stargazers_count'=> $this->stargazers_count,
            'watched_count' => $this->watched_count,
            'html_url' => $this->html_url
        ];
    }
}
