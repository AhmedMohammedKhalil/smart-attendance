<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>تعديل محاضرة</h2>
            </div>
            <div class="contact-form-action">
                <form wire:submit.prevent='edit'>
                    <div class="row">
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="col-12">
                            <div class="form-group">
                                <label>الإسم</label>
                                <input class="form-control" type="text" name="title" wire:model.lazy='title'
                                    id="title" value="{{ $title }}" />
                                @error('title')
                                    <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="checkbox" wire:model.lazy='generate' name="generate">
                                عمل Qr Code جديد
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn" type="submit">تعديل</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
