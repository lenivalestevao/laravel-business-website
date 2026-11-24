<x-layout title="Page not found" description="The page you are looking for does not exist.">
    <section class="page-hero not-found">
        <div class="container narrow center">
            <p class="big-code">404</p>
            <h1>We could not find that page</h1>
            <p class="lead">The link may be broken or the page may have moved.</p>
            <div class="btn-row center-row">
                <a class="btn btn-primary btn-lg" href="{{ route('home') }}">Back to home</a>
                <a class="btn btn-ghost btn-lg" href="{{ route('contact') }}">Contact us</a>
            </div>
        </div>
    </section>
</x-layout>
