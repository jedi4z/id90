<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="/secure/hotels/searcher">ID90 Travel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <span class="mr-auto"></span>
        <span class="navbar-text">Hi <?= $_SESSION['username'] ?>!</span>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/auth/logout">Logout</a>
            </li>
        </ul>
    </div>
</nav>
