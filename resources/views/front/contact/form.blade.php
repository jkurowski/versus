<div id="contactForm" class="bc bc-top-left bc-top-right">
    <form class="container validateForm" id="contact-form" action="{{route('contact.form')}}" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-12">
                @if (session('success'))
                    <div class="alert alert-success border-0 mb-4">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning border-0 mb-4">
                        {{ session('warning') }}
                    </div>
                @endif
            </div>
            <div class="col-12 col-sm-6">
                <div class="form-row">
                    <label for="form_name">Imię i nazwisko <span class="text-danger">*</span></label>
                    <input name="form_name" id="form_name" class="validate[required] form-control @error('form_name') is-invalid @enderror" type="text" value="{{ old('form_name') }}" placeholder="">
                    @error('form_name')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                <div class="form-row">
                    <label for="form_phone">Numer telefonu</label>
                    <input name="form_phone" id="form_phone" class="validate[required,custom[phone]] form-control @error('form_phone') is-invalid @enderror" type="text" value="{{ old('form_phone') }}" placeholder="">
                    @error('form_phone')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="form-row">
                    <label for="form_email">Adres e-mail <span class="text-danger">*</span></label>
                    <input name="form_email" id="form_email" class="validate[required,custom[email]] form-control @error('form_email') is-invalid @enderror" type="text" value="{{ old('form_email') }}" placeholder="">
                    @error('form_email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="form-row">
                    <label for="form_message">Wiadomość <span class="text-danger">*</span></label>
                    <textarea rows="10" cols="30" name="form_message" id="form_message" class="validate[required] form-control @error('form_message') is-invalid @enderror">{{ old('form_message') }}</textarea>
                    @error('form_message')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            @foreach ($rules as $r)
                <div class="col-12 mt-4">
                    <div class="rodo-rule clearfix">
                        <input name="rule_{{$r->id}}" id="zgoda_{{$r->id}}" value="1" type="checkbox" @if($r->required === 1) class="validate[required]" @endif data-prompt-position="topLeft:0">
                        <label for="zgoda_{{$r->id}}">{!! $r->text !!}</label>
                    </div>
                </div>
            @endforeach
            <div class="col-12 pt-3 pt-sm-4">
                <script type="text/javascript">
                    document.write("<button class=\"bttn\" type=\"submit\">WYŚLIJ WIADOMOŚĆ</button>");
                </script>
                <noscript><p><b>Do poprawnego działania, Java musi być włączona.</b></p></noscript>
            </div>
        </div>
    </form>
</div>
@push('scripts')
    <script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
    <script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".validateForm").validationEngine({
                validateNonVisibleFields: true,
                updatePromptsPosition:true,
                promptPosition : "topRight:-137px"
            });
        });
        @if (session('success')||session('warning'))
        $(window).load(function() {
            const aboveHeight = $('header').outerHeight();
            $('html, body').stop().animate({
                scrollTop: $('.alert').offset().top-aboveHeight
            }, 1500, 'easeInOutExpo');
        });
        @endif
    </script>
@endpush