<div class="container">
    <header class="border-bottom lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">
                <a class="link-secondary" href="#">Subscribe</a>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-body-emphasis text-decoration-none" href="/">Large</a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24">
                        <title>Search</title>
                        <circle cx="10.5" cy="10.5" r="7.5" />
                        <path d="M21 21l-5.2-5.2" />
                    </svg>
                </a>
                <?php if(auth()): ?>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?=auth()->name?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a class="btn btn-sm btn-outline-secondary me-2" href="/register">Sign up</a>
                    <a class="btn btn-sm btn-outline-primary" href="/login">Login</a>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-between">
            <a class="nav-item nav-link link-body-emphasis active" href="/">World</a>
            <a class="nav-item nav-link link-body-emphasis" href="/us">U.S.</a>
            <a class="nav-item nav-link link-body-emphasis" href="/tech">Technology</a>
            <a class="nav-item nav-link link-body-emphasis" href="/form">Form</a>
            <a class="nav-item nav-link link-body-emphasis" href="/admin/posts">Posts</a>
            <a class="nav-item nav-link link-body-emphasis" href="/admin/users">Users</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Politics</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Opinion</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Science</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Health</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Style</a>
            <a class="nav-item nav-link link-body-emphasis" href="#">Travel</a>
        </nav>
    </div>
</div>