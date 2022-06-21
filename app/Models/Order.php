<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function scopeGroupByMonth(Builder $query)
    {
        return $query->selectRaw('month(created_at) as month')
            ->selectRaw('count(*) as count')
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->values()
            ->toArray();
    }

    public function scopeGetYearOrders(Builder $query, $year)
    {
        return $query->whereYear('created_at', $year);
    }
}
