@extends('layouts.app')

@section('title', 'Contact Us — CJ Global Express Group Unlimited')
@section('meta_description', 'Get in touch with CJ Global Express Group Unlimited. Offices in KwaZulu-Natal, Bulawayo, London and Chicago. Enquiries across all nine divisions welcome.')

@section('content')

<style>
.contact-hero {
    padding: var(--space-6) 0 var(--space-5);
    position: relative;
}
.contact-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 30% 50%, rgba(201,168,76,0.05) 0%, transparent 60%);
    pointer-events: none;
}

/* Contact info strip */
.contact-info-strip {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-2);
    margin-bottom: var(--space-5);
}
.contact-info-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    padding: var(--space-3);
    display: flex;
    align-items: flex-start;
    gap: var(--space-2);
    transition: var(--ease-card);
}
.contact-info-card:hover { box-shadow: var(--shadow-hover); transform: translateY(-1px); }
.contact-info-icon {
    width: 44px; height: 44px; flex-shrink: 0;
    background: var(--gold-glow);
    border-radius: var(--radius-icon);
    display: flex; align-items: center; justify-content: center;
    color: var(--gold-primary); font-size: 22px;
}
.contact-info-label {
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 4px;
}
.contact-info-value {
    font-family: var(--font-display);
    font-size: 16px; font-weight: 600;
    color: var(--text-primary);
    line-height: 1.3;
    margin-bottom: 2px;
}
.contact-info-sub {
    font-size: var(--text-small);
    color: var(--text-secondary);
}

/* Main contact layout */
.contact-layout {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: var(--space-5);
    align-items: start;
}

/* Form card */
.form-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised-lg);
    padding: var(--space-5);
    position: relative;
    overflow: hidden;
}
.form-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 2px;
    background: linear-gradient(90deg, var(--gold-primary), rgba(201,168,76,0.2), transparent);
}
.form-grid-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-2);
}
.form-card h3 {
    font-family: var(--font-display);
    font-size: 24px; font-weight: 600;
    color: var(--text-primary);
    margin-bottom: var(--space-1);
}
.form-card p {
    font-size: var(--text-body);
    color: var(--text-secondary);
    margin-bottom: var(--space-4);
}

/* Sidebar */
.contact-sidebar { display: flex; flex-direction: column; gap: var(--space-3); }

.direct-email-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    padding: var(--space-3);
    transition: var(--ease-card);
}
.direct-email-card:hover { box-shadow: var(--shadow-hover); transform: translateY(-1px); }
.email-type {
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: 4px;
}
.email-address {
    font-family: var(--font-display);
    font-size: 16px; font-weight: 600;
    color: var(--text-primary);
    word-break: break-all;
    transition: var(--ease-default);
    display: block;
    margin-bottom: 2px;
}
.email-address:hover { color: var(--gold-primary); }
.email-sub {
    font-size: var(--text-small);
    color: var(--text-secondary);
}

/* Office address card */
.address-card {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised);
    padding: var(--space-3);
}
.address-office {
    font-size: var(--text-label);
    color: var(--gold-primary);
    letter-spacing: 0.06em;
    text-transform: uppercase;
    margin-bottom: var(--space-2);
    padding-bottom: var(--space-1);
    border-bottom: 1px solid var(--border-subtle);
}
.address-item {
    display: flex; align-items: flex-start; gap: 8px;
    font-size: var(--text-small); color: var(--text-secondary);
    margin-bottom: 10px; line-height: 1.5;
}
.address-item i { color: var(--gold-primary); font-size: 14px; flex-shrink: 0; margin-top: 1px; }
.address-office-name {
    font-family: var(--font-display);
    font-size: 15px; font-weight: 600;
    color: var(--text-primary);
    margin-bottom: 6px;
}

