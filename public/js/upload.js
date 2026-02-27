
// ── Media Upload Handler (Photos + Videos) ──
function isVideoFile(file) {
  return file.type.startsWith('video/');
}

function buildMediaThumb(file, i) {
  var thumb = document.createElement('div');
  thumb.className = 'upload-thumb';
  var removeBtn = '<button class="remove-btn" type="button" onclick="removeMedia(this,' + i + ')">&#x2715;</button>';

  if (isVideoFile(file)) {
    var shortName = file.name.length > 13 ? file.name.substring(0, 11) + '&hellip;' : file.name;
    var sizeMB = (file.size / 1024 / 1024).toFixed(1);
    thumb.innerHTML =
      '<div style="width:100%;height:100%;background:rgba(7,26,48,.95);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:3px;padding:6px">' +
      '<svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--orange)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="10 8 16 12 10 16 10 8" fill="var(--orange)" stroke="none"/><circle cx="12" cy="12" r="10"/></svg>' +
      '<span style="font-size:9px;color:#aaa;text-align:center;line-height:1.2;word-break:break-all">' + shortName + '</span>' +
      '<span style="font-size:9px;color:#555">' + sizeMB + 'MB</span>' +
      '</div>' + removeBtn;
  } else {
    thumb.innerHTML =
      '<div style="width:100%;height:100%;background:#0d1f33;display:flex;align-items:center;justify-content:center"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg></div>' + removeBtn;
    var reader = new FileReader();
    reader.onload = function(e) {
      var imgEl = thumb.querySelector('div');
      if (imgEl) imgEl.outerHTML = '<img src="' + e.target.result + '" alt="preview" style="width:100%;height:100%;object-fit:cover"/>';
    };
    reader.readAsDataURL(file);
  }
  return thumb;
}

function renderMediaPreviews(zone) {
  var combined = zone._files || [];
  var input = zone.querySelector('input[type=file]');
  var idleEl = zone.querySelector('.upload-idle');
  var previewEl = zone.querySelector('.upload-previews');

  idleEl.style.display = 'none';
  previewEl.style.display = 'flex';
  previewEl.style.flexWrap = 'wrap';
  previewEl.style.gap = '10px';
  zone.classList.add('has-files');
  previewEl.innerHTML = '';

  combined.forEach(function(file, i) {
    previewEl.appendChild(buildMediaThumb(file, i));
  });

  if (combined.length < 5) {
    var addMore = document.createElement('div');
    addMore.className = 'upload-add-more';
    addMore.innerHTML =
      '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>' +
      '<span>Add</span>';
    addMore.onclick = function(e) { e.stopPropagation(); input.click(); };
    previewEl.appendChild(addMore);
  }

  var photos = combined.filter(function(f){ return !isVideoFile(f); }).length;
  var videos = combined.filter(function(f){ return isVideoFile(f); }).length;
  var parts = [];
  if (photos) parts.push(photos + ' photo' + (photos !== 1 ? 's' : ''));
  if (videos) parts.push(videos + ' video' + (videos !== 1 ? 's' : ''));
  var countEl = document.createElement('div');
  countEl.className = 'upload-count';
  countEl.textContent = parts.join(' + ') + ' added (' + combined.length + '/5)';
  previewEl.appendChild(countEl);
}

function handleUpload(event, input) {
  var newFiles = Array.from(event.target.files);
  if (!newFiles.length) return;
  var zone = input.closest('.upload-zone');
  if (!zone._files) zone._files = [];
  zone._files = zone._files.concat(newFiles).slice(0, 5);
  renderMediaPreviews(zone);
  // Reset input so same file can be re-selected after removal
  input.value = '';
}

function removeMedia(btn, idx) {
  var zone = btn.closest('.upload-zone');
  if (!zone._files) return;
  zone._files.splice(idx, 1);
  if (zone._files.length === 0) {
    zone.classList.remove('has-files');
    zone.querySelector('.upload-idle').style.display = '';
    var previewEl = zone.querySelector('.upload-previews');
    previewEl.style.display = 'none';
    previewEl.innerHTML = '';
  } else {
    renderMediaPreviews(zone);
  }
}

