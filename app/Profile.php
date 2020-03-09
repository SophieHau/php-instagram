<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage() {
        $imagePath = ($this->image) ? $this->image : '/profile/oWy7KHPqMsmw3OOhCdpSqBZpIQYYBOGV6XiTayrL.jpeg';
        return '/storage/' . $imagePath;
    }

    public function user() {
        return $this->belongsto(User::class);
    }
}
