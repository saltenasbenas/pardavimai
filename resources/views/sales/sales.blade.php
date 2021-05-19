<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <table class="w-full" border="1">
                        <tbody>
                        <tr>
                            <td ><a href="{{route('sales.indexOrder', ['recommendation', $order])}}">{{trans('messages.recommendation')}}</a></td>
                            <td ><a href="{{route('sales.indexOrder', ['speed', $order])}}">{{trans('messages.service_time')}}</a></td>
                            <td ><a href="{{route('sales.indexOrder', ['contract_no', $order])}}">{{trans('messages.contrac_no')}}</a></td>
                            <td ><a href="{{route('sales.indexOrder', ['service', $order])}}">{{trans('messages.service')}}</a></td>
                            <td ><a href="{{route('sales.indexOrder', ['comments', $order])}}">{{trans('messages.comments')}}</a></td>
                            <td ><a href="{{route('sales.indexOrder', ['agreement', $order])}}">{{trans('messages.agreement')}}</a></td>
                            <td ><a href="{{route('sales.indexOrder', ['employee_id', $order])}}">{{trans('messages.employee_name')}}</a></td>

                        </tr>

                        </tbody>
                        @foreach($sales as $sale)
                            <tr>
                                <td>{{$sale->recommendation}}</td>
                                <td>{{$sale->speed}}</td>
                                <td>{{$sale->contract_no}}</td>
                                <td>{{$sale->service}}</td>
                                <td>{!!$sale->comments!!}</td>
                                <td>{{$sale->agreement}}</td>
                                <td>{{$sale->employee->name}}</td>
                                <td>
                                    <div class="mt-4">

{{--                                        <x-button>   <a href="{{route('sales.edit', $sale->id)}}">Edit</a>     </x-button>--}}
                                        <x-button>  <a href="{{route('sales.delete', $sale->id)}}">{{trans('messages.delete')}}</a>    </x-button>

                                    </div>

                                </td>
                            </tr>

                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
