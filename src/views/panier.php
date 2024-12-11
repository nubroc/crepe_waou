<?php include __DIR__. '/partials/header.php'; ?>

<section class="py-12 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-semibold text-gray-800 mb-8">Votre Panier</h2>
        
        <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="w-full table-auto text-left">
                <thead>
                    <tr class="border-b">
                        <th class="py-3 px-4 text-sm font-medium text-gray-600">Produit</th>
                        <th class="py-3 px-4 text-sm font-medium text-gray-600">Quantité</th>
                        <th class="py-3 px-4 text-sm font-medium text-gray-600">Prix Unitaire</th>
                        <th class="py-3 px-4 text-sm font-medium text-gray-600">Total</th>
                        <th class="py-3 px-4 text-sm font-medium text-gray-600">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="border-b">
                        <td class="py-4 px-4">
                            <div class="flex items-center">
                                <img src="../src/views/asset/voiture3.jpg" alt="Volkswagen GTI" class="w-20 h-20 object-cover mr-4">
                                <span class="font-medium text-gray-800">Volkswagen GTI</span>
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            <input type="number" value="1" min="1" class="w-16 p-2 border border-gray-300 rounded-md text-center">
                        </td>
                        <td class="py-4 px-4 text-gray-600">35 000 €</td>
                        <td class="py-4 px-4 text-gray-600">35 000 €</td>
                        <td class="py-4 px-4">
                            <button class="text-red-500 hover:underline">Supprimer</button>
                        </td>
                    </tr>

                    <tr class="border-b">
                        <td class="py-4 px-4">
                            <div class="flex items-center">
                                <img src="../src/views/asset/voiture2.jpg" alt="Citroën C4" class="w-20 h-20 object-cover mr-4">
                                <span class="font-medium text-gray-800">Citroën C4</span>
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            <input type="number" value="1" min="1" class="w-16 p-2 border border-gray-300 rounded-md text-center">
                        </td>
                        <td class="py-4 px-4 text-gray-600">30 000 €</td>
                        <td class="py-4 px-4 text-gray-600">30 000 €</td>
                        <td class="py-4 px-4">
                            <button class="text-red-500 hover:underline">Supprimer</button>
                        </td>
                    </tr>

                    <tr class="border-b">
                        <td class="py-4 px-4">
                            <div class="flex items-center">
                                <img src="../src/views/asset/voiture1.jpg" alt="Renault Mégane" class="w-20 h-20 object-cover mr-4">
                                <span class="font-medium text-gray-800">Renault Mégane</span>
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            <input type="number" value="1" min="1" class="w-16 p-2 border border-gray-300 rounded-md text-center">
                        </td>
                        <td class="py-4 px-4 text-gray-600">25 000 €</td>
                        <td class="py-4 px-4 text-gray-600">25 000 €</td>
                        <td class="py-4 px-4">
                            <button class="text-red-500 hover:underline">Supprimer</button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="mt-8 bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-6">Résumé du Panier</h3>
            <div class="flex justify-between mb-4">
                <span class="text-gray-700">Sous-total</span>
                <span class="text-gray-700">90 000 €</span>
            </div>
            <div class="flex justify-between mb-4">
                <span class="text-gray-700">Frais de livraison</span>
                <span class="text-gray-700">Gratuit</span>
            </div>
            <div class="flex justify-between mb-4">
                <span class="text-gray-700 font-semibold">Total</span>
                <span class="text-gray-700 font-semibold">90 000 €</span>
            </div>
            <div class="flex justify-end">
                <button class="bg-blue-500 text-white py-2 px-6 rounded-md hover:bg-blue-600 transition duration-200">Passer à la caisse</button>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__. '/partials/footer.php'; ?>
