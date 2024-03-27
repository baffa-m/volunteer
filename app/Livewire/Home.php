<?php

namespace App\Livewire;

use App\Models\State;
use Livewire\Component;
use App\Models\Category;
use App\Models\Volunteer;

class Home extends Component
{
    public $search;
    public $category;
    public $state;

    public function render()
    {
        $query = Volunteer::query();

        // Apply search filter
        if ($this->search) {
            $query->where('post_title', 'like', '%' . $this->search . '%');
        }

        // Apply category filter
        if ($this->category) {
            $query->where('category_id', $this->category);
        }

        // Apply state filter
        if ($this->state) {
            $query->where('state_id', $this->state);
        }

        // Fetch latest volunteers with applied filters
        $latest_volunteers = $query->search($this->search)->latest()->take(10)->get();
        $categories = Category::all();
        $states = State::all();

        // Pass data to the view
        return view('livewire.home', compact('latest_volunteers', 'states', 'categories'));
    }
}
