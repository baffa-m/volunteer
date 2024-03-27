<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Volunteer;
use Livewire\WithPagination;

class Opportunities extends Component
{
    use WithPagination;

    public $timeFrame;

    public $category;

    public function render()
    {
        return view('livewire.opportunities',
    [
        'volunteers' => $this->getVolunteers()
    ]
    );
    }

    // Method to get volunteers based on the selected time frame
    private function getVolunteers()
    {
        $now = Carbon::now();

        switch ($this->timeFrame) {
            case 'all':
                return Volunteer::paginate(10);
            case 'oneday':
                return Volunteer::where('created_at', '>=', $now->subDay())->paginate(10);
            case 'sevendays':
                return Volunteer::where('created_at', '>=', $now->subDays(7))->paginate(10);
            case 'fourteendays':
                return Volunteer::where('created_at', '>=', $now->subDays(14))->paginate(10);
            case 'onemonth':
                return Volunteer::where('created_at', '>=', $now->subMonth())->paginate(10);
            default:
                return Volunteer::paginate(10); // Default to all volunteers
        }
    }
}
