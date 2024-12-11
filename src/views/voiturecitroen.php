<?php include __DIR__. '/partials/header.php'; ?>

<section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <div class="w-full h-96 bg-gray-200 rounded-lg overflow-hidden">
                <img src="../src/views/asset/voiture2.jpg" alt="Citroën C4" class="w-full h-full object-cover">
            </div>

            <div>
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Citroën C4</h2>
                <p class="text-xl text-gray-600 mb-4">Prix: 30 000 €</p>

                <p class="text-gray-800 mb-6">La Citroën C4 combine confort, style et technologies de pointe pour une expérience de conduite agréable. Idéale pour les trajets urbains et les longs voyages grâce à son espace intérieur et sa conduite fluide.</p>

                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Caractéristiques</h3>
                <ul class="list-disc pl-5 text-gray-600 mb-6">
                    <li>Moteur 1.6L Essence</li>
                    <li>Transmission automatique à 6 vitesses</li>
                    <li>Système de navigation avec écran tactile</li>
                    <li>Climatisation bizone</li>
                    <li>Radar de stationnement avant et arrière</li>
                    <li>Régulateur de vitesse adaptatif</li>
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
                        <p class="text-gray-800 font-semibold">Alexandre Durand</p>
                        <p class="text-gray-600">★★★★★</p>
                        <p class="text-gray-600">"Voiture très confortable et fiable, je la recommande vivement."</p>
                    </div>
                </div>

                <div class="flex items-center">
                    <div class="w-10 h-10 bg-gray-300 rounded-full mr-4"></div>
                    <div>
                        <p class="text-gray-800 font-semibold">Sophie Lefevre</p>
                        <p class="text-gray-600">★★★★☆</p>
                        <p class="text-gray-600">"Bon confort et bonnes performances, mais j'aurais aimé un moteur plus puissant."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__. '/partials/footer.php'; ?>
