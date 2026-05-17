<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>


    
  
  
  <article class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    <div class="text-base text-gray-500">
      <a href="#">{{ $post['author'] }}</a>| 1 Mei 2026
    </div>
    <p class="my-4 font-light">{{ $post['body'] }}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo Back to Post</a>

  </article>
  
</x-layout>