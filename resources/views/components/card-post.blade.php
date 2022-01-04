@props(['post'])

<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">

    @if ($post->image)
        <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">
    @else
        <img class="w-full h-72 object-cover object-center" src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.solofondos.com%2Fwp-content%2Fuploads%2F2016%2F02%2FFondos-wallpapers-4k.jpg&f=1&nofb=1" alt="">
    @endif

    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </h1>

        <div class="text-gray-700 text-base">
            {!! $post->extract !!}
        </div>
    </div>

    <div class="px-6 pt-4 pb-2">
        @foreach ($post->tags as $tag)
            <a href="{{ route('posts.tag', $tag) }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{ $tag->name }}</a>
        @endforeach
    </div>

</article>
