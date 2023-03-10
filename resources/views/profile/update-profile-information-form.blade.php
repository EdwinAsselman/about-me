<x-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview" style="display: none;">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-secondary-button>
                @endif

                <x-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-4 sm:col-start-1 sm:col-end-3">
            <x-label for="name" value="{{ __('Name') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-input-error for="name" class="mt-2" />
        </div>

        <!-- Age -->
        <div class="col-span-4 sm:col-start-3 sm:col-end-5">
            <x-label for="age" value="{{ __('Age') }}" />
            <x-input id="age" type="number" class="mt-1 block w-full" wire:model.defer="state.age" autocomplete="age" />
        </div>

        <!-- Email -->
        <div class="col-span-4 sm:col-span-4">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" autocomplete="username" />
            <x-input-error for="email" class="mt-2" />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && ! $this->user->hasVerifiedEmail())
                <p class="text-sm mt-2">
                    {{ __('Your email address is unverified.') }}

                    <button type="button" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click.prevent="sendEmailVerification">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if ($this->verificationLinkSent)
                    <p v-show="verificationLinkSent" class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            @endif
        </div>

        <!-- Gender -->
        <div class="col-span-4 sm:col-start-1 sm:col-end-2">
            <x-label for="gender" value="{{ __('Gender') }}" />
            <select id="gender" type="dropdown" class="mt-1 block w-full" wire:model.defer="state.gender" autocomplete="gender">
                <option value="" disabled>Select a gender...</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        
        <!-- Residence -->
        <div class="col-span-4 sm:col-start-2 sm:col-end-5">
            <x-label for="residence" value="{{ __('Residence') }}" />
            <x-input id="residence" type="text" class="mt-1 block w-full" wire:model.defer="state.residence" autocomplete="residence" />
        </div>

        <!-- Job -->
        <div class="col-span-4 sm:col-start-1 sm:col-end-5">
            <x-label for="job" value="{{ __('Job') }}" />
            <x-input id="job" type="text" class="mt-1 block w-full" wire:model.defer="state.job" autocomplete="job" />
        </div>

        <!-- Website -->
        <div class="col-span-4 sm:col-start-1 sm:col-end-5">
            <x-label for="website" value="{{ __('Website') }}" />
            <x-input id="website" type="url" class="mt-1 block w-full" wire:model.defer="state.website" autocomplete="website" />
            <x-input-error for="website" class="mt-2" />
        </div>

        <!-- About me -->
        <div class="col-span-4 sm:col-start-1 sm:col-end-5">
            <x-label for="about_me" value="{{ __('About me') }}" />
            <x-textarea rows="4" id="about_me" type="url" class="mt-1 block w-full" wire:model.defer="state.about_me" autocomplete="about_me" />
            <x-input-error for="about_me" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
