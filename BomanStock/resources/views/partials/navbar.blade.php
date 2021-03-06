<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">BomanStock</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="ms-auto navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/profile') ? 'active' : '' }}" href="/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/products') ? 'active' : '' }}" href="/products">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/contact') ? 'active' : '' }}" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </li>

      </ul>
    </div>
  </div>
</nav>