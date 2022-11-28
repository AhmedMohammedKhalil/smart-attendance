<div class="contact-form-action">
    <form wire:submit.prevent='record'>
        <div class="row">
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="col-12 mb-2">
                <div class="form-group">
                    <label>ضع الكود هنا</label>
                    <input class="form-control" type="text" name="code" wire:model.lazy='code' id="code" />
                    @error('code')
                        <span class="text-danger error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <button class="default-btn mx-auto" type="submit">سجل حضورك الان</button>
            </div>
        </div>
    </form>
</div>
