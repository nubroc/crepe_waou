<?php include __DIR__. '/partials/header.php'; ?>

<section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-semibold text-gray-800 mb-8">Nos Voitures à Vendre</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="../src/views/asset/voiture1.jpg" alt="Renault Mégane" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Renault Mégane</h3>
                    <p class="text-gray-600">Prix: 25 000 €</p>
                    <p class="text-gray-600">Année: 2020</p>
                    <a href="/crepe_waou/public/voituremegane" class="text-blue-500 hover:underline mt-4 inline-block">Voir plus</a>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="../src/views/asset/voiture2.jpg" alt="Citroën C4" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Citroën C4</h3>
                    <p class="text-gray-600">Prix: 30 000 €</p>
                    <p class="text-gray-600">Année: 2021</p>
                    <a href="/crepe_waou/public/voiturecitroen" class="text-blue-500 hover:underline mt-4 inline-block">Voir plus</a>
                </div>
            </div>

            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="../src/views/asset/voiture3.jpg" alt="Volkswagen GTI" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold text-gray-800">Volkswagen GTI</h3>
                    <p class="text-gray-600">Prix: 35 000 €</p>
                    <p class="text-gray-600">Année: 2022</p>
                    <a href="/crepe_waou/public/voituregti" class="text-blue-500 hover:underline mt-4 inline-block">Voir plus</a>
                </div>
            </div>

        </div>

        <div class="mt-8 text-center">
            <a href="/crepe_waou/public/catalogue" class="text-blue-500 hover:underline">Voir plus de voitures</a>
        </div>
    </div>
</section>

<?php include __DIR__. '/partials/footer.php'; ?>
