<div class="rounded-[2rem] bg-white border border-ink/5 shadow-lift p-6 sm:p-8 md:p-12">
    @if ($errors->any())
        <div class="mb-6 p-4 rounded-2xl bg-red-50 border border-red-200 text-red-800 text-sm" role="alert">
            <ul class="list-disc list-inside space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('quote.store') }}" method="POST" class="space-y-8" enctype="multipart/form-data">
        @csrf

        <fieldset class="space-y-5">
            <legend class="flex items-center gap-3 mb-5 text-sm font-semibold text-ink">
                <span class="w-7 h-7 rounded-full bg-ink text-gold-light inline-flex items-center justify-center text-xs">1</span>
                Your details
            </legend>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label class="field-label" for="quote-name">Full Name</label>
                    <input id="quote-name" type="text" name="name" value="{{ old('name') }}" placeholder="John Doe" autocomplete="name" required class="field @error('name') field-error @enderror">
                    @error('name')<p class="mt-1.5 text-red-600 text-sm">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="field-label" for="quote-company">Company Name <span class="optional">(optional)</span></label>
                    <input id="quote-company" type="text" name="company" value="{{ old('company') }}" placeholder="Enterprises Ltd." autocomplete="organization" class="field @error('company') field-error @enderror">
                    @error('company')<p class="mt-1.5 text-red-600 text-sm">{{ $message }}</p>@enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label class="field-label" for="quote-email">Email Address</label>
                    <input id="quote-email" type="email" name="email" value="{{ old('email') }}" placeholder="john@company.com" autocomplete="email" required class="field @error('email') field-error @enderror">
                    @error('email')<p class="mt-1.5 text-red-600 text-sm">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="field-label" for="quote-phone">Phone Number <span class="optional">(optional)</span></label>
                    <input id="quote-phone" type="tel" name="phone" value="{{ old('phone') }}" placeholder="+971 50 000 0000" autocomplete="tel" class="field @error('phone') field-error @enderror">
                    @error('phone')<p class="mt-1.5 text-red-600 text-sm">{{ $message }}</p>@enderror
                </div>
            </div>
        </fieldset>

        <div class="divider-gold"></div>

        <fieldset class="space-y-5">
            <legend class="flex items-center gap-3 mb-5 text-sm font-semibold text-ink">
                <span class="w-7 h-7 rounded-full bg-ink text-gold-light inline-flex items-center justify-center text-xs">2</span>
                Your project
            </legend>

            <div>
                <label class="field-label" for="quote-industry">Industry Segment</label>
                <select id="quote-industry" name="industry" class="field @error('industry') field-error @enderror">
                    <option value="">Select an industry</option>
                    <option value="construction" @selected(old('industry') === 'construction')>Construction & Infrastructure</option>
                    <option value="manufacturing" @selected(old('industry') === 'manufacturing')>Manufacturing</option>
                    <option value="energy" @selected(old('industry') === 'energy')>Oil, Gas & Energy</option>
                    <option value="technology" @selected(old('industry') === 'technology')>Technology & Electronics</option>
                    <option value="other" @selected(old('industry') === 'other')>Other</option>
                </select>
                @error('industry')<p class="mt-1.5 text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="field-label" for="quote-details">Project Details</label>
                <textarea id="quote-details" name="details" rows="5" placeholder="Tell us about your sourcing needs, material specifications, and desired timelines..." class="field resize-none @error('details') field-error @enderror">{{ old('details') }}</textarea>
                @error('details')<p class="mt-1.5 text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="field-label" for="quote-file">Upload RFQ / Specifications <span class="optional">(optional)</span></label>
                <div class="relative group">
                    <input id="quote-file" type="file" name="file" accept=".pdf,.doc,.docx,.xls,.xlsx" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                    <div id="quote-file-dropzone" class="w-full px-5 py-9 bg-cream border-2 border-dashed border-ink/15 rounded-2xl flex flex-col items-center justify-center text-center transition-all group-hover:border-gold group-hover:bg-gold/5">
                        <div id="quote-file-empty" class="flex flex-col items-center">
                            <span class="icon-tile mb-4"><x-glyph name="upload" class="w-6 h-6" /></span>
                            <span class="text-sm font-semibold text-ink">Click to upload or drag and drop</span>
                            <span class="text-xs text-ink-muted mt-1">PDF, DOCX, XLSX (Max 10MB)</span>
                        </div>
                        <div id="quote-file-selected" class="hidden flex-col items-center text-ink">
                            <span class="w-12 h-12 mb-3 rounded-full bg-emerald-50 text-emerald-600 inline-flex items-center justify-center"><x-glyph name="check-circle" class="w-6 h-6" /></span>
                            <span id="quote-file-name" class="text-sm font-semibold break-all"></span>
                            <span class="text-xs text-ink-muted mt-1">File selected — click to change</span>
                        </div>
                    </div>
                </div>
                @error('file')<p class="mt-1.5 text-red-600 text-sm">{{ $message }}</p>@enderror
            </div>
        </fieldset>

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
                            dropzone.classList.add('!border-gold', '!border-solid', '!bg-gold/5');
                        } else {
                            emptyState.classList.remove('hidden');
                            emptyState.classList.add('flex');
                            selectedState.classList.add('hidden');
                            selectedState.classList.remove('flex');
                            dropzone.classList.remove('!border-gold', '!border-solid', '!bg-gold/5');
                        }
                    });
                }
            })();
        </script>

        <button type="submit" class="btn btn-gold btn-lg w-full">
            Submit Request
            <x-glyph name="send" class="btn-arrow w-5 h-5" stroke="2" />
        </button>    </form>
</div>
