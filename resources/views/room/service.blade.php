@extends('layout.admin')

@section('title', 'Services')

@section('content')
<div class="container mx-auto p-5 bg-orange-50">
    <h1 class="text-4xl font-bold">Nos Services</h1>
    <p class="mt-4 text-gray-700">
        Nous offrons une gamme complète de services conçus pour répondre aux besoins de nos clients. Notre équipe d'experts est prête à fournir des solutions personnalisées pour vous aider à atteindre vos objectifs.
    </p>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white shadow-md rounded-lg p-6 flex">
            <div class="flex-1">
                <h2 class="text-2xl font-semibold mb-2">1. FlashCash</h2>
                <p class="text-gray-700">
                    Notre service de consultation vous aide à identifier vos besoins spécifiques et à élaborer des plans d'action efficaces. Que vous soyez une petite entreprise ou une grande organisation, nous sommes là pour vous guider.
                </p>
            </div>
            <img src="/img/logo2.jpg" alt="Flashcash" class="w-32 h-32 object-cover rounded-full ml-4">
        </div>

        <div class="bg-white shadow-md rounded-lg p-6 flex">
            <div class="flex-1">
                <h2 class="text-2xl font-semibold mb-2">2. Développement de Solutions</h2>
                <p class="text-gray-700">
                    Nous développons des solutions sur mesure adaptées à votre secteur d'activité. Nos produits sont conçus pour être à la fois innovants et efficaces, vous aidant à rester compétitif sur le marché.
                </p>
            </div>
            <img src="https://via.placeholder.com/150" alt="Développement de Solutions" class="w-32 h-32 object-cover rounded-full ml-4">
        </div>

        <div class="bg-white shadow-md rounded-lg p-6 flex">
            <div class="flex-1">
                <h2 class="text-2xl font-semibold mb-2">3. Support Technique</h2>
                <p class="text-gray-700">
                    Notre équipe de support technique est disponible 24/7 pour vous aider avec tous vos problèmes techniques. Nous nous engageons à assurer le bon fonctionnement de vos systèmes.
                </p>
            </div>
            <img src="https://via.placeholder.com/150" alt="Support Technique" class="w-32 h-32 object-cover rounded-full ml-4">
        </div>

        <div class="bg-white shadow-md rounded-lg p-6 flex">
            <div class="flex-1">
                <h2 class="text-2xl font-semibold mb-2">4. Formation</h2>
                <p class="text-gray-700">
                    Nous offrons des sessions de formation adaptées à vos équipes pour garantir une utilisation optimale de nos produits et services. Nos formateurs expérimentés partagent leurs connaissances pour améliorer vos compétences.
                </p>
            </div>
            <img src="https://via.placeholder.com/150" alt="Formation" class="w-32 h-32 object-cover rounded-full ml-4">
        </div>
    </div>
</div>
@endsection
