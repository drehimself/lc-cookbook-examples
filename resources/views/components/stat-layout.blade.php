@props(['name', 'stat'])

<div class="bg-white shadow-md rounded-lg px-4 py-6">
    <div class="flex justify-between items-center">
        <h4 class="text-gray-500 font-medium">{{ $name }}</h4>
        <select name="selectedDays" id="selectedDays" class="border bg-gray-100" wire:model="selectedDays" wire:change="updateStat">
            <option value="30">30 days</option>
            <option value="60">60 days</option>
            <option value="90">90 days</option>
        </select>
    </div>
    <div class="text-3xl font-bold mt-4">{{ $stat }}</div>
</div>
