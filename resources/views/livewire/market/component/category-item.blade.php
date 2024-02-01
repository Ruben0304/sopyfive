<div class="ms-n2">
    @foreach ($categories as $category)
        <a class="text-black d-block mb-1 text-decoration-none hover-bg-100 px-2 py-1 rounded-2"
            href="#!">{{ $category->name }}</a>
    @endforeach
</div>
