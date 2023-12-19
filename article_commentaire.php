<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between items-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900">
                Gestion des articles
            </h2>
            <a href="#" class="inline-flex items-center px-3 py-1.5 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                Créer un article
            </a>
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row border-b py-4 items-center">
                <!-- Image -->
                <div class="mx-auto md:mx-4 md:w-[200px] w-3/4 shrink-0 grow-0 mb-4 md:mb-0">
                    <img src="https://source.unsplash.com/random/150x100" alt="Miniature Article" class="w-full h-auto rounded">
                </div>
                <!-- Date, Titre, Description -->
                <div class="w-full px-4">
                    <div class="text-gray-600">28/06/23</div>
                    <div class="text-xl sm:text-2xl font-bold my-4">Les mycoses à cause de la danse</div>
                    <div class="text-gray-500">
                    Voici une illustration qui met l'accent sur la prévention et l'hygiène pour éviter les infections fongiques liées à la danse. Elle montre des chaussures de danse et des chaussettes placées à côté de sprays et de crèmes antifongiques, dans un studio de danse, soulignant l'importance des soins des pieds chez les danseurs. Cette image vise à promouvoir la sensibilisation et les pratiques saines dans le milieu de la danse.
                    </div>
                </div>
                <!-- CRUD Buttons -->
                <div class="w-full mt-4 flex md:flex-col flex-row justify-center gap-4 items-center">
                    <a href="#" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Lire</a>
                    <a href="#" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Éditer</a>
                    <a href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</a>
                </div>
            </div>
            <!-- Commentaires -->
            <div class="mt-4 bg-gray-100 p-4 rounded border border-black">
                <h3 class="text-2xl font-bold">Commentaires</h3>
                <ul class="mt-4">
                    <li class="mb-4">
                        <div class="flex flex-col md:flex-row items-center justify-between">
                            <div>
                                <div class="text-gray-600">28/06/23</div>
                                <div class="text-lg font-bold">pied_puant</div>
                                <div class="text-gray-500">j'ai souffert...
                                </div>
                                <div class="mt-2">
                                    Note : 4/5
                                </div>
                            </div>
                            <div class="mt-4 lg:mt-0">
                                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Supprimer</button>
                                <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded ml-2">Éditer</button>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</body>
</html>