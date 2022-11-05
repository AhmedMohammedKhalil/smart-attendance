<div style="padding: 40px 0 ">
    <div class="login-form">
        <form wire:submit.prevent='edit'>
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
                <div class="form-group">
                    <input type="text" wire:model.lazy='name' id="name" class="form-control" placeholder="إسم القسم">
                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <textarea name="description"  wire:model.lazy='description' class="form-control" id="description" rows="6" placeholder="التفاصيل"></textarea>
                    @error('description') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>

                <button type="submit" class="btn btn-primary">حفظ التغييرات</button>
        </form>
    </div>
</div>

