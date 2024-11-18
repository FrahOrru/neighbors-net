<x-site-layout>
Hello class

    @foreach($posts as $post)
        <div class="mt-4">
            <h2 class="font-bold text-lg">{{$post->title}}</h2>
            <div>
                {{ $article->published_at->format('M d') }}
                |
                {{$post->author?->name ?? 'Unknown'}}
            </div>
            <p class="text-sm">{{$post->content}}</p>
            <br>
            
            <ul class="list-disc pl-4">
                @foreach($post->comments->take(3) as $comment)
                    <li>{{$comment->content}}</li>
                @endforeach
            </ul>

        </div>
    @endforeach

</x-site-layout>