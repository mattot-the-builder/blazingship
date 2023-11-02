<?php

namespace App\View\Components;

use App\Models\Customer;
use App\Models\Order;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Stats extends Component
{
    public $revenue = [
        'new' => 0,
        'old' => 0,
        'change' => 0,
    ];
    public $customers = [
        'new' => 0,
        'old' => 0,
        'change' => 0,
    ];
    public $pending_order = 0;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->revenue = [
            'new' => Order::where('status', 'delivered')->where('created_at', '>=', now()->subDays(30))->get()->sum('total'),
            'old' => Order::where('status', 'delivered')->where('created_at', '<', now()->subDays(30))->get()->sum('total'),
        ];

        $this->revenue['change'] = $this->revenue['new'] - $this->revenue['old'];

        $this->customers = [
            'new' => Customer::where('created_at', '>=', now()->subDays(30))->get()->count(),
            'old' => Customer::where('created_at', '<', now()->subDays(30))->get()->count(),
        ];

        $this->customers['change'] = $this->customers['new'] - $this->customers['old'];

        $this->pending_order = Order::where('status', 'pending')->get()->count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.stats');
    }
}
