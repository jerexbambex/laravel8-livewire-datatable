<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                <livewire:datatable model="App\Models\User" exclude="password,remember_token,two_factor_secret,two_factor_recovery_codes,current_team_id,profile_photo_path" paginate="20" />
            </div>
        </div>
    </div>
</x-app-layout>
