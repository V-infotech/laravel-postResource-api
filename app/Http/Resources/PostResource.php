<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        //we can customize response //

        // return ['id'=>$this->id,
        //         'title'=>$this->title,
        //         'body'=>$this->body];


                //////////////////////////

    }

    public function with($request){

        return ['version'=>'version 1.1.10',
                  'url' =>'https://websoft.org.in/'];

    }
}
