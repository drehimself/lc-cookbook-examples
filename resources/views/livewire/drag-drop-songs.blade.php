<table class="border-collapse table-auto w-full text-sm">
    <thead>
        <tr>
            <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">ID</th>
            <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Song</th>
            <th class="border-b font-medium p-4 pt-0 pb-3 text-slate-400 text-left">Artist</th>
            <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left">Year</th>
            <th class="border-b font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 text-left"></th>
        </tr>
    </thead>
    <tbody wire:sortable="updateSongOrder" wire:sortable.options="{ animation: 500 }" class="bg-white">
        @foreach ($songs as $song)
            <tr wire:sortable.item="{{ $song->id }}" wire:key="song-{{ $song->id }}">
                <td class="border-b border-slate-200 p-4 pl-8 text-slate-500">{{ $song->id }}</td>
                <td class="border-b border-slate-200 p-4 pl-8 text-slate-500">{{ $song->title }}</td>
                <td class="border-b border-slate-200 p-4 text-slate-500">{{ $song->artist }}</td>
                <td class="border-b border-slate-200 p-4 pr-8 text-slate-500">{{ $song->year }}</td>
                <td wire:sortable.handle class="border-b border-slate-200 p-4 pr-8 text-slate-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current hover:cursor-grab" viewBox="0 0 24 24">
                        <path d="M9,3H11V5H9V3M13,3H15V5H13V3M9,7H11V9H9V7M13,7H15V9H13V7M9,11H11V13H9V11M13,11H15V13H13V11M9,15H11V17H9V15M13,15H15V17H13V15M9,19H11V21H9V19M13,19H15V21H13V19Z" />
                    </svg>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
