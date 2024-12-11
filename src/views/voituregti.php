<?php include __DIR__. '/partials/header.php'; ?>

<section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <div class="w-full h-96 bg-gray-200 rounded-lg overflow-hidden">
                <img src="../src/views/asset/voiture3.jpg" alt="Volkswagen GTI" class="w-full h-full object-cover">
            </div>

            <div>
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Volkswagen GTI</h2>
                <p class="text-xl text-gray-600 mb-4">Prix: 35 000 €</p>

                <p class="text-gray-800 mb-6">La Volkswagen GTI est une voiture sportive offrant des performances exceptionnelles avec un design audacieux. Parfaite pour les passionnés de conduite et ceux recherchant des sensations fortes sur la route.</p>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Caractéristiques</h3>
                <ul class="list-disc pl-5 text-gray-600 mb-6">
                    <li>Moteur 2.0L TSI</li>
                    <li>Transmission manuelle à 6 vitesses</li>
                    <li>Système de sonorisation premium</li>
                    <li>Climatisation automatique</li>
                    <li>Système de conduite dynamique</li>
                    <li>Volant sport en cuir</li>
                </ul>

                <div class="flex items-center space-x-4 mb-6">
                    <span class="text-lg font-semibold text-gray-800">Quantité:</span>
                    <input type="number" value="1" min="1" class="w-16 p-2 border border-gray-300 rounded-md text-center">
                </div>

                <div class="flex space-x-4">
                    <button class="bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-600 transition duration-200">
                        Ajouter au panier
                    </button>
                    <a href="#" class="bg-gray-200 text-gray-700 py-2 px-6 rounded-md hover:bg-gray-300 transition duration-200">
                        Ajouter à la liste de souhaits
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-12 bg-white p-8 rounded-lg shadow-lg">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Avis des clients</h3>
            <div class="space-y-4">

                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gray-300 rounded-full mr-4"></div>
                    <div>
                        <p class="text-gray-800 font-semibold">Paul Martin</p>
                        <p class="text-gray-600">★★★★★</p>
                        <p class="text-gray-600">"Un pur plaisir de conduite, un vrai go-kart pour la route !"</p>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gray-300 rounded-full mr-4"></div>
                    <div>
                        <p class="text-gray-800 font-semibold">Lucie Bernard</p>
                        <p class="text-gray-600">★★★★☆</p>
                        <p class="text-gray-600">"Excellente voiture, mais consomme un peu plus que prévu."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__. '/partials/footer.php'; ?>
