<?php include __DIR__. '/partials/header.php'; ?>

<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">

        <div class="relative bg-blue-500 text-white rounded-lg overflow-hidden mb-8">
            <img src="../src/views/asset/bannierevoiture.png" alt="Bannière" class="w-full h-64 object-cover">
            <div class="absolute top-0 left-0 right-0 bottom-0 flex items-center justify-center text-center bg-black bg-opacity-50">
                <h2 class="text-3xl font-semibold">Nos Voitures à Vendre</h2>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="../src/views/asset/voiture1.jpg" alt="Voiture 1" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Renault Mégane</h3>
                    <p class="text-gray-600">Prix: 25 000 €</p>
                    <p class="text-gray-600">Année: 2020</p>
                    <a href="/crepe_waou/public/voituremegane" class="text-blue-500 hover:underline">Voir plus</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="../src/views/asset/voiture2.jpg" alt="Voiture 2" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Citroën C4</h3>
                    <p class="text-gray-600">Prix: 30 000 €</p>
                    <p class="text-gray-600">Année: 2021</p>

                    <a href="/crepe_waou/public/voiturecitroen" class="text-blue-500 hover:underline">Voir plus</a>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="../src/views/asset/voiture3.jpg" alt="Voiture 3" class="w-full h-56 object-cover">
                <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800">Volkswagen GTI</h3>
                <p class="text-gray-600">Prix: 35 000 €</p>
                <p class="text-gray-600">Année: 2022</p>

                    <a href="/crepe_waou/public/voituregti" class="text-blue-500 hover:underline">Voir plus</a>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="/crepe_waou/public/catalogue" class="text-xl font-semibold text-blue-500 hover:underline">Voir toutes les voitures</a>
        </div>
    </div>
</section>

<?php include __DIR__. '/partials/footer.php'; ?>
