<?php

namespace App\Livewire\Links;

use App\Models\Link;
use App\Services\UrlEncoder;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddLink extends Component
{
    #[Validate('required', message: 'No URL provided.')]
    #[Validate('url', message: 'You didnt provide a valid URL.')]
    public string $long_url;

    #[Validate('nullable')]
    #[Validate('regex:/^[a-zā-žA-ZĀ-Ž0-9\-_]+$/', message: 'The shortened address can only contain Latin letters, numbers, and dashes.')]
    #[Validate('unique:links', message: 'Such short link already exists.')]
    public string $short_url = '';

    public bool $isShortUrlOptionVisible = false;

    protected UrlEncoder $UrlEncoder;

    public function __construct()
    {
        $this->UrlEncoder = new UrlEncoder();
    }

    public function create(): void
    {
        $this->validate();
        if (empty($this->short_url)) {
            $this->short_url = $this->UrlEncoder->encode();
        }
        try {
            $this->dispatch('short-link-created', $this->short_url);
            if (auth()->check()) {
                auth()->user()->links()->create($this->pull());
            } else {
                Link::create($this->pull());
            }

            session()->flash('success', 'Saite veiksmīgi saīsināta.');
        } catch (\Exception $e) {
            Log::error($e);
            session()->flash('error', 'Kaut kas nogāja greizi. Lūdzu, mēģini vēlreiz.');
            $this->redirect(route('dashboard'), navigate: true);
        }
    }


    public function toggleShortUrlOption(): void
    {
        $this->isShortUrlOptionVisible = ! $this->isShortUrlOptionVisible;
    }

    public function render()
    {
        return view('livewire.links.add-link');
    }
}
