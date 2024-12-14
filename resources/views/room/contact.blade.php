@extends('layout.admin')

@section('title', 'Contact')

@section('content')
<div class="container mx-auto mt-10 p-5 bg-orange-50">
    <h1 class="text-4xl font-bold">Contactez-Nous</h1>

    <div class="mt-4 gap-4 flex flex-col md:flex-row">
        <div class="mt-4 flex-1">
            <h2 class="text-2xl font-semibold">Nous Contacter via WhatsApp</h2>
            <div class="bg-green-100 border-l-4 border-green-500 p-4 mt-2">
                <p>Pour toute question, vous pouvez nous contacter directement sur WhatsApp.</p>
                <a href="https://wa.me/1234567890" target="_blank" class="inline-block bg-green-500 text-white font-semibold py-2 px-4 rounded mt-2">Contacter sur WhatsApp</a>
            </div>
        </div>
        <div class="mt-4 flex-1">
            <h2 class="text-2xl font-semibold">Nous Contacter via Telegram</h2>
            <div class="bg-blue-100 border-l-4 border-blue-500 p-4 mt-2">
                <p>Pour toute question, vous pouvez nous contacter directement sur Telegram.</p>
                <a href="https:t.me/FastCashGroup237" target="_blank" class="inline-block bg-blue-500 text-white font-semibold py-2 px-4 rounded mt-2">Contacter sur Telegram</a>
            </div>
        </div>
    </div>

    <div class="mt-8">
        <h2 class="text-2xl font-semibold">Formulaire de Contact</h2>
        <form action="/contact" method="POST" class="bg-gray-100 p-4 rounded mt-2">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Nom :</label>
                <input type="text" id="name" name="name" required class="border border-gray-300 p-2 w-full rounded mt-1" placeholder="Votre nom">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email :</label>
                <input type="email" id="email" name="email" required class="border border-gray-300 p-2 w-full rounded mt-1" placeholder="Votre email">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700">Message :</label>
                <textarea id="message" name="message" required class="border border-gray-300 p-2 w-full rounded mt-1" rows="4" placeholder="Votre message"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded">Envoyer</button>
        </form>
    </div>
</div>
@endsection
