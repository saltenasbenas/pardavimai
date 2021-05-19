<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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


                        <form method="POST" action="{{route('sales.store')}}">

                        @csrf

                            <div>
                                <x-label for="recommendation"  >{{trans('messages.recommendation')}}</x-label>


                                <select name="recommendation" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">


                                        <option value="1" >1</option>
                                        <option value="2" >2</option>
                                        <option value="3" >3</option>
                                        <option value="4" >4</option>
                                        <option value="5" >5</option>
                                        <option value="6" >6</option>
                                        <option value="7" >7</option>
                                        <option value="8" >8</option>
                                        <option value="9" >9</option>
                                        <option value="10" >10</option>


                                </select>
                            </div>
                            <div>
                                <x-label for="speed"  >{{trans('messages.service_time')}}</x-label>

                                <select name="speed" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">


                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>
                                    <option value="5" >5</option>
                                    <option value="6" >6</option>
                                    <option value="7" >7</option>
                                    <option value="8" >8</option>
                                    <option value="9" >9</option>
                                    <option value="10" >10</option>


                                </select>
                            </div>
                            <div>
                                <x-label for="contract_no"  >{{trans('messages.contrac_no')}}</x-label>

                                <input id="contract_no" class="block mt-1 w-full"  type="text" name="contract_no" value="{{Request::old('contract_no')}}"  />
                            </div>
                            <div>
                                <x-label for="service"  >{{trans('messages.service')}}</x-label>

                                <select name="service" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">


                                    <option value="1" >1</option>
                                    <option value="2" >2</option>
                                    <option value="3" >3</option>
                                    <option value="4" >4</option>
                                    <option value="5" >5</option>
                                    <option value="6" >6</option>
                                    <option value="7" >7</option>
                                    <option value="8" >8</option>
                                    <option value="9" >9</option>
                                    <option value="10" >10</option>


                                </select>
                            </div>

                            <div>
                                <x-label for="agreement"  >{{trans('messages.agreement')}}</x-label>

                                <select name="agreement" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                                    <option value="Yes" >Yes</option>
                                    <option value="No" >No</option>
                                </select>
                            </div>
                            <div>
                                <x-label for="comments"  >{{trans('messages.comments')}}</x-label>


                                <textarea   id="mytextarea" rows="4" name="comments" cols="10" class="block mt-1 w-full" >
                {{Request::old('comments')}}</textarea>
                            </div>

                            <div>
                                <x-label for="employee_id"  >{{trans('messages.employee_name')}}</x-label>

                                <select name="employee_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                    @foreach ($employees as $employee)

                                        <option value="{{$employee->id}}" >{{$employee->name}}</option>

                                    @endforeach
                                </select>
                            </div>

                            <div class="mt-4"> <x-button>    {{trans('messages.submit')}}      </x-button></div>


                        </form>
                        <script>
                            tinymce.init({
                                selector: '#mytextarea'
                            });
                        </script>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
