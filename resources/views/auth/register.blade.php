<x-guest-layout>
    <section class="login-content">
        <div class="container">
            <div class="row block-card">

                <div class="black-box">
                    <div class="col-6">

                        <!-- Logo -->
                        <div class="mb-6">
                            <img src="{{ asset('assets/img/logo/InfoLiberLogo.svg') }}"
                                 alt="Informatio Libera"
                                 class="w-32" height="140">
                        </div>

                        <h3 class="mb-6">
                            Inscription
                        </h3>

                        <form method="POST" action="{{ route('register') }}" class="space-y-5">
                            @csrf

                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Nom')" />
                                <div class="input-icon-box">
                                    <i class="fa-solid fa-user"></i>
                                    <x-text-input id="name" type="text" name="name"
                                        :value="old('name')" required autofocus />
                                </div>
                                <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500" />
                            </div>

                            <!-- Email -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <div class="input-icon-box">
                                    <i class="fa-solid fa-envelope"></i>
                                    <x-text-input id="email" type="email" name="email"
                                        :value="old('email')" required />
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
                            </div>

                            <!-- Password -->
                            <div>
                                <x-input-label for="password" :value="__('Mot de passe')" />
                                <div class="input-icon-box">
                                    <i class="fa-solid fa-lock"></i>
                                    <x-text-input id="password" type="password" name="password" required />
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
                            </div>

                            <!-- Confirm Password -->
                            <div>
                                <x-input-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />
                                <div class="input-icon-box">
                                    <i class="fa-solid fa-lock"></i>
                                    <x-text-input id="password_confirmation" type="password"
                                        name="password_confirmation" required />
                                </div>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500" />
                            </div>

                            <!-- Button -->
                            <div class="my-5">
                                <button type="submit" class="btn">
                                    S'inscrire
                                </button>
                            </div>
                        </form>

                        <!-- Lien vers login -->
                        <div class="text-center my-3">
                            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                                Déjà inscrit ? Se connecter
                            </a>
                        </div>

                        <!-- Retour accueil -->
                        <div class="text-center my-3">
                            <a href="{{ url('/') }}">
                                <button class="btn" type="button">
                                    Retour vers l'accueil
                                </button>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</x-guest-layout>
