<div>
    <h3>tickets</h3>
    @foreach($tickets as $ticket)
        <div class="shadow border p-3
                    {{$active==$ticket->id ? 'bg-info':''}}"

             wire:click="$emit('ticketSelected',{{$ticket->id}})">
            <p class="text-gray-800 ">
                {{$ticket->question}}
            </p>
        </div>

    @endforeach
</div>
