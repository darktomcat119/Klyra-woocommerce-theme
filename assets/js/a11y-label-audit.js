// #region agent log
(() => {
  try {
    const labels = Array.from(document.querySelectorAll('label[for]'));
    const mismatches = [];

    for (const label of labels) {
      const forId = (label.getAttribute('for') || '').trim();
      if (!forId) continue;
      const target = document.getElementById(forId);
      if (target) continue;

      const form = label.closest('form');
      const labelText = (label.textContent || '').trim().slice(0, 80);
      mismatches.push({
        for: forId,
        labelText,
        labelClass: (label.getAttribute('class') || '').slice(0, 120),
        formClass: form ? (form.getAttribute('class') || '').slice(0, 120) : '',
        formId: form ? (form.getAttribute('id') || '').slice(0, 120) : '',
      });
      if (mismatches.length >= 10) break;
    }

    const payload = {
      sessionId: 'debug-session',
      runId: 'a11y-pre',
      hypothesisId: 'A11Y1',
      location: 'assets/js/a11y-label-audit.js',
      message: 'label[for] audit',
      data: {
        totalLabels: labels.length,
        mismatchCount: mismatches.length,
        mismatches,
        path: location.pathname,
      },
      timestamp: Date.now(),
    };

    // Use a "simple request" + no-cors to avoid CORS/preflight blocking in browsers.
    fetch('http://127.0.0.1:7242/ingest/abb7cd56-8175-400a-8613-c9a72c826faa', {
      method: 'POST',
      mode: 'no-cors',
      headers: { 'Content-Type': 'text/plain' },
      body: JSON.stringify(payload),
    }).catch(() => {});
  } catch (e) {
    const payload = {
      sessionId: 'debug-session',
      runId: 'a11y-pre',
      hypothesisId: 'A11Y2',
      location: 'assets/js/a11y-label-audit.js',
      message: 'label[for] audit exception',
      data: { name: e && e.name, message: e && String(e.message || e).slice(0, 200) },
      timestamp: Date.now(),
    };
    fetch('http://127.0.0.1:7242/ingest/abb7cd56-8175-400a-8613-c9a72c826faa', {
      method: 'POST',
      mode: 'no-cors',
      headers: { 'Content-Type': 'text/plain' },
      body: JSON.stringify(payload),
    }).catch(() => {});
  }
})();
// #endregion


