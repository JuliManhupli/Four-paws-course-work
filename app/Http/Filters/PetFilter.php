<?php

namespace App\Http\Filters;

class PetFilter extends QueryFilter{

    public function animal_id($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->where('animal_id', $id);
        });
    }

    public function sex_id($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->where('sex_id', $id);
        });
    }

    public function age_choice($param = null) {
        if ($param === "до 1 року") {
            return $this->builder
                ->where('age', 'LIKE', '%'.'місяц'.'%');
        }
        elseif ($param === "1-5 років") {
            return $this->builder
                ->where(function($query) use($param){
                    $query->where('age', 'LIKE', '%'.'рік'.'%')
                        ->orWhere('age', 'LIKE', '%'.'рок'.'%');
                })
                ->whereBetween('age_value', [1, 5])->get();
        }
        elseif ($param === "від 5 років") {
            return $this->builder
                ->where(function($query) use($param){
                    $query->where('age', 'LIKE', '%'.'рік'.'%')
                        ->orWhere('age', 'LIKE', '%'.'рок'.'%');
                })
                ->where('age_value', '>', 5)->get();
        }
        return $this->builder;
    }
}
