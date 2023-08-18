@if (session()->has('message'))
<div x-data="{show:true}" x-init="setTimeout(()=>show=false,3000)" x-show="show" class="fixed top-0 left-1/2 text-white bg-green-500 px-48 py-2 transform -translate-x-1/2">
    {{session('message')}}
</div>
    
@endif
