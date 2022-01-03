<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Post.']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Slug.', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('category_id', 'Categoria:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>

    @foreach ($tags as $tag)

        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>

    @endforeach

    <hr>

    @error('tags')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>

    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>

    <hr>

    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="row mb-3">

    <div class="col">

        <div class="image-wrapper">

            @isset ($post->image)

                <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="">

            @else

                <img id="picture" src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fwww.solofondos.com%2Fwp-content%2Fuploads%2F2016%2F02%2FFondos-wallpapers-4k.jpg&f=1&nofb=1" alt="">

            @endif

        </div>

    </div>

    <div class="col">

        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara',) !!}\
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        </div>

        @error('file')
            <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>

</div>

<div class="form-group">

    {!! Form::label('extract', 'Extracto:') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}

    @error('extract')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">

    {!! Form::label('body', 'Cuerpo del post:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>
