export async function fetchDbAction(config) {
  const {
    endpoint, // your PHP API endpoint
    action, // "select", "insert", "update", "delete", "count"
    table,
    data = {},
    whereClause = '',
    whereParams = [],
    selectColumns = '*',
    options = {},
    method = 'POST',
    triggerElement = null, // optional button/spinner/etc.
    loadingElements = {},
    messages = {
      loading: 'Processing...',
      success: 'Success!',
      error: 'An error occurred'
    },
    beforeSend = () => true,
    transformPayload = (p) => p,
    validateResponse = async (res) => {
      if (!res.ok) throw new Error(`HTTP ${res.status}`);
      return res;
    },
    onSuccess = () => {},
    onError = () => {}
  } = config;

  const btn = triggerElement ? document.querySelector(triggerElement) : null;
  const spinner = loadingElements.spinner ? document.querySelector(loadingElements.spinner) : null;
  const submitText = loadingElements.submitText ? document.querySelector(loadingElements.submitText) : null;

  const originalHtml = btn?.innerHTML;
  const originalDisabled = btn?.disabled;

  try {
    if (!beforeSend()) return;

    // Loading state
    if (btn) btn.disabled = true;
    if (submitText) submitText.textContent = messages.loading;
    if (spinner) spinner.classList.remove('d-none');

    // Payload matches dbAction params exactly
    let payload = {
      action,
      table,
      data,
      whereClause,
      whereParams,
      selectColumns,
      options
    };

    payload = transformPayload(payload);

    const res = await fetch(endpoint, {
      method,
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(payload)
    });

    const validRes = await validateResponse(res);
    const contentType = validRes.headers.get('content-type') || '';
    const result = contentType.includes('application/json')
      ? await validRes.json()
      : await validRes.text();

    onSuccess(result);
    if (submitText) submitText.textContent = messages.success;

    return result;
  } catch (err) {
    onError(err);
    if (submitText) submitText.textContent = messages.error;
    throw err;
  } finally {
    if (btn) btn.disabled = originalDisabled;
    if (spinner) spinner.classList.add('d-none');
    if (btn && originalHtml) btn.innerHTML = originalHtml;
  }
}
