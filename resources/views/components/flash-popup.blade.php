@php
    $contactSuccess = session('contact_success');
    $quoteSuccess = session('quote_success');

    $message = null;
    $title = null;

    if ($contactSuccess) {
        $title = 'Message sent';
        $message = 'Thank you for your message. We will get back to you soon.';
    } elseif ($quoteSuccess) {
        $title = 'Request submitted';
        $message = 'Thank you for your request. Our team will contact you shortly.';
    }
@endphp

@if ($message)
    <div
        id="flash-popup"
        class="fixed inset-0 z-[60] flex items-center justify-center bg-ink/50 backdrop-blur-sm px-4"
        role="dialog"
        aria-modal="true"
        aria-live="assertive"
        onclick="if(event.target===this){this.remove();}"
    >
        <div class="w-full max-w-md rounded-[2rem] bg-white p-8 md:p-10 text-center shadow-[0_40px_100px_-30px_rgba(0,0,0,0.6)] animate-now" data-animate="scaleIn">
            <span class="mx-auto w-16 h-16 rounded-full bg-gradient-to-b from-gold-light to-gold text-ink inline-flex items-center justify-center shadow-gold">
                <x-glyph name="check" class="w-8 h-8" stroke="2.5" />
            </span>
            <h2 class="mt-6 text-2xl font-semibold tracking-tight">{{ $title }}</h2>
            <p class="mt-2 text-ink-muted leading-relaxed">{{ $message }}</p>
            <button
                type="button"
                onclick="document.getElementById('flash-popup')?.remove();"
                class="btn btn-dark mt-8 w-full"
            >
                Done
            </button>
        </div>
    </div>

    <script>
        setTimeout(function () {
            document.getElementById('flash-popup')?.remove();
        }, 8000);
    </script>
@endif
