<div class="position-relative">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Login -->
            <div class="card p-2">
                <!-- Logo -->
                <div class="app-brand justify-content-center mt-5">
                    <a href="index.html" class="app-brand-link gap-2">
                        <span class="app-brand-text demo text-heading fw-semibold">REZZ</span>
                    </a>
                </div>
                <!-- /Logo -->

                <div class="card-body mt-2">
                    <h4 class="mb-2">Welcome 👋</h4>
                    <p class="mb-4">Login for dev your website rezz</p>

                    <form id="formAuthentication" class="mb-3" action="{{ route('login.process') }}" method="POST">
                        @csrf
                        <div class="form-floating form-floating-outline mb-3">
                            <input type="text" class="form-control" id="username" name="username"
                                placeholder="Input your username" value="{{ old('username') }}" autofocus required />
                            <label for="username">Username</label>
                        </div>
                        <div class="mb-3">
                            <div class="form-password-toggle">
                                <div class="input-group input-group-merge">
                                    <div class="form-floating form-floating-outline">
                                        <input type="password" id="password" class="form-control" name="password"
                                            placeholder="Password" required />
                                        <label for="password">Password</label>
                                    </div>
                                    <span class="input-group-text cursor-pointer">
                                        <i class="mdi mdi-eye-off-outline"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                        </div>
                    </form>
                    <p class="text-center">
                        {{-- <span>Belum punya akun?</span>
                        <a href="{{ route('register') }}">
                            <span>Buat akun</span>
                        </a>
                        <br>
                        <a href="{{ route('page') }}">
                            <span>Kembali ke halaman utama</span>
                        </a> --}}
                    </p>
                </div>
            </div>
            <!-- /Login -->
            <img src="{{ asset('dashboard/img/illustrations/tree-3.png') }}" alt="auth-tree"
                class="authentication-image-object-left d-none d-lg-block" />
            <img src="{{ asset('dashboard/img/illustrations/auth-basic-mask-light.png') }}"
                class="authentication-image d-none d-lg-block" alt="triangle-bg"
                data-app-light-img="illustrations/auth-basic-mask-light.png"
                data-app-dark-img="illustrations/auth-basic-mask-dark.png" />
            <img src="{{ asset('dashboard/img/illustrations/tree.png') }}" alt="auth-tree"
                class="authentication-image-object-right d-none d-lg-block" />
        </div>
    </div>
</div>
