<div class="quote-section"><div class="quote-grid">
  <div><div style="margin-bottom:32px"><div class="accent-line left"></div><h2 class="sh light">GET YOUR FREE QUOTE</h2><p class="sh-sub light">We'll call back within 2 hours. For emergencies, call us directly.</p></div>
    <form action="{{ route('quote.submit') }}" method="POST" enctype="multipart/form-data" class="form-fields">
      @csrf
      <div class="field-row"><div class="field"><label>Full Name *</label><input type="text" name="name" placeholder="Jane Smith" required/></div><div class="field"><label>Phone Number *</label><input type="tel" name="phone" placeholder="(713) 555-1234" required/></div></div>
      <div class="field-row"><div class="field"><label>Email *</label><input type="email" name="email" placeholder="jane@example.com" required/></div><div class="field"><label>Service Type *</label><select name="service_type" required><option value="Electrical" {{ isset($serviceType) && $serviceType == 'Electrical' ? 'selected' : '' }}>Electrical</option><option value="Plumbing" {{ isset($serviceType) && $serviceType == 'Plumbing' ? 'selected' : '' }}>Plumbing</option><option value="Roofing" {{ isset($serviceType) && $serviceType == 'Roofing' ? 'selected' : '' }}>Roofing</option></select></div></div>
      <div class="field"><label>Describe Your Issue *</label><textarea name="description" rows="4" placeholder="Example: My breaker keeps tripping when I run the AC and microwave at the same time..." required></textarea></div>
      <div class="field-row"><div class="field"><label>Property Address *</label><input type="text" name="address" placeholder="123 Main St, Houston, TX" required/></div><div class="field"><label>ZIP Code *</label><input type="text" name="zip" placeholder="77001" maxlength="5" required/></div></div>
      <div class="field"><label>Preferred Callback Time</label><div class="callback-options"><div class="callback-opt selected"><span class="callback-opt-label">Morning</span><span class="callback-opt-sub">7AM – 12PM</span></div><div class="callback-opt"><span class="callback-opt-label">Afternoon</span><span class="callback-opt-sub">12PM – 5PM</span></div><div class="callback-opt"><span class="callback-opt-label">Evening</span><span class="callback-opt-sub">5PM – 7PM</span></div></div></div>
      <div class="field">
        <label>Photos of the Issue <span style="color:#666;font-weight:400;text-transform:none;letter-spacing:0;font-size:10px">(Optional — photos & videos help us prepare)</span></label>
        <div class="upload-zone" onclick="this.querySelector('input').click()">
          <input type="file" name="photos[]" accept="image/*,video/*" multiple style="display:none" onchange="handleUpload(event,this)"/>
          <div class="upload-idle">
            <div style="display:flex;gap:12px;justify-content:center;margin:0 auto 12px">
              <div class="upload-icon-wrap" style="margin:0">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgba(232,98,42,.7)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
              </div>
              <div class="upload-icon-wrap" style="margin:0">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="rgba(232,98,42,.7)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg>
              </div>
            </div>
            <p style="font-family:'Oswald',sans-serif;font-weight:600;text-transform:uppercase;letter-spacing:.06em;color:#ccc;font-size:13px;margin-bottom:4px">Click to upload photos or videos</p>
            <p style="color:#555;font-size:12px">Photos (JPG, PNG, HEIC) or Videos (MP4, MOV) · Up to 5 files · Max 50MB each</p>
          </div>
          <div class="upload-previews" style="display:none"></div>
        </div>
      </div>
      <button type="submit" class="submit-btn">Submit My Request — It's Free <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></button>
    </form>
  </div>
  <div class="trust-panel"><div class="call-box"><div class="call-box-label">Emergency? Don't wait.</div><a href="tel:7130000000" class="call-box-num">📞 (713) 000-0000</a><div class="call-box-sub">We answer 24/7 — including 3AM</div></div><div class="trust-list"><p style="font-family:'Oswald',sans-serif;font-weight:600;text-transform:uppercase;letter-spacing:.06em;color:#fff;font-size:13px;margin-bottom:4px">What you can expect:</p><div class="trust-list-item"><div class="trust-check"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div><div class="trust-list-text">We call back within 2 hours</div></div><div class="trust-list-item"><div class="trust-check"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div><div class="trust-list-text">Licensed professional on every job</div></div><div class="trust-list-item"><div class="trust-check"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div><div class="trust-list-text">Upfront pricing — no surprises</div></div><div class="trust-list-item"><div class="trust-check"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div><div class="trust-list-text">No trip fee within 50 miles of Houston</div></div></div></div>
</div></div>
