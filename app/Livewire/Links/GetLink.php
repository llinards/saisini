<?php

namespace App\Livewire\Links;

use Livewire\Component;

class GetLink extends Component
{
    public object $links;

    public function mount()
    {
        $this->links = auth()->user()->links->sortByDesc('created_at');
    }

    public function render()
    {
        return view('livewire.links.get-link');
    }
}
