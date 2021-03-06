<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\User;

class ProductResource extends JsonResource
{

    public function toArray($request)
    {
        return  [
            "id"=>$this->id,
            "name"=>$this->name,
            "img_url"=>$this->img_url,
            "Expiraton date"=>$this->date,
            "description"=>$this->description,
            "quantity"=>$this->quantity,
           "price"=>$this->price,
            "currentPrice" => $this->when(!is_null($this->current_price), $this->current_price),
            "category_id"=>$this->category_id,
            "views"=>$this->views,
            "user_id"=>$this->user_id,
           //"phone for contact"=>$this->user()->whatsapp_url,
            "count of likes"=>$this->likes()->count(),
           "count of comments" =>$this->comments()->count(),
//            "comments"=>$this->comments()->get(),
//            "likes"=>$this->likes()->get(),
            ];
    }
}
