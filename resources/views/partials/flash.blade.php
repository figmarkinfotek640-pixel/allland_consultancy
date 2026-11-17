@if(session('success'))
<div style="background:#10B981;color:#FFFFFF;padding:14px 20px;margin:0 auto;text-align:center;font-weight:700;font-size:14px;box-shadow:0 4px 12px rgba(16,185,129,0.3);position:relative;z-index:99999;">
  <div class="wrap" style="display:flex;align-items:center;justify-content:center;gap:12px;">
    <span>✓ {{ session('success') }}</span>
    <button type="button" onclick="this.parentElement.parentElement.style.display='none'" style="background:transparent;border:none;color:#FFFFFF;font-size:18px;cursor:pointer;line-height:1;">&times;</button>
  </div>
</div>
@endif

@if(session('error'))
<div style="background:#EF4444;color:#FFFFFF;padding:14px 20px;margin:0 auto;text-align:center;font-weight:700;font-size:14px;box-shadow:0 4px 12px rgba(239,68,68,0.3);position:relative;z-index:99999;">
  <div class="wrap" style="display:flex;align-items:center;justify-content:center;gap:12px;">
    <span>⚠ {{ session('error') }}</span>
    <button type="button" onclick="this.parentElement.parentElement.style.display='none'" style="background:transparent;border:none;color:#FFFFFF;font-size:18px;cursor:pointer;line-height:1;">&times;</button>
  </div>
</div>
@endif

@if($errors->any())
<div style="background:#EF4444;color:#FFFFFF;padding:14px 20px;margin:0 auto;font-weight:600;font-size:13.5px;box-shadow:0 4px 12px rgba(239,68,68,0.3);position:relative;z-index:99999;">
  <div class="wrap">
    <div style="font-weight:800;margin-bottom:6px;">Please fix the following errors:</div>
    <ul style="margin:0;padding-left:20px;">
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
</div>
@endif

