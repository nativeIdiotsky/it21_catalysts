<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("WAZZUP MANANAP") }}
                </div>
            </div>

            <br><br>
            
            <!-- Button to direct to /patients page -->
            <div class="mt-4">
                <a href="{{ route('patients.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Go to Patients Page
                </a>
            </div>

        </div>
    </div>
    </x-app-layout>
