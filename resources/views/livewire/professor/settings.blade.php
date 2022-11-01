<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>تعديل البيانات</h2>
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
                                <input class="form-control" type="name" name="name" wire:model.lazy='name' id="name" />
                                @error('name')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>البريد الألكترونى</label>
                                <input class="form-control" type="email" name="email" wire:model.lazy='email'
                                    id="email" />
                                @error('email')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>الموبايل</label>
                                <input class="form-control" type="phone" name="phone" wire:model.lazy='phone'
                                    id="phone" />
                                @error('phone')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>القسم </label>
                                <div class="select-box">
                                    <select class="form-control" name="department_id" wire:model='department_id'>
                                        <option value="0">اختر القسم</option>
                                        @foreach ($departments as $department)
                                        <option value="{{ $department->id }}" @if($department_id==$department->id)
                                            selected @endif>{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('department_id')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>الجنس</label>
                                <select class="form-control" name="gender" wire:model='gender'>
                                    <option value="0">اختر النوع</option>
                                    <option value="1" @if($gender==1 ) selected @endif>ذكر</option>
                                    <option value="2" @if($gender==2 ) selected @endif>انثى</option>
                                </select>

                                @error('gender')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>الصورة</label>
                                <input class="form-control" type="file" name="photo" wire:model='photo' id="photo" />
                                @error('photo')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn" type="submit">حفظ التغييرات</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
