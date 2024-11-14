<?php

namespace App\Livewire\Links;

use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class GetLink extends Component
{
    use WithPagination;

    public object $links;


    public function savedInClipboard()
    {
        session()->flash('success', 'Saite veiksmīgi nokopēta.');

        $this->redirect(route('dashboard'), navigate: true);
    }

    #[On('short-link-created')]
    public function mount()
    {
        $this->links = auth()->user()->links->sortByDesc('created_at');
    }

    public function render()
    {
        return view('livewire.links.get-link');
    }
}
