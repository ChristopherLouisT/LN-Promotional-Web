@props(['active' => false])

<a  {{$attributes}} class="{{ $active
? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-green-500 hover:text-white hover:font-bold'}} 
rounded-md px-3 py-2 text-[18px] font-[Urbanist] font-medium" aria-current="{{ $active ? 'page' : false}}">{{$slot}}</a>
