<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GradeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = "grade";

    public function toArray($request)
    {
        return [
            'student' => new StudentResource($this->resource->student),
            'exam' => new ExamResource($this->resource->exam),
            'mark' => $this->resource->mark
        ];
    }
}
