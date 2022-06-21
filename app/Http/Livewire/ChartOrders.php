<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class ChartOrders extends Component
{
    public $selectedYear;
    public $thisYearOrders;
    public $lastYearOrders;

    public function mount()
    {
        $this->selectedYear = date('Y');
        $this->updateOrdersCount();
    }

    public function updateOrdersCount()
    {
        $this->thisYearOrders = Order::getYearOrders($this->selectedYear)->groupByMonth();
        $this->lastYearOrders = Order::getYearOrders($this->selectedYear - 1)->groupByMonth();

        $this->emit('updateTheChart');
    }

    public function render()
    {
        $availableYears = [
            date('Y'), date('Y') - 1, date('Y') - 2, date('Y') - 3,
        ];

        return view('livewire.chart-orders', [
            'availableYears' => $availableYears,
        ]);
    }
}
