<div>
    {{-- Be like water. --}}
    <form wire:submit.prevent="submit" class="form-group">
        <div>
            <label for="first_name">First Name</label>
            <input  class="form-input" type="text" name="first_name" value="first_name" wire:model="first_name">
            @error('first_name') <span class="error">{{ $message }}</span> @enderror

        </div>
        <div>
            <label for="last_name">Last Name</label>
            <input  class="form-input" type="text" name="last_name" value="last_name" wire:model="last_name">
            @error('last_name') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="national_code">National Code</label>
            <input  class="form-input" type="text" name="national_code" value="national_code" wire:model="national_code">
            @error('national_code') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="mobile">Mobile</label>
            <input  class="form-input" type="text" name="mobile" value="mobile" wire:model="mobile">
            @error('mobile') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <input type="submit" wire:click="submit" class="btn btn-success">
        </div>
    </form>
    {{$first_name}}

</div>
