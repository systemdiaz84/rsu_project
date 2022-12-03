<?php

namespace App\Http\Livewire\Admin;

use App\Models\Specie;
use Livewire\Component;
use Livewire\WithPagination;

class SpeciesIndex extends Component
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

        
        $species = Specie::select('species.id','species.name','families.name as family','species.description')
        ->join('families','families.id','=','species.family_id')
        ->where('species.name', 'like', '%' . $this->search . '%')->paginate(5);
        return view('livewire.admin.species-index', compact('species'));

    }
}
