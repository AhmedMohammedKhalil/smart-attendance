<div style="padding: 40px 0 ">
    <div class="login-form">
        <form wire:submit.prevent='edit'>
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
                <div class="form-group pb-4">
                    <input type="text" wire:model.lazy='name' id="name" class="form-control" placeholder="إسم المادة">
                    @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>

                <div class="form-group pb-4">
                    <textarea name="content"  wire:model.lazy='content' class="form-control" id="content" rows="6" placeholder="المحتوي"></textarea>
                    @error('content') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>

                <button type="submit" class="btn btn-danger">حفظ التغييرات</button>
        </form>
    </div>
</div>

