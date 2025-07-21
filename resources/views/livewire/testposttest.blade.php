<div>

    <h2>Posts:</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($posts12 as $post)
                <tr wire:key="{{ $post->id }}">
                    <td>{{$post->title}}</td>
                    <td>{{ str($post->content)->words(3) }}</td>
                    <td>
                        <button 
                        type="button" 
                        wire:click="delete({{ $post->id }})"
                        wire:confirm="ለማጥፋት እርግጠኛ ነህ?/ነሽ?"
                        >
                        Delete
                    </button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>