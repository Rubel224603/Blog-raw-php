<?php
include('config.php');
include('include/style.php');
include('include/menu.php');

?>
<main>
    <header class="py-5 bg-white border-bottom mb-5">
        <div class="container">
            <div class="text-center my-5">
                <h1 class="fw-bolder display-4">The Developer's Log</h1>
                <p class="lead text-muted mb-0">Insights on PHP, Laravel, and Product Engineering architecture.</p>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-4 shadow-sm border-0">
                    <img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d" alt="Featured">
                    <div class="card-body">
                        <div class="small text-muted">April 9, 2026</div>
                        <h2 class="card-title h4 mt-2">Scalable Backend Patterns</h2>
                        <p class="card-text">Building robust systems requires more than just code; it requires a
                            product-focused mindset. Let's look at how to optimize Eloquent queries for high
                            traffic.</p>
                        <a class="btn btn-primary" href="#">Read full article →</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img class="card-img-top" src="https://dummyimage.com/700x350/adb5bd/495057" alt="Post">
                            <div class="card-body">
                                <h5 class="card-title">Mastering Docker</h5>
                                <p class="card-text small text-muted">A beginner's guide to containerizing Laravel
                                    apps with
                                    WSL2.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <img class="card-img-top" src="https://dummyimage.com/700x350/adb5bd/495057" alt="Post">
                            <div class="card-body">
                                <h5 class="card-title">RESTful API Best Practices</h5>
                                <p class="card-text small text-muted">Ensuring your Sanctum-powered APIs are secure
                                    and
                                    efficient.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header bg-dark text-white">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search for...">
                            <button class="btn btn-primary" type="button">Go</button>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header bg-dark text-white">Categories</div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="badge bg-light text-dark text-decoration-none border p-2">Laravel</a>
                            <a href="#" class="badge bg-light text-dark text-decoration-none border p-2">PHP 8.3</a>
                            <a href="#" class="badge bg-light text-dark text-decoration-none border p-2">DevOps</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header bg-dark text-white fw-bold">Recent Comments</div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action py-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1 fw-bold text-primary small">Md. Ridoy</h6>
                                <small class="text-muted">5m ago</small>
                            </div>
                            <p class="mb-1 small text-secondary">"অসাধারণ টিউটোরিয়াল! ডাটাবেস অপ্টিমাইজেশন নিয়ে আরও জানতে চাই।"</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1 fw-bold text-primary small">Sabbir Ahmed</h6>
                                <small class="text-muted">2h ago</small>
                            </div>
                            <p class="mb-1 small text-secondary">"Docker setup on WSL2 নিয়ে কি নতুন ভিডিও আসবে?"</p>
                        </a>
                    </div>
                </div>

                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-header bg-dark text-white fw-bold">Popular Articles</div>
                    <div class="card-body">
                        <div class="d-flex mb-3 align-items-center">
                            <img src="https://dummyimage.com/60x60/dee2e6/6c757d" class="rounded me-3" alt="Thumb">
                            <div>
                                <a href="#" class="text-decoration-none fw-bold small text-dark">How to use Sanctum in Laravel</a>
                                <div class="text-muted" style="font-size: 11px;">1.2k Views</div>
                            </div>
                        </div>
                        <div class="d-flex mb-0 align-items-center">
                            <img src="https://dummyimage.com/60x60/dee2e6/6c757d" class="rounded me-3" alt="Thumb">
                            <div>
                                <a href="#" class="text-decoration-none fw-bold small text-dark">PHP 8.3 Feature List</a>
                                <div class="text-muted" style="font-size: 11px;">950 Views</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-4 fw-bold border-bottom pb-2">Latest Articles</h3>

                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 overflow-hidden">
                            <div class="position-relative">
                                <img src="https://dummyimage.com/600x400/343a40/ffffff&text=Laravel+Tips"
                                    class="card-img-top" alt="Blog">
                                <span class="badge bg-primary position-absolute top-0 end-0 m-3">New</span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Optimizing Eloquent Queries</h5>
                                <p class="card-text text-muted small">Learn how to reduce database load by using
                                    'Eager
                                    Loading' effectively in your Laravel projects.</p>
                            </div>
                            <div class="card-footer bg-transparent border-0 pb-3">
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">Read Article</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm border-0 overflow-hidden">
                            <img src="https://dummyimage.com/600x400/495057/ffffff&text=PHP+8.3"
                                class="card-img-top" alt="Blog">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">PHP 8.3 New Features</h5>
                                <p class="card-text text-muted small">A deep dive into the latest updates in PHP 8.3
                                    and how
                                    it improves your backend performance.</p>
                            </div>
                            <div class="card-footer bg-transparent border-0 pb-3">
                                <a href="#" class="btn btn-outline-primary btn-sm rounded-pill">Read Article</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card mb-4 shadow-sm border-0">
                    <div class="card-header bg-dark text-white fw-bold">Popular Tags</div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <a href="#" class="btn btn-sm btn-light border">#Laravel</a>
                            <a href="#" class="btn btn-sm btn-light border">#PHP</a>
                            <a href="#" class="btn btn-sm btn-light border">#Docker</a>
                            <a href="#" class="btn btn-sm btn-light border">#APIs</a>
                            <a href="#" class="btn btn-sm btn-light border">#MySQL</a>
                            <a href="#" class="btn btn-sm btn-light border">#CleanCode</a>
                        </div>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm border-0">
                    <div class="card-header bg-dark text-white fw-bold">Recent Comments</div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action py-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1 fw-bold text-primary">Md. Ridoy</h6>
                                <small class="text-muted">3m ago</small>
                            </div>
                            <p class="mb-1 small text-secondary text-truncate">"Great post on database optimization!
                                Really
                                helpful for our LMS project."</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action py-3">
                            <div class="d-flex w-100 justify-content-between">
                                <h6 class="mb-1 fw-bold text-primary">John Doe</h6>
                                <small class="text-muted">1h ago</small>
                            </div>
                            <p class="mb-1 small text-secondary text-truncate">"Can you explain more about Docker
                                setup on
                                WSL?"</p>
                        </a>
                    </div>
                </div>


            </div>
        </div>

        <nav aria-label="Page navigation" class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link shadow-none border-0 bg-light rounded-start px-3"
                        href="#">Previous</a></li>
                <li class="page-item active"><a class="page-link shadow-none border-0 px-3" href="#">1</a></li>
                <li class="page-item"><a class="page-link shadow-none border-0 px-3" href="#">2</a></li>
                <li class="page-item"><a class="page-link shadow-none border-0 bg-light rounded-end px-3"
                        href="#">Next</a>
                </li>
            </ul>
        </nav>
    </section>

    <section class="py-5 bg-light border-top border-bottom">
        <div class="container text-center">
            <h2 class="fw-bold">Don't miss a post!</h2>
            <p class="text-muted">Sign up for our weekly developer newsletter.</p>
            <div class="row justify-content-center">
                <div class="col-md-6 mt-3">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Email address">
                        <button class="btn btn-primary">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'include/footer.php' ?>
<?php include 'include/script.php' ?>