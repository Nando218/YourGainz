<x-app-layout>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="sm:p-8 sm:rounded-lg bg-white bg-opacity-10 p-8 rounded-2xl shadow-md filter backdrop-blur-sm">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="sm:p-8 sm:rounded-lg bg-white bg-opacity-10 p-8 rounded-2xl shadow-md filter backdrop-blur-sm">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="sm:p-8 sm:rounded-lg bg-white bg-opacity-10 p-8 rounded-2xl shadow-md filter backdrop-blur-sm">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
