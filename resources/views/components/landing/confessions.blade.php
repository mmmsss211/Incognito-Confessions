@props(['confessions' => $confessions])

<div class="-mt-20 pb-56">
    <div class="relative">
        <div class="absolute top-0 right-0 h-20 w-96 bg-gradient-to-b from-zinc-900/0 to-zinc-900"></div>

        <div class="relative mx-auto max-w-6xl columns-3 gap-6">

            @if (count($confessions) > 0)

                @foreach ($confessions as $confession)
                    <x-landing.confession-card :confession="$confession" :date="Carbon\Carbon::parse($confession->created_at)->format('m/d/y')" />
                @endforeach

            @endif

        </div>

        <div
            class="absolute bottom-0 flex h-96 w-full items-end justify-center bg-gradient-to-b from-zinc-900/0 via-zinc-900/80 to-zinc-900 pb-20">
            <a href={{ route('confessions') }}
                class="rounded-md border-t border-indigo-500 bg-indigo-600 px-6 py-4 font-medium text-white">View all
                confessions</a>
        </div>
    </div>
</div>
