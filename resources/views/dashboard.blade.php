<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard 1') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <fieldset class="p-4">
                    <div>
                        <legend class="font-bold">Gender</legend>
                    </div>
                    <div class="inline-flex">
                        <input class="hidden" type="radio" id="male" value="male" name="gender" checked />
                        <label class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 cursor-pointer rounded-l" for="male">Male</label>
                        <input class="hidden" type="radio" id="female" value="female" name="gender" />
                        <label class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 cursor-pointer rounded-r" for="female">Female</label>

                    </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
