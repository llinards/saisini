<?php

namespace App\Livewire\Links;

use Livewire\Attributes\On;
use Livewire\Component;

class ShowCreatedLink extends Component
{
    public string $short_url;

    #[On('short-link-created')]
    public function showShortUrl($short_url)
    {
        $this->short_url = $short_url;
    }

    public function render()
    {
        return view('livewire.links.show-created-link');
    }
}
