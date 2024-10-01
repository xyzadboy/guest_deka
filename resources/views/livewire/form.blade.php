<div>
@livewireStyles

<div class="flex items-center justify-center min-h-screen bg-[#262A33] relative">
    <!-- Kotak-kotak background -->
    <div class="absolute inset-0 pointer-events-none opacity-60 bg-grid"></div>

    <div class="relative w-full max-w-md p-8 bg-[#20242B] rounded-lg shadow-lg backdrop-blur-sm backdrop-brightness-50 card-pop-up">
        <img class="block mx-auto mb-6" src="images/deka.png" alt="">

        <form wire:submit.prevent="save" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-white">Name</label><br>
                <input type="text" wire:model="name" id="name" placeholder="Enter your name"
                class="w-full px-4 py-2 leading-tight text-white bg-[#20242B] border-2  rounded-full appearance-none focus:outline-none focus:bg-[#20242B] focus:border-[#5E6DFF]">
            </div>
            <div>
                <label for="no" class="block text-sm font-medium text-white">Phone Number</label><br>
                <input type="text" wire:model="no" id="no" placeholder="Enter your number"
                class="w-full px-4 py-2 leading-tight text-white bg-[#20242B] border-2  rounded-full appearance-none focus:outline-none focus:bg-[#20242B] focus:border-[#5E6DFF]">
            </div>
            <div>
                <label for="alamat" class="block text-sm font-medium text-white">Address</label><br>
                <input type="text" wire:model="alamat" id="alamat" placeholder="Enter your address"
                class="w-full px-4 py-2 leading-tight text-white bg-[#20242B] border-2 rounded-full appearance-none focus:outline-none focus:bg-[#20242B] focus:border-[#5E6DFF]">
            </div>
            <div>
                <label for="feedback" class="block text-sm font-medium text-white">Feedback</label><br>
                <textarea wire:model="feedback" id="feedback" placeholder="Enter your feedback"
                class="w-full px-4 py-2 leading-tight text-white bg-[#20242B] border-2 rounded-lg appearance-none focus:outline-none focus:bg-[#20242B] focus:border-[#5E6DFF]" rows="3"></textarea>
            </div>

            <label for="gender" class="block text-sm font-medium text-white">Gender</label>
            <div class="relative mt-1">
                <select wire:model="gender" id="gender" class="block w-full px-4 py-2 pr-8 leading-tight bg-[#20242B] border border-gray-400 rounded-full shadow appearance-none text-white hover:border-[#5E6DFF] focus:outline-none focus:shadow-outline">
                    <option value="">Gender</option>
                    <option value="laki-laki">Male</option>
                    <option value="perempuan">Female</option>
                </select>
            </div>

            <div class="flex justify-center mt-6">
                <button type="submit"
                        class="px-4 py-2 text-white transition ease-in-out bg-[#5E6DFF] rounded-full shadow-sm delay-45 cursor-progress hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-1 focus:outline-none focus:ring-2 focus:ring-indigo-600">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>

@livewireScripts

<style>
    /* Background kotak-kotak */
    .bg-grid {
        width: 80vw;
        height: 60vh;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-image:
            linear-gradient(90deg, rgba(255, 255, 255, 0.1) 1px, transparent 1px),
            linear-gradient(rgba(255, 255, 255, 0.1) 1px, transparent 1px);
        background-size: 40px 40px;
        background-position: -1px -1px;
    }

    /* CSS untuk animasi pop up */
    .card-pop-up {
        opacity: 0;
        transform: scale(0.75);
        animation: popUp 0.7s ease-out forwards;
        animation-delay: 0.3s;
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.3), 0 4px 6px rgba(0, 0, 0, 0.2);
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
