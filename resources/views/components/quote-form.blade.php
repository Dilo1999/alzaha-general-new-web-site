<div class="bg-white p-10 rounded-[14px] shadow-[0_20px_50px_-12px_rgba(109,90,44,0.15)]">
    @if ($errors->any())
        <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-800 text-sm" role="alert">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('quote.store') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label class="font-semibold uppercase tracking-wider opacity-60 ml-1 text-[#6d5a2c]" style="font-size: 12.6px;" for="quote-name">Full Name</label>
                <input id="quote-name" type="text" name="name" value="{{ old('name') }}" placeholder="John Doe" required class="w-full px-5 py-4 bg-[#f7f4eb]/50 border border-[#6d5a2c]/10 rounded-[10px] focus:outline-none focus:border-[#c19b46] transition-colors @error('name') border-red-400 @enderror">
                @error('name')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-2">
                <label class="font-semibold uppercase tracking-wider opacity-60 ml-1 text-[#6d5a2c]" style="font-size: 12.6px;" for="quote-company">Company Name</label>
                <input id="quote-company" type="text" name="company" value="{{ old('company') }}" placeholder="Enterprises Ltd." class="w-full px-5 py-4 bg-[#f7f4eb]/50 border border-[#6d5a2c]/10 rounded-[10px] focus:outline-none focus:border-[#c19b46] transition-colors @error('company') border-red-400 @enderror">
                @error('company')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="space-y-2">
                <label class="font-semibold uppercase tracking-wider opacity-60 ml-1 text-[#6d5a2c]" style="font-size: 12.6px;" for="quote-email">Email Address</label>
                <input id="quote-email" type="email" name="email" value="{{ old('email') }}" placeholder="john@company.com" required class="w-full px-5 py-4 bg-[#f7f4eb]/50 border border-[#6d5a2c]/10 rounded-[10px] focus:outline-none focus:border-[#c19b46] transition-colors @error('email') border-red-400 @enderror">
                @error('email')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
            <div class="space-y-2">
                <label class="font-semibold uppercase tracking-wider opacity-60 ml-1 text-[#6d5a2c]" style="font-size: 12.6px;" for="quote-phone">Phone Number</label>
                <input id="quote-phone" type="tel" name="phone" value="{{ old('phone') }}" placeholder="+971 50 000 0000" class="w-full px-5 py-4 bg-[#f7f4eb]/50 border border-[#6d5a2c]/10 rounded-[10px] focus:outline-none focus:border-[#c19b46] transition-colors @error('phone') border-red-400 @enderror">
                @error('phone')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
        </div>

        <div class="space-y-2">
            <label class="text-sm font-semibold uppercase tracking-wider opacity-60 ml-1 text-[#6d5a2c]" for="quote-industry">Industry Segment</label>
            <select id="quote-industry" name="industry" class="w-full px-5 py-4 bg-[#f7f4eb]/50 border border-[#6d5a2c]/10 rounded-[10px] focus:outline-none focus:border-[#c19b46] transition-colors appearance-none cursor-pointer text-[#6d5a2c] @error('industry') border-red-400 @enderror">
                <option value="">Select an Industry</option>
                <option value="construction" @selected(old('industry') === 'construction')>Construction & Infrastructure</option>
                <option value="manufacturing" @selected(old('industry') === 'manufacturing')>Manufacturing</option>
                <option value="energy" @selected(old('industry') === 'energy')>Oil, Gas & Energy</option>
                <option value="technology" @selected(old('industry') === 'technology')>Technology & Electronics</option>
                <option value="other" @selected(old('industry') === 'other')>Other</option>
            </select>
            @error('industry')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
        </div>

        <div class="space-y-2">
            <label class="text-sm font-semibold uppercase tracking-wider opacity-60 ml-1 text-[#6d5a2c]" for="quote-details">Project Details</label>
            <textarea id="quote-details" name="details" rows="5" placeholder="Tell us about your sourcing needs, material specifications, and desired timelines..." class="w-full px-5 py-4 bg-[#f7f4eb]/50 border border-[#6d5a2c]/10 rounded-[10px] focus:outline-none focus:border-[#c19b46] transition-colors resize-none text-[#6d5a2c] @error('details') border-red-400 @enderror">{{ old('details') }}</textarea>
            @error('details')<p class="text-red-600 text-sm">{{ $message }}</p>@enderror
        </div>

        <div class="space-y-2">
            <label class="text-sm font-semibold uppercase tracking-wider opacity-60 ml-1 text-[#6d5a2c]" for="quote-file">Upload RFQ / Specifications (Optional)</label>
            <div class="relative group">
                <input id="quote-file" type="file" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                <div id="quote-file-dropzone" class="w-full px-5 py-8 bg-[#f7f4eb]/30 border-2 border-dashed border-[#6d5a2c]/20 rounded-[10px] flex flex-col items-center justify-center group-hover:bg-[#f7f4eb]/50 group-hover:border-[#c19b46]/50 transition-all">
                    <div id="quote-file-empty" class="flex flex-col items-center">
                        <svg class="w-8 h-8 mb-3 opacity-40 group-hover:opacity-100 group-hover:text-[#c19b46] transition-all text-[#6d5a2c]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
                        <span class="text-sm opacity-60 text-[#6d5a2c]">Click to upload or drag and drop</span>
                        <span class="text-xs opacity-40 mt-1 text-[#6d5a2c]">PDF, DOCX, XLSX (Max 10MB)</span>
                    </div>
                    <div id="quote-file-selected" class="hidden flex-col items-center text-[#6d5a2c]">
                        <svg class="w-10 h-10 mb-2 text-[#c19b46]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span id="quote-file-name" class="text-sm font-medium"></span>
                        <span class="text-xs opacity-60 mt-1">File selected — click to change</span>
                    </div>
                </div>
            </div>
            @error('file')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <script>
            (function() {
                const input = document.getElementById('quote-file');
                const emptyState = document.getElementById('quote-file-empty');
                const selectedState = document.getElementById('quote-file-selected');
                const fileNameSpan = document.getElementById('quote-file-name');
                const dropzone = document.getElementById('quote-file-dropzone');

                if (input && emptyState && selectedState && fileNameSpan) {
                    input.addEventListener('change', function() {
                        const file = this.files?.[0];
                        if (file) {
                            emptyState.classList.add('hidden');
                            emptyState.classList.remove('flex');
                            selectedState.classList.remove('hidden');
                            selectedState.classList.add('flex');
                            fileNameSpan.textContent = file.name;
                            dropzone.classList.add('!bg-[#f7f4eb]/60', '!border-[#c19b46]/50', '!border-solid');
                        } else {
                            emptyState.classList.remove('hidden');
                            emptyState.classList.add('flex');
                            selectedState.classList.add('hidden');
                            selectedState.classList.remove('flex');
                            dropzone.classList.remove('!bg-[#f7f4eb]/60', '!border-[#c19b46]/50', '!border-solid');
                        }
                    });
                }
            })();
        </script>

        <button type="submit" class="w-full py-5 text-white font-bold rounded-[10px] flex items-center justify-center gap-2 transition-all duration-300 hover:scale-[1.01] shadow-lg bg-[#c19b46]" style="font-size: 14.4px;">
            Submit Request
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
        </button>
    </form>
</div>
