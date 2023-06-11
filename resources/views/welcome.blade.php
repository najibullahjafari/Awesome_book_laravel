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
								<a
										class="nav-btn btn btn-info btn-sm"
										type="button"
										href="https://lucky-axolotl-6dc928.netlify.app"
								>
										partners
								</a>
								<a
										class="partnerLink"
										href="https://lucky-axolotl-6dc928.netlify.app/"
								>
								</a>
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
																		<label for="email" class="form-label"
																				>Email</label
																		>
																		<input
																				type="text"
																				class="form-control"
																				id="email"
																				placeholder="Email or Phone"
																		/>
																</div>
																<div class="mb-3">
																		<label for="password" class="form-label"
																				>Password</label
																		>
																		<input
																				type="password"
																				class="form-control"
																				id="password"
																				placeholder="Password"
																		/>
																</div>
																<div class="d-grid">
																		<button
																				type="submit"
																				class="btn btn-primary btn-sm"
																				onclick="openMain(this)"
																		>
																				Log In
																		</button>
																		<p class="error-password"></p>
																</div>
																<div class="text-center mt-3">
																		<button
																				onclick="forget(this)"
																				class="btn btn-light"
																				href="#"
																		>
																				Forgot Password?
																		</button>
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
																						id="forgetemail"
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
                                       

                 <div class="row">
  <div class="col-12">
    <div class="textfield-and-bt">
      <div class="textfields">
        <div class="textfield-con">
          <input
            type="text"
            id="titleInput"
            class="form-control textfielden"
            placeholder="Title"
          />
        </div>
        <div class="textfield-con">
          <input
            type="text"
            id="authorInput"
            class="form-control textfielden"
            placeholder="Author"
          />
        </div>
        <div class="textfield-con">
          <input
            type="text"
            id="yearInput"
            class="form-control textfielden"
            placeholder="Written Year"
          />
        </div>
        <div class="mb-3">
          <input
            type="file"
            id="imageInput"
            class="form-control textfield"
            accept="image/*"
            placeholder="Choose an Image"
          />
        </div>
        <div class="mb-3">
          <textarea
            id="descriptionInput"
            class="form-control textfield"
            placeholder="Description"
          ></textarea>
        </div>
        <div class="mb-3">
          <input
            type="file"
            id="pdfInput"
            class="form-control textfield"
            accept=".pdf"
            placeholder="Choose a book!"
          />
        </div>
      </div>
      <div class="col-12">
        <button
          id="addBtn"
          type="submit"
          class="btn btn-primary mt-2"
        >
          Add
        </button>
      </div>
    </div>
  </div>
</div>



								</div>
								<div class="contact-container">
										<section class="section-contact-form">
                  <div class="contact-form-container" id="contact-part">
                    <h3 class="contact-form-h2">I'm always interested in hearing about new projects!</h3>
                    <form action="https://formspree.io/f/xeqwnkpq" method="POST" class="contact-form" id="contact-form">
                      <div class="personal-data">
                        <input type="text" name="First Name" id="firstname" class="form-control form-input" placeholder="First Name" required maxlength="30">
                        <input type="text" name="Last Name" id="lastname" class="form-control form-input lastname" placeholder="Last Name" required maxlength="30">
                      </div>
                      <input type="contactemail" id="contactemail" name="email" class="form-control form-input" placeholder="Email address" required>
                      <p id="errormessage" class="errormessage"></p>
                      <textarea name="message" class="form-control form-input textarea-form" placeholder="Write me something..." required maxlength="500"></textarea>
                      <input type="submit" name="submit" value="Get in touch" class="btn btn-primary button-action submit-btn">
                    </form>
                  </div>
                  </section>
								</div>
                  
               </div>
<!-- HERE THE FORM CPMTACT FPRM SECTION   -->
           
						<footer>&copy; Najibullah Jafari 2023</footer>
				</main>

				<script src="{{ asset('js/script.js') }}"></script>
		</body>
</html>
