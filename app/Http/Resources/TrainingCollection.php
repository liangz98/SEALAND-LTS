<?php

namespace App\Http\Resources;

use App\Models\Training;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TrainingCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        $q = $request->get('q');
    
        return Training::where('number', 'like', "%$q%")->paginate(null, ['id', 'name as text']);
    }
}
