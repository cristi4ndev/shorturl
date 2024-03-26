<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create New Link') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <form >
                    <div class="min-w-72 min-h-72 gap-8 flex flex-col justify-center items-center">
                        <div class="gap-10 flex items-center w-full pl-16 pr-16 ">
                            <label class="font-bold w-20" for="original_link">Destination</label>
                            <input class="flex-1" placeholder="https://example.com/url-too-big" type="text" name="original_link">
                        </div>
                        <div class="gap-10 flex items-center w-full pl-16 pr-16">
                            <label class="font-bold w-20" for="shorten_link">Short link</label>
                            <select disabled>
                                <option disabled selected >short-url.com/</option>
                            </select>
                            <input placeholder="desired-short-url" class="flex-1" type="text" name="shorten_link">
                        </div>
                        
                        <input class="bg-red-400 rounded-lg py-2 px-4 text-white" type="submit" value="Create">
                    </div>
                    
                </form>

            </div>

            
        </div>
    </div>
        <x-banner />
</x-app-layout>
