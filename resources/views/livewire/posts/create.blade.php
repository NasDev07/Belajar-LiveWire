<div class="card">

    <x-flash-message />

    <div class="card-body mt-3">
        <h5 class="card-title">New post</h5>

        <form wire:submit="save">
            <div class="mb-2">
                <label for="body" class="visually-hidden">Body</label>
                <textarea placeholder="what's on your mind ?" wire:model="form.body" class="form-control" id="body"></textarea>
                @error('form.body')
                    <small class="text-danger d-block mt-1">{{ $message }}</small>
                @enderror
            </div>
            <div class="flex justify-content-end">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
</div>
