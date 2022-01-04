<x-app-layout>

    <div class="container py-8">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <article class="w-full bg-center bg-cover h-80 @if($loop->first) md:col-span-2 @endif" style="background-image: url( @if($post->image) {{ Storage::url($post->image->url) }} @else  https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.solofondos.com%2Fwp-content%2Fuploads%2F2016%2F02%2FFondos-wallpapers-4k.jpg&f=1&nofb=1 @endif )">
                    <div class="w-full h-full px-8 flex flex-col justify-center">

                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="{{ route('posts.tag', $tag) }}" class="inline-block px-3 h-6 bg-gray-600 text-white rounded-full">{{ $tag->name }}</a>
                            @endforeach
                        </div>

                        <h1 class="text-4xl text-white leading-8 font-bold mt-2">
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->name }}
                            </a>
                        </h1>

                    </div>
                </article>
            @endforeach

        </div>

        <div class="my-4">
            {{ $posts->links() }}
        </div>

    </div>

</x-app-layout>
