<?php

namespace App\Http\Livewire;

use App\Models\Department;
use Livewire\Component;
use App\Models\Professor;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Builder;

class Search extends Component
{

    public $professors;
    public $subjects;
    public $departments;
    public $search;

    public function makeSearch() {
        $this->professors = '';
        $this->subjects = '';
        $this->departments = '';
        $this->professors = Professor::where('name','like','%'.$this->search.'%')->get();
        $this->subjects = Subject::where('approval','موافقة')->where(function(Builder $query) {
            return $query->where('name','like','%'.$this->search.'%')->orWhere('content','like','%'.$this->search.'%');
        })->get();
        $this->departments = Department::where('name','like','%'.$this->search.'%')
                                        ->orWhere('description','like','%'.$this->search.'%')->get();

    }


    public function render()
    {
        if($this->search == '') {
            $this->professors = '';
            $this->subjects = '';
            $this->departments = '';
        }
        return view('livewire.search');
    }
}
