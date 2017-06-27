<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $timestamps = false;

    protected $guarded = ['id'];

    public function roles(){
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function users(){
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function getSlugAttribute($value)
    {
        return json_decode($value, true);
    }

    /**
     * @param $value
     */
    public function setSlugAttribute($value)
    {
        // if nothing being set, clear slug
        if (empty($value)) {
            $this->attributes['slug'] = '[]';
            return ;
        }

        $value = is_array($value) ? $value : [$value => true];

        // if attribute is being updated.
        if ( isset($this->original['slug']) ) {
            $value = $value + json_decode($this->original['slug'], true);

            // sort by key
            ksort($value);
        }

        // remove null values.
        $value = array_filter($value, 'is_bool');

        // store as json.
        $this->attributes['slug'] = json_encode($value);
    }
}
