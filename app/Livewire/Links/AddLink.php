<?php

namespace App\Livewire\Links;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddLink extends Component
{
    #[Validate('required', message: 'Nav norādīta adrese.')]
    #[Validate('url', message: 'Nav norādīta korekta adrese.')]
    public string $long_url;

    public string $short_url;

    public function addLink(): void
    {
        $this->validate();

        try {
            $this->short_url = URL::to('/').'/'.Str::random(8);;

            auth()->user()->links()->create([
                'long_url' => $this->long_url,
                'short_url' => $this->short_url,
            ]);

            session()->flash('success', 'Adrese saīsināta.');
            $this->redirect(route('dashboard'), navigate: true);
        } catch (\Exception $e) {
            Log::error($e);
            session()->flash('error', 'Kļūda saīsinot adresi. Mēģini vēlreiz.');
            $this->redirect(route('dashboard'), navigate: true);
        }

    }

    public function render()
    {
        return view('livewire.links.add-link');
    }
}
