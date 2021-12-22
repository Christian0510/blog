<x-app-layout>

    <div class="px-2 mx-auto max-w-5xl sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-3xl font-bold">Categoria: {{ $category->name }}</h1>

        @foreach ($posts as $post)
            <x-card-post :post="$post" />
        @endforeach

        <div class="mt-4">
            {{ $posts->links() }}
        </div>

    </div>

</x-app-layout>
