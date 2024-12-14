@extends('layout.admin')

@section('title', 'À propos')

@section('content')
<div class="container mx-auto p-5 bg-orange-50">
    <h1 class="text-3xl font-bold mb-6">À Propos de Nous</h1>
    <p class="text-gray-700 mb-4">
        Bienvenue sur notre site ! Nous sommes une entreprise dédiée à fournir des solutions de haute qualité dans le domaine de l'Investissement. 
        Notre mission est de fournir des plateforme d'investisssement.
    </p>
    
    <h2 class="text-2xl font-semibold mb-4">Nos Valeurs</h2>
    <ul class="list-disc list-inside text-gray-700 mb-4">
        <li>Intégrité : Nous agissons avec honnêteté et transparence.</li>
        <li>Innovation : Nous cherchons toujours à améliorer et à innover.</li>
        <li>Excellence : Nous nous efforçons d'atteindre le plus haut niveau de qualité dans tout ce que nous faisons.</li>
    </ul>

    <h2 class="text-2xl font-semibold mb-4">Notre Équipe</h2>
    <p class="text-gray-700 mb-4">
        Notre équipe est composée de professionnels passionnés et expérimentés qui travaillent ensemble pour offrir les meilleures solutions à nos clients. 
        [Ajoutez des informations sur les membres clés de l'équipe, leurs rôles, etc.]
    </p>

    <div class="mt-8">
        <h2 class="text-3xl font-semibold mb-4">Contactez-Nous</h2>
        <p class="text-gray-700 mb-4">
            Prêt à discuter de votre projet ? <a href="/contact" class="text-blue-600 hover:underline">Contactez-nous</a> dès aujourd'hui pour une consultation gratuite !
        </p>
    </div>
</div>
@endsection
