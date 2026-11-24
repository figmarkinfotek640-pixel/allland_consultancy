@if(session('success'))
<div class="flash-alert flash-alert-success" style="background:#10B981;color:#FFFFFF;padding:14px 20px;margin-bottom:24px;border-radius:12px;display:flex;align-items:center;justify-content:space-between;gap:16px;box-shadow:0 4px 14px rgba(16,185,129,0.25);font-size:14px;font-weight:700;">
  <div style="display:flex;align-items:center;gap:10px;">
    <span style="display:inline-flex;align-items:center;justify-content:center;width:22px;height:22px;background:rgba(255,255,255,0.22);border-radius:50%;font-size:13px;flex-shrink:0;">✓</span>
    <span>{{ session('success') }}</span>
  </div>
  <button type="button" onclick="this.closest('.flash-alert').style.display='none'" aria-label="Close notification" style="background:transparent;border:none;color:#FFFFFF;font-size:22px;line-height:1;cursor:pointer;opacity:0.85;padding:0 4px;transition:opacity 0.2s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.85'">&times;</button>
</div>
@endif

@if(session('error'))
<div class="flash-alert flash-alert-error" style="background:#EF4444;color:#FFFFFF;padding:14px 20px;margin-bottom:24px;border-radius:12px;display:flex;align-items:center;justify-content:space-between;gap:16px;box-shadow:0 4px 14px rgba(239,68,68,0.25);font-size:14px;font-weight:700;">
  <div style="display:flex;align-items:center;gap:10px;">
    <span style="display:inline-flex;align-items:center;justify-content:center;width:22px;height:22px;background:rgba(255,255,255,0.22);border-radius:50%;font-size:13px;flex-shrink:0;">⚠</span>
    <span>{{ session('error') }}</span>
  </div>
  <button type="button" onclick="this.closest('.flash-alert').style.display='none'" aria-label="Close notification" style="background:transparent;border:none;color:#FFFFFF;font-size:22px;line-height:1;cursor:pointer;opacity:0.85;padding:0 4px;transition:opacity 0.2s;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.85'">&times;</button>
</div>
@endif

@if($errors->any())
<div class="flash-alert flash-alert-error" style="background:#EF4444;color:#FFFFFF;padding:14px 20px;margin-bottom:24px;border-radius:12px;box-shadow:0 4px 14px rgba(239,68,68,0.25);font-size:13.5px;font-weight:600;">
  <div style="display:flex;align-items:center;justify-content:space-between;gap:16px;margin-bottom:6px;">
    <div style="font-weight:800;display:flex;align-items:center;gap:8px;">
      <span>⚠</span> Please fix the following errors:
    </div>
    <button type="button" onclick="this.closest('.flash-alert').style.display='none'" aria-label="Close notification" style="background:transparent;border:none;color:#FFFFFF;font-size:22px;line-height:1;cursor:pointer;opacity:0.85;padding:0 4px;" onmouseover="this.style.opacity='1'" onmouseout="this.style.opacity='0.85'">&times;</button>
  </div>
  <ul style="margin:0;padding-left:24px;">
    @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<script>
  setTimeout(function() {
    var alerts = document.querySelectorAll('.flash-alert');
    alerts.forEach(function(el) {
      el.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
      el.style.opacity = '0';
      el.style.transform = 'translateY(-6px)';
      setTimeout(function() { el.style.display = 'none'; }, 400);
    });
  }, 5000);
</script>

