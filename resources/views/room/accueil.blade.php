@extends('layout.admin')

@section('title', 'Accueil')

@section('content')
<div class="container mx-auto p-10 bg-orange-50">
    <div class="container mx-auto p-6 mt-10 flex flex-col md:flex-row bg-orange-100 rounded-lg shadow-lg">
        <div class="w-full md:w-1/2 pr-0 md:pr-4 mb-6 md:mb-0">
            <img src="img/img2.jpg" alt="Image inspirante" class="w-full h-auto rounded-lg shadow-lg">
        </div>
        <div class="w-full md:w-1/2 pl-0 md:pl-4">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Bienvenue chez Notre Entreprise</h1>
            <p class="text-lg md:text-xl mb-4">
                Chez <strong>Notre Entreprise d'Investissement</strong>, nous croyons que chaque décision financière peut transformer votre avenir. Notre mission est de vous guider à travers un monde d'opportunités d'investissement, en vous fournissant des conseils d'experts et des stratégies adaptées à vos besoins.
            </p>
            <p class="text-lg md:text-xl mb-4">
                Nous savons que chaque client est unique. Que vous visiez la retraite, l'investissement immobilier ou la diversification de votre portefeuille, nous sommes là pour vous accompagner à chaque étape.
            </p>
            <p class="text-lg md:text-xl">
                Ensemble, bâtissons un avenir prospère. Faites confiance à notre expertise pour réaliser vos rêves financiers et atteindre vos objectifs à long terme.
            </p>
        </div>
    </div>

    <style>
        @media (max-width: 768px) {
            .container {
                padding: 1rem; /* Ajuste le rembourrage pour les petits écrans */
            }
            h1 {
                font-size: 2rem; /* Taille de police pour les petits écrans */
            }
            p {
                font-size: 1rem; /* Taille de police pour les petits écrans */
            }
        }
    </style>

    <div class="mt-8 text-white">
        <div class="bg-orange-300 shadow-md rounded-lg p-6">
            <h2 class="text-3xl font-semibold mb-4">Nos Services</h2>
            <p class="text-gray-700 mb-4">
                Découvrez notre large gamme de services, incluant :
            </p>
            <ul class="list-disc list-inside text-gray-700 mb-4">
                <li>Consultation personnalisée</li>
                <li>Développement de solutions sur mesure</li>
                <li>Support technique 24/7</li>
                <li>Formation pour vos équipes</li>
                <li>Plateforme d'investissement en ligne</li>
            </ul>
        </div>
    </div>

    <div class="mt-8">
        <div class="bg-orange-200 shadow-md rounded-lg p-4 md:p-6">
            <h2 class="text-2xl md:text-3xl font-semibold mb-4">Témoignages de Clients</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/100" alt="Client 1" class="rounded-full mb-2 w-24 h-24 md:w-32 md:h-32 object-cover">
                    <blockquote class="border-l-4 border-blue-600 pl-3 md:pl-4 italic text-gray-700 text-center text-sm md:text-base">
                        "Perfect Code a transformé notre façon de travailler. Leur équipe est réactive et très professionnelle !"
                    </blockquote>
                    <p class="mt-1 font-semibold text-sm md:text-base">- Client Satisfait</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/100" alt="Client 2" class="rounded-full mb-2 w-24 h-24 md:w-32 md:h-32 object-cover">
                    <blockquote class="border-l-4 border-blue-600 pl-3 md:pl-4 italic text-gray-700 text-center text-sm md:text-base">
                        "Grâce à leurs solutions sur mesure, nous avons amélioré notre productivité de manière significative."
                    </blockquote>
                    <p class="mt-1 font-semibold text-sm md:text-base">- Autre Client Satisfait</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="https://via.placeholder.com/100" alt="Client 3" class="rounded-full mb-2 w-24 h-24 md:w-32 md:h-32 object-cover">
                    <blockquote class="border-l-4 border-blue-600 pl-3 md:pl-4 italic text-gray-700 text-center text-sm md:text-base">
                        "Un service exceptionnel qui nous a permis de grandir."
                    </blockquote>
                    <p class="mt-1 font-semibold text-sm md:text-base">- Un Autre Client Satisfait</p>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-3xl font-semibold mb-4">Contactez-Nous</h2>
        <p class="text-gray-700 mb-4">
            Prêt à discuter de votre projet ? <a href="/contact" class="text-blue-600 hover:underline">Contactez-nous</a> dès aujourd'hui pour une consultation gratuite !
        </p>
    </div>
</div>
@endsection
