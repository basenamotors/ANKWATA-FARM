document.addEventListener('DOMContentLoaded', function () {
  // Populate country dropdown on page load
  populateCountryDropdown();

  // Input value fetcher
  function getValue(id) {
    const el = document.getElementById(id);
    return el ? el.value.trim() : '';
  }

  // Register button click event
  const regBtn = document.getElementById('registerBtn');
  if (regBtn) {
    regBtn.addEventListener('click', function () {
      regBtn.disabled = true;
      regBtn.textContent = 'Registering...';
      registerUser();
    });
  }

  // Login button click event
  const loginBtn = document.getElementById('loginBtn');
  if (loginBtn) {
    loginBtn.addEventListener('click', function () {
      loginBtn.disabled = true;
      loginBtn.textContent = 'Logging in...';
      loginUser();
    });
  }

  // Validate email format (optional)
  function isValidEmail(email) {
    return /\S+@\S+\.\S+/.test(email);
  }

  // Display alert messages
  function showMessage(elementId, message, success = false) {
    const el = document.getElementById(elementId);
    el.className = 'alert mt-2 ' + (success ? 'alert-success' : 'alert-danger');
    el.textContent = message;
  }

  // Populate country dropdown
  function populateCountryDropdown() {
    $.ajax({
      url: 'back_end_functions/getCountries.php',
      type: 'GET',
      dataType: 'json',
      success: function (data) {
        $('#regCountry').empty().append('<option selected disabled>Choose country</option>');
        data.forEach(function (country) {
          $('#regCountry').append(
            `<option value="${country.country_id}">${country.country_name}</option>`
          );
        });
      },
      error: function (xhr, status, error) {
        console.error("Error fetching countries:", error);
      }
    });
  }

  // Login user
  function loginUser() {
      const phone = getValue('loginPhone');
      const password = getValue('loginPassword');

      const msgEl = document.getElementById('loginMsg');
      msgEl.className = ''; // reset class

      if (!phone || !password) {
          showMessage('loginMsg', 'Phone and password are required.');
          resetLoginBtn();
          return;
      }

      $.ajax({
          url: 'back_end_functions/loginUser.php',
          type: 'POST',
          data: { phone, password },
          dataType: 'json',
          success: function (response) {
              showMessage('loginMsg', response.message, response.success);

              if (response.success) {
                  // Store tokens if needed (for API calls)
                  if (response.auth_token) {
                      localStorage.setItem('auth_token', response.auth_token);
                  }
                  
                  // Redirect after short delay to ensure session is set
                  setTimeout(() => {
                      window.location.href = 'index.php';
                  }, 500);
              } else {
                  resetLoginBtn();
              }
          },
          error: function (xhr) {
              const errorMsg = xhr.responseJSON?.message || 'Login failed. Try again.';
              showMessage('loginMsg', errorMsg);
              resetLoginBtn();
          }
      });
  }

  function resetLoginBtn() {
    const loginBtn = document.getElementById('loginBtn');
    if (loginBtn) {
      loginBtn.disabled = false;
      loginBtn.textContent = 'Login';
    }
  }

  // Register user
  function registerUser() {
    const name = getValue('regName');
    const phone = getValue('regPhone');
    const email = getValue('regEmail');
    const country = getValue('regCountry');
    const password = getValue('regPassword');
    const referralCode = getValue('referralInput');

    const msgBox = document.getElementById('regMsg');
    msgBox.className = ''; // reset class

    // Validate required fields
    if (!name || !phone || !country || !password) {
      showMessage('regMsg', 'Please fill in all required fields.');
      resetRegisterBtn();
      return;
    }

    if (email && !isValidEmail(email)) {
      showMessage('regMsg', 'Please enter a valid email address.');
      resetRegisterBtn();
      return;
    }

    $.ajax({
      url: 'back_end_functions/registerUser.php',
      type: 'POST',
      data: {
        full_name: name,
        phone: phone,
        email: email,
        country: country,
        password: password,
        referral_code_input: referralCode
      },
      dataType: 'json',
      success: function (response) {
        showMessage('regMsg', response.message, response.success);

        if (response.success) {
          ['regName', 'regPhone', 'regEmail', 'regPassword', 'referralInput'].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.value = '';
          });

          $('#regCountry').val('');
          $('#regCountry').find('option:first').prop('selected', true);

          setTimeout(() => window.location.href = 'index.php', 1500);
        } else {
          resetRegisterBtn();
        }
      },
      error: function (xhr, status, error) {
        const errorMessage = xhr.responseText || 'An error occurred. Try again.';
        showMessage('regMsg', errorMessage);
        resetRegisterBtn();
      }
    });
  }

  function resetRegisterBtn() {
    const regBtn = document.getElementById('registerBtn');
    if (regBtn) {
      regBtn.disabled = false;
      regBtn.textContent = 'Register';
    }
  }

});
