<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Awesome Books</title>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        />
        <link href="{{ asset('./style.css') }}" rel="stylesheet" />
    </head>
    <header class="header-public">
        <nav class="navbar mt-0 navigation navbar-expand-sm">
            <div class="awesome-book-list">
                <span class="header">Awesome books</span>
                <button
                    class="btn-info btn btn-sm"
                    type="button"
                    onclick="showList(this), clickMe(this)"
                >
                    list
                </button>
            </div>
            <div class="add-new-container">
                <button
                    class="nav-btn-add btn btn-info btn-sm"
                    type="button"
                    onclick="addNew(this)"
                >
                    Add new
                </button>
            </div>
            <div class="add-new-container">
                <button
                    class="nav-btn btn btn-info btn-sm"
                    type="button"
                    onclick="contact(this)"
                >
                    Contact
                </button>
            </div>
            <div class="partner-container">
                <button
                    class="nav-btn btn btn-info btn-sm"
                    type="button"
                    onclick="partner(this)"
                >
                    partners
                </button>
                <a class="partnerLink" href = "https://lucky-axolotl-6dc928.netlify.app/"> </a>
            </div>
        </nav>
    </header>
    <body class="bdy">
        <section class="login-form">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Log in</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Email or Phone" />
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" />
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-sm" onclick="openMain(this)">Log In</button>
                            <p class="error-password"></p>
                        </div>
                        <div class="text-center mt-3">
                            <button onclick="forget(this)" class="btn btn-light" href="#">Forgot Password?</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <form class="forget-password">
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Forgot Password</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-reset">
                                    <div class="mb-3">
                                        <label for="email" class="form-label"
                                            >Email</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="email"
                                            placeholder="Email"
                                        />
                                    </div>
                                    <div class="d-grid">
                                        <button
                                            onclick="resetpassword(this)"
                                            type="submit"
                                            class="btn btn-sm btn-primary btn-reset"
                                        >
                                            Reset Password
                                        </button>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button
                                            onclick="backtoLogin(this)"
                                            href="#"
                                            class="btn btn-light"
                                        >
                                            Back to Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <main class="wraper" onload="displayDatas(this)">
            <div class="dispay-data"></div>
            <div class="container">
                <h1 class="page-header">All Awesome Books</h1>
                <div id="bookList" class="border"></div>
                <div class="mb-4 textfield-and-btn">
                    <div class="textfield-and-bt">
                        <div class="textfields">
                            <div class="textfield">
                                <input
                                    type="text"
                                    id="titleInput"
                                    class="form-control"
                                    placeholder="Title"
                                />
                            </div>
                            <div class="textfield">
                                <input
                                    type="text"
                                    id="authorInput"
                                    class="form-control"
                                    placeholder="Author"
                                />
                            </div>
                        </div>
                        <button
                            id="addBtn"
                            type="submit"
                            class="btn btn-primary mt-2"
                        >
                            Add
                        </button>
                    </div>
                </div>
                <div class="contact-container">
                    <p class="contact-paragraph">
                        Do you have any question or you want just say "Hello!"?
                    </p>
                    <ul class="contact-unorderedlist">
                        <li>Our email: tuta@gamil.com</li>
                        <li>OUr phone number: +1 298237498573</li>
                        <li>Our address: PU 34, 8736 city, United stats</li>
                    </ul>
                </div>
            </div>
            <footer>&copy; Najibullah Jafari 2023</footer>
        </main>

        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
