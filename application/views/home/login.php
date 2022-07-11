<div class="container-fluid p-0">
    <div class="row g-0">
        <!-- Start: Left Panel -->
        <div class="col-xl-8">
            <div class="auth-full-bg pt-lg-5 p-4">
                <div class="w-100">
                    <div class="bg-overlay"></div>
                    <div class="d-flex h-100 flex-column">
                        <div class="p-4 mt-auto">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <div class="text-center">
                                        <i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i>
                                        <h4 id="quotes">
                                        </h4>
                                        <script>
                                        const quoteAPI = async () => {
                                            const response = await fetch(
                                                "https://api.quotable.io/random");
                                            const quote = await response.json();
                                            const content = quote["content"];
                                            const author = quote["author"];
                                            document.getElementById(
                                                    "quotes"
                                                ).innerHTML =
                                                `<span class="text-primary">${content}</span> \n - ${author}`;
                                        };
                                        quoteAPI()
                                        </script>
                                        <i class="bx bxs-quote-alt-right text-primary h1 align-middle me-3"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Left Panel -->
        <!-- Start: Right Panel -->
        <div class="col-xl-4">
            <div class="auth-full-page-content p-md-5 p-4">
                <div class="w-100">
                    <div class="d-flex flex-column h-100">
                        <div class="mb-4 mb-md-5">
                            <a href="/ebasa" class="d-block auth-logo">
                                <img src="<?php echo base_url('assets/images') ?>/logo-dark.png" alt="" height="18">
                            </a>
                        </div>
                        <div class="my-auto">

                            <div>
                                <h5 class="text-primary">Welcome Back!</h5>
                                <p class="text-muted">Sign in to continue to EBASA.</p>
                            </div>

                            <div class="mt-4">
                                <!-- Login Form Start here -->
                                <form id="loginForm" name="loginForm">
                                    <div class="mb-3">
                                        <!-- Email -->
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            data-parsley-required="true" data-parsley-type="email"
                                            placeholder="Enter Email Address">
                                    </div>
                                    <div class="mb-3">
                                        <div class="float-end">
                                            <a href="/ebasa/forgot-password" class="text-muted">Forgot
                                                password?</a>
                                        </div>
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <!-- Password -->
                                            <input for="password" type="Password" class="form-control"
                                                placeholder="Enter password" aria-label="Password"
                                                data-parsley-required="true" aria-describedby="password-addon"
                                                id="password" name="password">
                                            <button class="btn btn-light " type="button" id="password-addon"><i
                                                    class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember-check">
                                        <label class="form-check-label" for="remember-check">
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Log
                                            In</button>
                                    </div>
                                </form>
                                <div class="mt-5 text-center">
                                    <p>Don't have an account? <a href="/ebasa/signup" class="fw-medium text-primary">
                                            Signup now </a></p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mt-md-5 text-center">
                            <p class="mb-0">© <script>
                                document.write(new Date().getFullYear())
                                </script> EBASA. Created by ADET 3-1</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Right Panel -->
    </div>
    <!-- end row -->
</div>
<!-- end container-fluid -->