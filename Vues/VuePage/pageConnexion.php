<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
        <div>
            <img class="mx-auto h-12 w-auto" src="/assets/cake.svg" alt="Quaso">
            <h2 class="my-20 text-center text-3xl font-bold tracking-tight text-gray-900">Connectez-vous</h2>
        </div>
        <form class="mt-8 space-y-6" action="/pageConnexion/connexion" method="POST">
            <input type="hidden" name="remember" value="true">
            <div class="-space-y-px rounded-md shadow-sm">
                <div>
                    <label for="email-address" class="sr-only">Adresse Mail ou nom Utilisateur</label>
                    <input id="email-address" name="email" type="email" autocomplete="email" required
                           class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                           placeholder="Email address">
                </div>
                <div>
                    <label for="password" class="sr-only">Mot de Passe</label>
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                           class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                           placeholder="Password">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <div class="text-sm flex items-start">
                    <a href="#" class="font-medium text-[#C87B00] hover:text-amber-600">Mot de passe oublié</a>
                </div>

                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-[#C87B00] py-2 px-4 text-sm font-medium text-white hover:bg-amber-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Valider
                    </button>
                </div>

            </div>
                <?php
                        echo '<h3 style="color:#FF0000";>'. $A_vue['error'] .'.</h3>';
                ?>             
        </form>
    </div>
</div>