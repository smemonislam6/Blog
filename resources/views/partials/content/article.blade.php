@foreach ($posts as $post)
<article>
    <!-- Post header-->
    <header class="mb-4">
        <!-- Post title-->
        <h1 class="fw-bolder mb-1">{{ $post->title }}</h1>
        <!-- Post meta content-->
        <div class="text-muted fst-italic mb-2">Posted on January 1, 2023 by Start Bootstrap</div>
        <!-- Post categories-->
        <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{ $post->category->name }}</a>
        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
    </header>
    <!-- Preview image figure-->
    <figure class="mb-4"><img class="img-fluid rounded" src="{{ asset($post->image) }}" alt="..." /></figure>
    <!-- Post content-->
    <section class="mb-5">
        {{ $post->content }}
    </section>
</article>
@endforeach