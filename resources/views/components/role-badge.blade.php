@if ($role === 'agent')
<span
    class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">
    {{ $role }}
</span>
@elseif ($role === 'dropship')
<span
    class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">
    {{ $role }}
</span>
@elseif ($role === 'stockist')
<span
    class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">
    {{ $role }}
</span>
@endif
