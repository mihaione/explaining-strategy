<?php

use App\Models\Fee;
use Livewire\Volt\Component;
use Illuminate\Http\Request;

new class extends Component {

    public ?object $countries = null;
    public int $countryID = 0;
    public int $full_fee = 0;
    public int $early_bird = 0;
    public string $discount_full = '';
    public string $discount_early = '';
    public string $discount_group = '';
    public bool $hasFees = false;

    public function mount(): void
    {
        $this->countries = Fee::select('id','country')->orderBy('id')->get();
    }

    public function show(Request $request): View
    {
        $this->countryID = $request->input('country_id');

    }

    public function checkFees(): void
    {
        $countryFees = Fee::where('id', $this->countryID)->first();
        $this->full_fee = $countryFees->full_fee;
        $this->early_bird = $countryFees->early_bird;
        $this->discount_full = $countryFees->discount_full;
        $this->discount_early = $countryFees->discount_early;
        $this->discount_group = $countryFees->discount_group;

        $this->hasFees = true;
    }
};

?>

<div>
    <form wire:change.prevent="checkFees">
        <div class="flex items-center justify-start gap-4">
            <select wire:model.live="countryID" name="country_id" id="country_id" class="w-1/2 p-2 bg-ocre dark:bg-ocre rounded-lg text-black cursor-pointer">
                <option value="0">Select your country</option>
                @foreach($countries as $country)
                    <option value="{{ $country['id'] }}">{{ $country['country'] }}</option>
                @endforeach
            </select>
        </div>
    </form>
    <p class="text-lg lg:text-base mb-3 mt-3 font-medium sm:text-xl">
        @if (!$hasFees)
            Your Fair Price enrollment fee: <span class="font-bold text-blue-700 dark:text-orange-400"> ... USD</span>
        @else
            Your Fair Price enrollment fee: <span class="ml-1 font-bold text-blue-700 dark:text-orange-400">{{ number_format($full_fee) }} USD</span>
            <br/>
            <span class="flex">
                Your discount code: <span id="copy1" class="discount1 ml-1 font-bold text-blue-700 dark:text-orange-400">{{ $discount_full }}</span>
                <span onclick="copy_code('1')" class="cursor-pointer" title="Copy code">
                    <svg class="w-5 h-5 ml-1 text-blue-700 dark:text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="1" d="M9 8v3a1 1 0 0 1-1 1H5m11 4h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-7a1 1 0 0 0-1 1v1m4 3v10a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-7.13a1 1 0 0 1 .24-.65L7.7 8.35A1 1 0 0 1 8.46 8H13a1 1 0 0 1 1 1Z"/>
                    </svg>
                </span>
                <span id="check1" class="hidden" title="Copied!">
                    <span class="flex">
                        <svg class="w-5 h-5 mx-1 text-blue-700 dark:text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg>
                        <span class="text-sm text-blue-700 dark:text-orange-400">copied to clipboard</span>
                    </span>
                </span>
            </span>
        @endif
    </p>
    <p class="text-lg lg:text-base mb-3 mt-3 font-medium sm:text-xl">
        <b>Note:</b> For interactivity reasons, the number of seats in each cohort is limited.
    </p>
    <p class="mb-3 mt-3 text-lg font-bold uppercase text-orange-500 sm:text-xl">
        EARLY-BIRD & GROUPS
    </p>
    <p class="text-lg lg:text-base font-medium">
        This fee is applicable for the enrollment before March 15, 2026 or of a group of 3 or more.
        The Early Bird and Groups discounts are not cumulative.
    </p>
    <p class="text-lg lg:text-base mb-3 mt-3 font-medium sm:text-xl">
        @if (!$hasFees)
            Your Early Bird enrollment fee: <span class="font-bold text-blue-700 dark:text-orange-400"> ... USD</span>.
        @else
            Your Early Bird enrollment fee: <span class="ml-1 font-bold text-blue-700 dark:text-orange-400">{{ number_format($early_bird) }} USD</span>
            <br/>
            <span class="flex">
                Your discount code: <span id="copy2" class="discount2 ml-1 font-bold text-blue-700 dark:text-orange-400">{{ $discount_early }}</span>
                <span onclick="copy_code('2')" class="cursor-pointer" title="Copy code">
                    <svg class="w-5 h-5 ml-1 text-blue-700 dark:text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="1" d="M9 8v3a1 1 0 0 1-1 1H5m11 4h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-7a1 1 0 0 0-1 1v1m4 3v10a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-7.13a1 1 0 0 1 .24-.65L7.7 8.35A1 1 0 0 1 8.46 8H13a1 1 0 0 1 1 1Z"/>
                    </svg>
                </span>
                <span id="check2" class="hidden" title="Copied!">
                    <span class="flex">
                        <svg class="w-5 h-5 mx-1 text-blue-700 dark:text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg>
                        <span class="text-sm font-thin text-blue-700 dark:text-orange-400">copied to clipboard</span>
                    </span>
                </span>
            </span>
        @endif
    </p>
    <p class="text-lg lg:text-base mb-3 mt-3 font-medium sm:text-xl">
        @if (!$hasFees)
            Your Group enrollment fee: <span class="font-bold text-blue-700 dark:text-orange-400"> ... USD per person</span>.
        @else
            Your Group enrollment fee: <span class="ml-1 font-bold text-blue-700 dark:text-orange-400">{{ number_format((int) $early_bird) }} USD per person</span>
            <br/>
            <span class="flex">
                Your discount code: <span id="copy3" class="discount3 ml-1 font-bold text-blue-700 dark:text-orange-400">{{ $discount_group }}</span>
                <span onclick="copy_code('3')" class="cursor-pointer" title="Copy code">
                    <svg class="w-5 h-5 ml-1 text-blue-700 dark:text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="1" d="M9 8v3a1 1 0 0 1-1 1H5m11 4h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-7a1 1 0 0 0-1 1v1m4 3v10a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1v-7.13a1 1 0 0 1 .24-.65L7.7 8.35A1 1 0 0 1 8.46 8H13a1 1 0 0 1 1 1Z"/>
                    </svg>
                </span>
                <span id="check3" class="hidden" title="Copied!">
                    <span class="flex">
                        <svg class="w-5 h-5 mx-1 text-blue-700 dark:text-orange-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5"/>
                        </svg>
                        <span class="text-sm text-blue-700 dark:text-orange-400">copied to clipboard</span>
                    </span>
                </span>
            </span>
        @endif
    </p>
</div>
