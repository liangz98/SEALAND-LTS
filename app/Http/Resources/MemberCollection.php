<?php

namespace App\Http\Resources;

use App\Models\Member;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MemberCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        $q = $request->get('q');
    
        return Member::where('name', 'like', "%$q%")->paginate(null, ['id', 'name as text']);
    }
}
