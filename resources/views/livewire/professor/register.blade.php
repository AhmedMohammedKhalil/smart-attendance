<section class="user-area-style ptb-100">
    <div class="container">
        <div class="log-in-area">
            <div class="section-title">
                <h2>إنشاء حساب جديد</h2>
            </div>
            <div class="contact-form-action">
                <form wire:submit.prevent='register'>
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
                                <label>الموبايل </label>
                                <input class="form-control" type="text" name="phone" wire:model.lazy='phone'
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
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
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
                                    <option value="1">ذكر</option>
                                    <option value="2">انثى</option>
                                </select>

                                @error('gender')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>كلمة السر</label>
                                <input class="form-control" type="password" name="password" wire:model.lazy='password'
                                    id="password" />
                                @error('password')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>اعد كلمة السر</label>
                                <input class="form-control" type="password" name="confirm_password"
                                    wire:model.lazy='confirm_password' id="confirm_password" />
                                @error('confirm_password')
                                <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="default-btn" type="submit">إنشئ الأن</button>
                        </div>
                        <div class="col-12">
                            <p>
                                إذا كان لديك حساب
                                <a href="{{ route('professor.login') }}">سجل الأن</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
