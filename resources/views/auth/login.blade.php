<x-guest-layout>
    <section class="login-content">
        <div class="container">
            <div class="row block-card">

                <div class="black-box">
                    <div class="col-6">
                        <!-- Logo -->
                        <div class="mb-6">
                            <img src="{{ asset('assets/img/logo/InfoLiberLogo.svg') }}" alt="Informatio Libera"
                                class="w-32" height="140">
                        </div>

                        <h3 class="mb-6">
                            Connexion
                        </h3>

                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4 text-green-600" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}" class="space-y-5">
                            @csrf

                            <!-- Email -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <div class="input-icon-box">
                                    <i class="fa-solid fa-envelope"></i>
                                    <x-text-input id="email" class="" type="email" name="email"
                                        :value="old('email')" required autofocus />
                                </div>

                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                            </div>

                            <!-- Password -->
                            <div>
                                <x-input-label for="password" :value="__('Mot de passe')" />
                                <div class="input-icon-box">
                                    <i class="fa-solid fa-lock"></i>
                                    <x-text-input id="password" class="" type="password" name="password"
                                        required />
                                </div>

                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                            </div>

                            <!-- Remember -->
                            <div class="flex items-center justify-between text-sm">
                                <label for="remember_me" class="flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded text-blue-600"
                                        name="remember">
                                    <span class="ml-2 text-gray-600">Se souvenir de moi</span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">
                                        Mot de passe oublié ?
                                    </a>
                                @endif
                            </div>

                            <!-- Button -->
                            <button type="submit" class="btn">
                                Se connecter
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
