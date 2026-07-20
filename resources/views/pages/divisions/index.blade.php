@extends('layouts.app')
@section('title', 'Our Divisions — CJ Global Express Group Unlimited')
@section('content')
<style>
@media (max-width: 768px) {
    div[style*='grid-template-columns:repeat(3,1fr)'] { display: grid !important; grid-template-columns: 1fr !important; }
}
@media (max-width: 1024px) {
    div[style*='grid-template-columns:repeat(3,1fr)'] { grid-template-columns: repeat(2,1fr) !important; }
}

/* Division card media (overview image) */
.card-division-media { padding: 0; overflow: hidden; }
.card-division-media .card-division-img { margin: 0; line-height: 0; }
.card-division-media .card-division-img img { width: 100%; height: 170px; object-fit: cover; display: block; }
.card-division-media .card-division-body { padding: var(--space-3); display: flex; flex-direction: column; flex: 1; }

/* Division detail modal */
.division-modal-overlay {
    display: none;
    position: fixed; inset: 0;
    background: rgba(20,16,10,0.65);
    z-index: 1000;
    padding: var(--space-3);
    overflow-y: auto;
}
.division-modal-overlay.active { display: flex; align-items: flex-start; justify-content: center; }
.division-modal {
    background: var(--surface-raised);
    border-radius: var(--radius-card);
    box-shadow: var(--shadow-raised-lg);
    max-width: 720px;
    width: 100%;
    margin: var(--space-5) auto;
    padding: var(--space-5);
    position: relative;
}
.division-modal-close {
    position: absolute;
    top: var(--space-3); right: var(--space-3);
    width: 36px; height: 36px;
    border-radius: 50%;
    background: var(--gold-glow);
    color: var(--gold-primary);
    display: flex; align-items: center; justify-content: center;
    cursor: pointer;
    font-size: 16px;
    transition: var(--ease-default);
    border: none;
}
.division-modal-close:hover { transform: rotate(90deg); }
.division-modal-icon {
    width: 52px; height: 52px;
    background: var(--gold-glow);
    border-radius: var(--radius-icon);
    display: flex; align-items: center; justify-content: center;
    color: var(--gold-primary); font-size: 24px;
    margin-bottom: var(--space-2);
}
.division-modal-eyebrow {
    font-size: var(--text-label); color: var(--gold-primary);
    letter-spacing: 0.08em; text-transform: uppercase; margin-bottom: 6px;
}
.division-modal h3 {
    font-family: var(--font-display); font-size: 26px; font-weight: 600;
    color: var(--text-primary); margin-bottom: var(--space-1);
}
.division-modal-tagline {
    font-style: italic; color: var(--text-secondary); margin-bottom: var(--space-3);
    font-size: var(--text-body-lg);
}
.division-modal-body {
    color: var(--text-secondary); line-height: 1.75; margin-bottom: var(--space-4);
}
.division-modal-section-title {
    font-family: var(--font-display); font-size: 15px; font-weight: 600;
    color: var(--text-primary); text-transform: uppercase; letter-spacing: 0.04em;
    margin-bottom: var(--space-2); padding-bottom: 8px;
    border-bottom: 1px solid var(--border-subtle);
}
.division-modal-list { display: flex; flex-direction: column; gap: var(--space-2); margin-bottom: var(--space-4); }
.division-modal-item { display: flex; gap: var(--space-2); align-items: flex-start; }
.division-modal-item i {
    color: var(--gold-primary); font-size: 15px; margin-top: 4px; flex-shrink: 0;
    width: 18px; text-align: center;
}
.division-modal-item-title { font-weight: 600; color: var(--text-primary); font-size: var(--text-body); margin-bottom: 2px; }
.division-modal-item-desc { font-size: var(--text-small); color: var(--text-secondary); line-height: 1.6; }
.division-modal-note {
    font-size: var(--text-small); color: var(--text-secondary);
    background: var(--gold-glow); border-radius: var(--radius-icon);
    padding: 10px 14px; display: flex; gap: 8px; align-items: flex-start;
}
.division-modal-note i { color: var(--gold-primary); margin-top: 2px; }
</style>

