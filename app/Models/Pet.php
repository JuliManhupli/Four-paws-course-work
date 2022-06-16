<?php

namespace App\Models;

use App\Http\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    public function age_range(){
        return $this->belongsTo(Age_range::class);
    }

    public function sex(){
        return $this->belongsTo(Sex::class);
    }

    public function animal(){
        return $this->belongsTo(Animal::class);
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }
}
