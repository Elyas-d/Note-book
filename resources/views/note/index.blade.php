<x-layout>
    <div class="note-container">
        <a href="{{ route('note.create')}}">New Note</a>
        <div class="notes">
            @foreach ( $notes as $note )
               <div class="note bg-yellow-300">
                <div class="note-body">
                    {{Str::words($note->note, 30)}}
                </div>
                <div class="note-buttons">
                    <a href="{{ route('note.show', $note)}}" class="note-view-button">View</a>
                    <a href="{{ route('note.edit', $note)}}" class="note-edit-button">Edit</a>
                    <button class="note-delete-button">Delete</button>
                </div>
            </div> 
            @endforeach
            
        </div>
    </div>
</x-layout>