<section class="page-hero">
    <div class="container">
        <div class="eyebrow reveal">CJ Global Express Group</div>
        <h1 class="reveal reveal-delay-1">Nine Pillars of <em class="italic-gold">Growth</em></h1>
        <p style="color:var(--text-secondary);max-width:560px;margin-top:var(--space-2);" class="reveal reveal-delay-2">
            From construction to premium spirits, each CGEG division operates with the same mandate: excellence, integrity, and lasting impact.
        </p>
    </div>
</section>

<section class="section">
    <div class="container">
        <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:var(--space-2);">
            @foreach($divisions as $slug => $division)
            <a href="{{ route('division', $slug) }}" class="card card-division card-division-media reveal" style="transition-delay:{{ $loop->index * 60 }}ms; text-decoration:none; position:relative;">
                <button type="button" onclick="event.preventDefault();event.stopPropagation();openDivisionModal('{{ $slug }}')"
                        aria-label="Quick preview: {{ $division['name'] }}"
                        style="position:absolute;top:14px;right:14px;width:32px;height:32px;border-radius:50%;background:rgba(20,16,10,0.55);color:#F1EBDF;border:none;display:flex;align-items:center;justify-content:center;cursor:pointer;font-size:13px;z-index:2;">
                    <i class="fa-solid fa-eye" aria-hidden="true"></i>
                </button>
                <div class="card-division-img">
                    <img src="{{ $division['overview_img'] }}" alt="{{ $division['name'] }}" loading="lazy">
                </div>
                <div class="card-division-body">
                    <div class="card-icon"><i class="{{ $division['icon'] }}"></i></div>
                    <div class="card-title">{{ $division['name'] }}</div>
                    <div class="card-desc">{{ Str::limit($division['description'], 100) }}</div>
                    <div class="card-link">View Division Page <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

{{-- ── DIVISION DETAIL MODALS ── --}}
<div class="division-modal-overlay" id="division-modal-overlay" onclick="if(event.target===this) closeDivisionModal()">
    @foreach($divisions as $slug => $division)
    <div class="division-modal" id="modal-{{ $slug }}" style="display:none;">
        <button class="division-modal-close" onclick="closeDivisionModal()" aria-label="Close">
            <i class="fa-solid fa-xmark" aria-hidden="true"></i>
        </button>
        <div class="division-modal-icon"><i class="{{ $division['icon'] }}"></i></div>
        <div class="division-modal-eyebrow">CGEG Division</div>
        <h3>{{ $division['name'] }}</h3>
        <div class="division-modal-tagline">{{ $division['tagline'] }}</div>
        <div class="division-modal-body">{{ $division['body'] }}</div>

        @if(!empty($division['highlights']))
        <div class="division-modal-section-title">Highlights</div>
        <div class="division-modal-list">
            @foreach($division['highlights'] as $highlight)
            <div class="division-modal-item">
                <i class="{{ $highlight['icon'] }}" aria-hidden="true"></i>
                <div>
                    <div class="division-modal-item-title">{{ $highlight['title'] }}</div>
                    <div class="division-modal-item-desc">{{ $highlight['desc'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        @if(!empty($division['services']))
        <div class="division-modal-section-title">What This Division Does</div>
        <div class="division-modal-list">
            @foreach($division['services'] as $service)
            <div class="division-modal-item">
                <i class="{{ $service['icon'] }}" aria-hidden="true"></i>
                <div>
                    <div class="division-modal-item-title">{{ $service['title'] }}</div>
                    <div class="division-modal-item-desc">{{ $service['desc'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        <a href="{{ route('division', $slug) }}" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:var(--space-1);">
            View Full {{ $division['name'] }} Page <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
        </a>
    </div>
    @endforeach
</div>

<script>
function openDivisionModal(slug) {
    document.querySelectorAll('.division-modal').forEach(function(m) { m.style.display = 'none'; });
    var modal = document.getElementById('modal-' + slug);
    if (modal) { modal.style.display = 'block'; }
    document.getElementById('division-modal-overlay').classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closeDivisionModal() {
    document.getElementById('division-modal-overlay').classList.remove('active');
    document.body.style.overflow = '';
}
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeDivisionModal();
});
</script>

@endsection
