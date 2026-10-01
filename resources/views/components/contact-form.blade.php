<div class="rounded-[2rem] bg-white border border-ink/5 shadow-lift p-6 sm:p-8 md:p-12">
    <div class="flex items-start justify-between gap-4 mb-8">
        <div>
            <h3 class="text-2xl font-semibold tracking-tight">Send us a message</h3>
            <p class="mt-1.5 text-sm text-ink-muted">All fields are required.</p>
        </div>
        <span class="icon-tile hidden sm:inline-flex"><x-glyph name="message" class="w-6 h-6" /></span>
    </div>

    @if ($errors->any())
        <div class="mb-6 p-4 rounded-2xl bg-red-50 border border-red-200 text-red-800 text-sm" role="alert">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
        @csrf

        <div>
            <label for="contact-name" class="field-label">Name</label>
            <input id="contact-name" type="text" name="name" value="{{ old('name') }}" placeholder="Your full name" autocomplete="name" required class="field @error('name') field-error @enderror">
            @error('name')<p class="mt-1.5 text-red-600 text-sm">{{ $message }}</p>@enderror
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
            <div>
                <label for="contact-email" class="field-label">Email</label>
                <input id="contact-email" type="email" name="email" value="{{ old('email') }}" placeholder="you@company.com" autocomplete="email" required class="field @error('email') field-error @enderror">
                @error('email')<p class="mt-1.5 text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
            <div>
                <label for="contact-subject" class="field-label">Subject</label>
                <input id="contact-subject" type="text" name="subject" value="{{ old('subject') }}" placeholder="What's this about?" required class="field @error('subject') field-error @enderror">
                @error('subject')<p class="mt-1.5 text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
        </div>

        <div>
            <label for="contact-message" class="field-label">Message</label>
            <textarea id="contact-message" name="message" rows="6" placeholder="How can we help you?" required class="field resize-none @error('message') field-error @enderror">{{ old('message') }}</textarea>
            @error('message')<p class="mt-1.5 text-red-600 text-sm">{{ $message }}</p>@enderror
        </div>

        <button type="submit" class="btn btn-gold btn-lg w-full">
            Send Message
            <x-glyph name="send" class="btn-arrow w-5 h-5" stroke="2" />
        </button>
    </form>
</div>
