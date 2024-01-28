<x-guest-layout>

<div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">

    <form method="POST" action="{{ route('login') }}" class=" dz-form pb-3">
        @csrf
            <h3 class="form-title m-t0">Login</h3>
            <div class="dz-separator-outer m-b5">
                <div class="dz-separator bg-primary style-liner"></div>
            </div>
            <p>Enter your e-mail address and your password. </p>
            <div class="form-group mb-3">
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autofocus autocomplete="username" >

                @error('email')
                <div style="color: #FF5E5E; margin-top: 5px">
                    {{ $message }}
                </div>
                @enderror


            </div>
            <div class="form-group mb-3">
                <input id="password" type="password" name="password" class="form-control" required autocomplete="current-password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group text-left mb-5 forget-main">
                <button type="submit" class="btn btn-primary">Sign Me In</button>
                <span class="form-check d-inline-block">
                    <input type="checkbox" class="form-check-input" id="check1" name="example1">
                    <label class="form-check-label" for="check1">Remember me</label>
                </span>
                <button class="nav-link m-auto btn tp-btn-light btn-primary forget-tab " id="nav-forget-tab" data-bs-toggle="tab" data-bs-target="#nav-forget" type="button" role="tab" aria-controls="nav-forget" aria-selected="false">Forget Password ?</button>
            </div>
            <div class="dz-social ">
                <h5 class="form-title fs-20">Sign In With</h5>
                <ul class="dz-social-icon dz-border dz-social-icon-lg text-white">
                    <li><a target="_blank" href="https://www.facebook.com/" class="fab fa-facebook-f btn-facebook"></a></li>
                    <li><a target="_blank" href="https://www.google.com/" class="fab fa-google-plus-g btn-google-plus"></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/" class="fab fa-linkedin-in btn-linkedin"></a></li>
                    <li><a target="_blank" href="https://twitter.com/" class="fab fa-twitter btn-twitter"></a></li>
                </ul>
            </div>
        </form>
        <div class="text-center bottom">
            <button class="btn btn-primary button-md btn-block" id="nav-sign-tab" data-bs-toggle="tab" data-bs-target="#nav-sign" type="button" role="tab" aria-controls="nav-sign" aria-selected="false">Create an account</button>

        </div>
  </div>
</x-guest-layout>