@media (max-width: 1024px) {
    .contact-layout { grid-template-columns: 1fr; }
    .contact-info-strip { grid-template-columns: 1fr; }
}
@media (max-width: 640px) {
    .form-grid-2 { grid-template-columns: 1fr; }
    .form-card { padding: var(--space-3); }
}

@media (max-width: 1024px) {
    .contact-layout { grid-template-columns: 1fr !important; }
    .contact-info-strip { grid-template-columns: 1fr !important; }
}
@media (max-width: 640px) {
    .form-grid-2 { grid-template-columns: 1fr !important; }
    .form-card { padding: var(--space-3) !important; }
}
</style>

{{-- ── HERO ── --}}
<section class="contact-hero">
    <div class="container" style="position:relative;z-index:2;">
        <div class="eyebrow reveal">Reach Out</div>
        <h1 class="reveal reveal-delay-1">Let's Build Something<br><em class="italic-gold">Together</em></h1>
        <p style="color:var(--text-secondary);max-width:520px;margin-top:var(--space-2);font-size:var(--text-body-lg);" class="reveal reveal-delay-2">
            Whether you have a business enquiry, a partnership opportunity, or simply want to learn more about CGEG — our team is ready to engage.
        </p>
    </div>
</section>

<section class="section" style="padding-top:0;">
    <div class="container">

        {{-- Info Strip --}}
        <div class="contact-info-strip">
            <div class="contact-info-card reveal">
                <div class="contact-info-icon"><i class="fa-solid fa-location-dot" aria-hidden="true"></i></div>
                <div>
                    <div class="contact-info-label">Headquarters</div>
                    <div class="contact-info-value">KwaZulu-Natal</div>
                    <div class="contact-info-sub">Ntambanana, South Africa</div>
                </div>
            </div>
            <div class="contact-info-card reveal reveal-delay-1">
                <div class="contact-info-icon"><i class="fa-solid fa-envelope" aria-hidden="true"></i></div>
                <div>
                    <div class="contact-info-label">General Enquiries</div>
                    <div class="contact-info-value" style="font-size:13px;">enquiries@cjglobal<br>expressgroup.com</div>
                </div>
            </div>
            <div class="contact-info-card reveal reveal-delay-2">
                <div class="contact-info-icon"><i class="fa-solid fa-building" aria-hidden="true"></i></div>
                <div>
                    <div class="contact-info-label">Zimbabwe Office</div>
                    <div class="contact-info-value">Bulawayo</div>
                    <div class="contact-info-sub">River Crescent Rd, Kelvin West</div>
                </div>
            </div>
        </div>

        {{-- Main Layout --}}
        <div class="contact-layout">

            {{-- Contact Form --}}
            <div class="form-card reveal">
                <h3>Send Us a Message</h3>
                <p>Fill in the form below and a member of our team will respond within 2 business days.</p>

                @if(session('success'))
                <div class="form-success">
                    <i class="fa-solid fa-circle-check" aria-hidden="true"></i>
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('contact.submit') }}" method="POST" novalidate>
                    @csrf

                    {{-- Honeypot --}}
                    <div class="honeypot">
                        <input type="text" name="honeypot" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label class="form-label" for="first_name">First Name <span style="color:var(--error);">*</span></label>
                            <input class="form-input @error('first_name') error @enderror"
                                   type="text" id="first_name" name="first_name"
                                   value="{{ old('first_name') }}" placeholder="Clemence" required>
                            @error('first_name')<div class="form-error-msg">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="last_name">Last Name <span style="color:var(--error);">*</span></label>
                            <input class="form-input @error('last_name') error @enderror"
                                   type="text" id="last_name" name="last_name"
                                   value="{{ old('last_name') }}" placeholder="Muzenda" required>
                            @error('last_name')<div class="form-error-msg">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="form-grid-2">
                        <div class="form-group">
                            <label class="form-label" for="email">Email Address <span style="color:var(--error);">*</span></label>
                            <input class="form-input @error('email') error @enderror"
                                   type="email" id="email" name="email"
                                   value="{{ old('email') }}" placeholder="you@example.com" required>
                            @error('email')<div class="form-error-msg">{{ $message }}</div>@enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="phone">Phone Number</label>
                            <input class="form-input"
                                   type="tel" id="phone" name="phone"
                                   value="{{ old('phone') }}" placeholder="+27 000 000 0000">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="division">Division of Interest</label>
                        <select class="form-select" id="division" name="division">
                            <option value="">— General Enquiry —</option>
                            @foreach($divisions as $division)
                            <option value="{{ $division }}" {{ old('division') === $division ? 'selected' : '' }}>
                                {{ $division }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="message">Message <span style="color:var(--error);">*</span></label>
                        <textarea class="form-textarea @error('message') error @enderror"
                                  id="message" name="message"
                                  placeholder="Tell us about your enquiry, project, or partnership opportunity..." required>{{ old('message') }}</textarea>
                        @error('message')<div class="form-error-msg">{{ $message }}</div>@enderror
                    </div>

                    <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:var(--space-1);">
                        Send Message <i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
                    </button>
                </form>
            </div>

            {{-- Sidebar --}}
            <div class="contact-sidebar">

                {{-- Direct emails --}}
                <div class="direct-email-card reveal reveal-delay-1">
                    <div class="email-type">General Enquiries</div>
                    <a class="email-address" href="mailto:enquiries@cjglobalexpressgroup.com">
                        enquiries@cjglobalexpressgroup.com
                    </a>
                    <div class="email-sub">All general business enquiries and divisional requests</div>
                </div>

                <div class="direct-email-card reveal reveal-delay-2">
                    <div class="email-type">Founder's Office</div>
                    <a class="email-address" href="mailto:founder@cjglobalexpressgroup.com">
                        founder@cjglobalexpressgroup.com
                    </a>
                    <div class="email-sub">Strategic partnerships and executive-level discussions</div>
                </div>

                <div class="direct-email-card reveal reveal-delay-2">
                    <div class="email-type">South Africa Office</div>
                    <a class="email-address" href="mailto:sircj@cjglobalexpressgroup.co.za">
                        sircj@cjglobalexpressgroup.co.za
                    </a>
                    <div class="email-sub">KwaZulu-Natal headquarters correspondence</div>
                </div>

                {{-- Office addresses --}}
                <div class="address-card reveal reveal-delay-3">
                    <div class="address-office">Our Offices</div>

                    <div class="address-office-name">🇿🇦 KwaZulu-Natal (HQ)</div>
                    <div class="address-item"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Ntambanana, KwaZulu-Natal, South Africa</div>
                    <div class="address-item"><i class="fa-solid fa-graduation-cap" aria-hidden="true"></i> Reg: 2012/344459/07 | Tax: 9225224253</div>

                    <div class="address-office-name" style="margin-top:var(--space-2);">🇿🇼 Bulawayo (Zimbabwe)</div>
                    <div class="address-item"><i class="fa-solid fa-location-dot" aria-hidden="true"></i> River Crescent Rd, Kelvin West, Bulawayo, Zimbabwe</div>

                    <div class="address-office-name" style="margin-top:var(--space-2);">🇬🇧 London (UK)</div>
                    <div class="address-item"><i class="fa-solid fa-building" aria-hidden="true"></i> Commercial property — hospitality &amp; wellness operations</div>

                    <div class="address-office-name" style="margin-top:var(--space-2);">🇺🇸 Chicago (USA)</div>
                    <div class="address-item"><i class="fa-solid fa-building" aria-hidden="true"></i> CJ Vodka Premium Spirits — North American base</div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
.form-input.error,
.form-textarea.error {
    border-color: rgba(224,82,82,0.5);
    box-shadow: var(--shadow-inset), 0 0 0 3px rgba(224,82,82,0.08);
}
</style>

@endsection
