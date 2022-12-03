<?php

namespace App\Http\Livewire\Admin;

use App\Models\Family;
use Livewire\Component;
use Livewire\WithPagination;

class FamiliesIndex extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {


        $families = Family::where('name', 'like', '%' . $this->search . '%')->paginate(5);
        return view('livewire.admin.families-index', compact('families'));
    }
}
