<?php

namespace App\Http\Livewire\Stats;

use App\Models\Order;
use Livewire\Component;

class OrdersCount extends Component
{
    public $selectedDays;
    public $ordersCount;

    public function mount()
    {
        $this->selectedDays = 30;
        $this->updateStat();
    }

    public function updateStat()
    {
        $this->ordersCount = Order::where('created_at', '>=', now()->subDays($this->selectedDays))->count();
    }

    public function render()
    {
        return view('livewire.stats.orders-count');
    }
}
