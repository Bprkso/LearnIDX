<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
@foreach (  $posts as $post )
  
<article class="py-8 max-w-screen-md border-b border-gray-300">
  <a href="/posts/{{ $post['id'] }}" class="hover:underline">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
  </a>

    <div class="text-base text-gray-500">
    <a href="#">{{ $post['author'] }}</a> | 1 Januari 2024
  </div>
  <p class="my-4 font-normal">{{ Str::limit($post['body'], 100) }}</p>
  <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Baca Selengkapnya &raquo;</a>
</article>
@endforeach

</x-layout> 