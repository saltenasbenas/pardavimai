<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                <hr>

                @if  ($errors->any())
                    <div class="p-6 bg-white border-b border-gray-200 mb-2">

                        <ul>

                            @foreach ($errors->all() as $error)
                                <li> {{$error}}</li>
                            @endforeach
                        </ul>

                    </div>
                @endif



                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full" border="1">


                        <form method="post" action="{{route('sales.update', $sale->id)}}">

                        @csrf
                        @method('PUT')





                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
