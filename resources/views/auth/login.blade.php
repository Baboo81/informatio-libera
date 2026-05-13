<x-guest-layout>
    <section class="login-content">
        <div class="container">
            <div class="row justify-content-center">

                <div class="black-box d-flex justify-content-center">
                    <div class="col-md-6 text-center">

                        <!-- Logo -->
                        <div class="mb-5">
                            <img src="{{ asset('assets/img/logo/InfoLiberLogo.svg') }}" alt="Informatio Libera"
                                class="img-fluid" style="width: 140px;">
                        </div>

                        <h3 class="mb-5">
                            Connexion
                        </h3>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4 text-success" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email -->
                            <div class="mb-4 text-start">

                                <x-input-label for="email" :value="__('Email')" />

                                <div class="input-icon-box">
                                    <i class="fa-solid fa-envelope"></i>

                                    <x-text-input id="email" type="email" name="email" :value="old('email')"
                                        required autofocus />
                                </div>

                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />

                            </div>

                            <!-- Password -->
                            <div class="mb-4 text-start">

                                <x-input-label for="password" :value="__('Mot de passe')" />

                                <div class="input-icon-box">
                                    <i class="fa-solid fa-lock"></i>

                                    <x-text-input id="password" type="password" name="password" required />
                                </div>

                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />

                            </div>

                            <!-- Remember -->
                            <div class="d-flex justify-content-between align-items-center mb-4">

                                <label for="remember_me" class="d-flex align-items-center">
                                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">

                                    <span class="ms-2 text-secondary">
                                        Se souvenir de moi
                                    </span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-primary text-decoration-none">
                                        Mot de passe oublié ?
                                    </a>
                                @endif

                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-center gap-3 mt-5">

                                <button type="submit" class="btn">
                                    Se connecter
                                </button>

                                <a href="{{ url('/') }}">
                                    <button class="btn" type="button">
                                        Retour accueil
                                    </button>
                                </a>

                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>
</x-guest-layout>
