<div>
@livewireStyles

<div class="flex items-center justify-center min-h-screen bg-[#262A33]">
    <div class="w-full max-w-md p-8 bg-[#20242B] rounded-lg shadow-lg backdrop-blur-sm backdrop-brightness-50 card-pop-up">
        {{-- <h2 class="mb-6 text-2xl font-semibold text-center text-gray-900">Guestbook Form</h2> --}}
        <img class="block mx-auto mb-6" src="images/deka.png" alt="">

        <form wire:submit.prevent="save" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-white">Name</label>
                <input type="text" wire:model="name" id="name" placeholder="Enter your name"
                       class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>
            <div>
                <label for="no" class="block text-sm font-medium text-white">Phone Number</label>
                <input type="text" wire:model="no" id="no" placeholder="Enter your number"
                       class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>
            <div>
                <label for="alamat" class="block text-sm font-medium text-white">Address</label>
                <input type="text" wire:model="alamat" id="alamat" placeholder="Enter your address"
                       class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
            </div>

            <label for="gender" class="block text-sm font-medium text-white">Jenis Kelamin</label>
            <div class="relative mt-1">
                <select wire:model="gender" id="gender" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                    <option value="">Jenis Kelamin Anda</option>
                    <option value="laki-laki">Male</option>
                    <option value="perempuan">Female</option>
                </select>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit"
                        class="px-4 py-2 text-white transition ease-in-out bg-blue-500 bg-indigo-600 rounded-full shadow-sm delay-45 cursor-progress hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-1 focus:outline-none focus:ring-2 focus:ring-indigo-600">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

@livewireScripts

<style>
    /* CSS untuk animasi pop up */
    .card-pop-up {
        opacity: 0;
        transform: scale(0.75);
        animation: popUp 0.7s ease-out forwards;
        /* Menggunakan delay untuk membuat card muncul setelah sedikit waktu */
        animation-delay: 0.3s;
    }

    /* Keyframe untuk animasi */
    @keyframes popUp {
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
</style>
</div>
