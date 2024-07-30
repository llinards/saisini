<?php

namespace App\Livewire\Links;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Tuupola\Base62;

class AddLink extends Component
{
    #[Validate('required', message: 'Nav norādīta adrese.')]
    #[Validate('url', message: 'Nav norādīta korekta adrese.')]
    public string $long_url;

    #[Validate('nullable:regex:/^[a-zā-žA-ZĀ-Ž0-9\-_]+$/', message: 'Saīsinātā adrese drīkst saturēt tikai latīņu burtus, ciparus, domuzīmes.')]
    public string $short_url;

    public bool $isShortUrlOptionVisible = false;

    public function addLink(): void
    {

        $this->validate();
        try {
            if (empty($this->short_url)) {
                $base62 = new Base62();
                $this->short_url = URL::to('/').'/'.$base62->encode(random_bytes(8));
            } else {
                $this->short_url = URL::to('/').'/'.$this->short_url;
            }
            auth()->user()->links()->create($this->pull());

            session()->flash('success', 'Adrese saīsināta.');
            $this->redirect(route('dashboard'), navigate: true);
        } catch (\Exception $e) {
            Log::error($e);
            session()->flash('error', 'Kļūda saīsinot adresi. Mēģini vēlreiz.');
            $this->redirect(route('dashboard'), navigate: true);
        }

    }

    public function toggleShortUrlOption(): void
    {
        $this->isShortUrlOptionVisible = !$this->isShortUrlOptionVisible;
    }

    public function render()
    {
        return view('livewire.links.add-link');
    }
}
