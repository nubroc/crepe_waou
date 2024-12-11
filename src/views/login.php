<?php include __DIR__. '/partials/header.php'; ?>

<section class="flex items-center justify-center min-h-[80vh] bg-gray-100">
    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Se connecter</h2>
        
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="exemple@domaine.com" required>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 mt-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="********" required>
            </div>

            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <input type="checkbox" id="remember_me" name="remember_me" class="w-4 h-4 border-gray-300 rounded text-blue-500 focus:ring-2 focus:ring-blue-500">
                    <label for="remember_me" class="ml-2 text-sm text-gray-600">Se souvenir de moi</label>
                </div>
                <a href="#" class="text-sm text-blue-500 hover:underline">Mot de passe oublié ?</a>
            </div>

            <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-200">Se connecter</button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600">Pas encore de compte ? <a href="signup.php" class="text-blue-500 hover:underline">Créer un compte</a></p>
        </div>
    </div>
</section>

<?php include __DIR__. '/partials/footer.php'; ?>
