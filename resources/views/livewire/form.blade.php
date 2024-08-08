@livewireStyles

<div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-indigo-500 from-10% via-sky-500 via-30% to-emerald-500 to-90%  ">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md backdrop-blur-sm backdrop-brightness-50">
        <h2 class="text-2xl font-semibold mb-6 text-gray-900 text-center">Guestbook Form</h2>
        
        <form wire:submit.prevent="save" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" wire:model="name" id="name" placeholder="Enter your name" 
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>
            <div>
                <label for="no" class="block text-sm font-medium text-gray-700">Phone Number</label>
                <input type="text" wire:model="no" id="no" placeholder="Enter your number" 
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>
            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700">Address</label>
                <input type="text" wire:model="alamat" id="alamat" placeholder="Enter your address" 
                       class=" mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>
            
    <label for="gender" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
    <div class="relative mt-1">
    <select wire:model="gender" id="gender" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
        <option value="">Foto Kelamin Anda</option>
        <option value="laki-laki">Male</option>
        <option value="perempuan">Female</option>
        <option value="#">Mechanic</option>
    </select>
</div>

            
            
            <div class="sm:col-span-3">

          
        </div>

            <div class="flex justify-center mt-6">
                <button type="submit" 
                        class="transition ease-in-out delay-45 cursor-progress bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-1 bg-indigo-600 text-white px-4 py-2 rounded-full shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-600">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
@livewireScripts
