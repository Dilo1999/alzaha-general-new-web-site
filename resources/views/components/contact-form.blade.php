<div class="bg-white p-6 md:p-10 rounded-2xl shadow-2xl border border-[#6d5a2c]/5">
    <h3 class="text-2xl font-bold mb-8 text-[#6d5a2c]">Send us a Message</h3>

    @if ($errors->any())
        <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-800 text-sm" role="alert">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
        @csrf

        <div class="space-y-2">
            <label for="contact-name" class="text-sm font-semibold opacity-60 ml-1 text-[#6d5a2c]">Name</label>
            <input id="contact-name" type="text" name="name" value="{{ old('name') }}" placeholder="Your name" required class="w-full px-5 py-4 bg-[#f7f4eb]/50 border border-[#6d5a2c]/10 rounded-xl focus:outline-none focus:border-[#c19b46] transition-colors @error('name') border-red-400 @enderror">
            @error('name')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label for="contact-email" class="text-sm font-semibold opacity-60 ml-1 text-[#6d5a2c]">Email</label>
                <input id="contact-email" type="email" name="email" value="{{ old('email') }}" placeholder="your@email.com" required class="w-full px-5 py-4 bg-[#f7f4eb]/50 border border-[#6d5a2c]/10 rounded-xl focus:outline-none focus:border-[#c19b46] transition-colors @error('email') border-red-400 @enderror">
                @error('email')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-2">
                <label for="contact-subject" class="text-sm font-semibold opacity-60 ml-1 text-[#6d5a2c]">Subject</label>
                <input id="contact-subject" type="text" name="subject" value="{{ old('subject') }}" placeholder="Topic" required class="w-full px-5 py-4 bg-[#f7f4eb]/50 border border-[#6d5a2c]/10 rounded-xl focus:outline-none focus:border-[#c19b46] transition-colors @error('subject') border-red-400 @enderror">
                @error('subject')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="space-y-2">
            <label for="contact-message" class="text-sm font-semibold opacity-60 ml-1 text-[#6d5a2c]">Message</label>
            <textarea id="contact-message" name="message" rows="5" placeholder="How can we help you?" required class="w-full px-5 py-4 bg-[#f7f4eb]/50 border border-[#6d5a2c]/10 rounded-xl focus:outline-none focus:border-[#c19b46] transition-colors resize-none @error('message') border-red-400 @enderror">{{ old('message') }}</textarea>
            @error('message')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
        </div>

        <button type="submit" class="w-full py-4 text-white font-bold rounded-xl flex items-center justify-center gap-2 transition-all duration-300 hover:scale-[1.01] shadow-lg bg-[#c19b46]">
            Send Message
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
        </button>
    </form>
</div>
