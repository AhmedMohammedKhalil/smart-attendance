<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>إضافة طالب</h2>
            </div>
            <div class="contact-form-action">
                <form wire:submit.prevent='add'>
                    <div class="row">
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="col-12">
                            <div class="form-group">
                                <label>اختر طالب</label>
                                <div class="select-box">
                                    <select class="form-control" name="student_ids" wire:model='student_ids' multiple
                                        style="height: 200px">
                                        @foreach ($students as $student)
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('student_ids')
                                    <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn" type="submit">إضافة</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
