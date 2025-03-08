<x-layout>
  <x-slot:title>{{$title}}</x-slot:title>

  <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md">
        <div class="flex justify-between items-center mb-5 text-gray-500">
            <a href="/categories/{{$post -> category -> slug}}" class="bg-{{$post -> category -> color}}-300 text-{{$post -> category -> color}}-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
              {{$post -> category -> name}}
            </a>
            <span class="text-sm bg-primary-100">{{$post['created_at']->diffForHumans()}}</span>
        </div>
        <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">{{$post['title']}}</h2>
        <p class="mb-5 font-light text-lg leading-8 tracking-wide" style="font-family:'Helvetica'">{{$post['body']}}</p>
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <img class="w-7 h-7 rounded-full" src="../img/Iroha.jpg" alt="{{$post -> author -> name}} avatar" />
                <a href="/authors/{{$post -> author -> username}}" class="font-medium ">
                  {{$post -> author -> name}}
                </a>
            </div>
            <a href="/posts" class="inline-flex items-center font-medium text-blue-600  hover:underline">
              Back To Blog &laquo;
            </a>
        </div>
    </article>   

</x-layout>