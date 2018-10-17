<nav class="main-nav">
    <ul>
        <li><a class="{{ $page->selected('') }}" href="/">Home</a></li>
        <li><a class="{{ $page->selected('about') }}" href="/about">About</a></li>
        <li><a class="{{ $page->selected('contact') }}" href="/contact">Contact</a></li>
        <li><a class="{{ $page->selected('blog') }}" href="/blog">Blog</a></li>
        <li><a class="{{ $page->selected('clients') }}" href="/clients">Clients</a></li>
    </ul>
</nav>
