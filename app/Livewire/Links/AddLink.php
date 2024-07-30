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

    #[Validate('regex:/^[a-zā-žA-ZĀ-Ž0-9\-_]+$/', message: 'Saīsinātā adrese drīkst saturēt tikai latīņu burtus, ciparus, domuzīmes.')]
    public string $short_url;

    public bool $isShortUrlOptionVisible = true;

    public function addLink(): void
    {
//        dd($this->all());
        $this->validate();

        try {
            $this->short_url = URL::to('/').'/'.Str::random(8);;

            auth()->user()->links()->create($this->pull());

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
