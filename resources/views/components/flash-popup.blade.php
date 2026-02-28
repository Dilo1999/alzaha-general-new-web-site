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
        class="fixed inset-0 z-40 flex items-center justify-center bg-black/30 backdrop-blur-sm"
        aria-live="assertive"
    >
        <div class="w-full max-w-sm px-4 sm:px-0">
            <div class="rounded-2xl bg-[#f7f4eb] shadow-[0_24px_60px_-24px_rgba(0,0,0,0.75)] border border-[#c19b46]/40 overflow-hidden">
                <div class="flex items-start gap-3 px-4 py-3 sm:px-5 sm:py-4">
                    <div class="mt-0.5 flex h-8 w-8 items-center justify-center rounded-full bg-[#c19b46]/15 text-[#c19b46]">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414L9 13.414l4.707-4.707z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <p class="text-sm font-semibold text-[#6d5a2c]">
                            {{ $title }}
                        </p>
                        <p class="mt-1 text-xs sm:text-sm text-[#6d5a2c]/80">
                            {{ $message }}
                        </p>
                    </div>
                    <button
                        type="button"
                        onclick="(function(){var el=document.getElementById('flash-popup'); if(el){ el.remove(); }})();"
                        class="ml-2 inline-flex rounded-full p-1 text-[#b3a57a] hover:text-[#6d5a2c] hover:bg-[#f7f4eb] transition"
                        aria-label="Close notification"
                    >
                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 8.586L5.757 4.343A1 1 0 104.343 5.757L8.586 10l-4.243 4.243a1 1 0 101.414 1.414L10 11.414l4.243 4.243a1 1 0 001.414-1.414L11.414 10l4.243-4.243A1 1 0 0014.243 4.343L10 8.586z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            var timeout = 6000;
            var el = document.getElementById('flash-popup');
            if (!el) return;
            setTimeout(function () {
                if (el && el.parentNode) {
                    el.parentNode.removeChild(el);
                }
            }, timeout);
        })();
    </script>
@endif

