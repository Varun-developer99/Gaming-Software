<div class="auth-wrap gamer">
    <div class="auth-card">
        <div class="auth-left">
            <div class="auth-header">
                <h4 class="glitch-title"><span data-text="Register">Register</span></h4>
                <p class="subtitle">Create your player profile</p>
            </div>

            <form action="{{ route('register') }}" method="POST" class="form-login form-has-password">
                @csrf
                <div class="row">
                    <div class="field col-md-6">
                        <label class="label">Player Name</label>
                        <input type="text" placeholder="Enter your name*" name="name" required>
                    </div>

                    <div class="field col-md-6">
                        <label class="label">Email</label>
                        <input type="email" placeholder="Email address*" name="email" required>
                    </div>

                    <div class="field col-md-6">
                        <label class="label">Phone Number</label>
                        <input type="tel" placeholder="e.g. +91 98765 43210" name="phone" inputmode="tel" pattern="^[0-9+()\-\s]{7,20}$">
                    </div>

                    <div class="field password-item">
                        <label class="label">Password</label>
                        <div class="password-group">
                            <input class="input-password" type="password" placeholder="Password*" name="password" required>
                            <button type="button" class="toggle-password" aria-label="Toggle Password">
                            <i class="icon-eye-hide-line"></i>
                            </button>
                        </div>
                        <div class="hint">Use 8+ chars, 1 number, 1 symbol</div>
                    </div>

                    <div class="field password-item">
                        <label class="label">Confirm Password</label>
                        <div class="password-group">
                            <input class="input-password" type="password" placeholder="Confirm Password*" name="password_confirmation" required>
                            <button type="button" class="toggle-password" aria-label="Toggle Password">
                            <i class="icon-eye-hide-line"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="field-wrap">
                    <div class="agree-row">
                    <label class="checkbox">
                        <input checked type="checkbox" id="login-form_agree" name="agree_checkbox">
                        <span class="checkmark"></span>
                        I agree to the
                    </label>
                    <a href="term-of-use.html" class="link">Terms of Use</a>
                    </div>
                </div>

                <div class="actions two-col">
                    <button class="tf-btn btn-fill neon-btn" type="submit">
                    <span class="text text-button">Register</span>
                    </button>
                    <a href="#" class="tf-btn btn-outline neon-outline" onclick="login_modal()">
                    <span class="text text-button">Login</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

   
<style>
:root{
  --bg:#0b0c10;
  --panel:#111318;
  --card:#151822;
  --muted:#8b91a0;
  --text:#e6e8ee;
  --accent:#ff2e63;     /* neon red/pink */
  --accent-2:#08d9d6;   /* cyan */
  --stroke:#242838;
  --shadow: 0 20px 40px rgba(0,0,0,.45);
}
*{box-sizing:border-box}
body{background:var(--bg); color:var(--text); font-family:Inter, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial;}

.auth-wrap.gamer{
  display:flex; justify-content:center; align-items:center;
}
.auth-card{
  width:100%;
  display:grid; 
  background: linear-gradient(180deg, rgba(255,46,99,.04), rgba(8,217,214,.03)), var(--panel);
  border-radius:16px; box-shadow:var(--shadow); overflow:hidden;
}
.auth-left{ padding:32px 28px; background:linear-gradient(145deg, rgba(21,24,34,.9), rgba(17,19,24,.9)); }
.auth-header{ margin-bottom:18px; }
.glitch-title{ font-size:26px; line-height:1.1; margin:0 0 6px 0; letter-spacing:.5px; position:relative; display:inline-block; text-transform:uppercase; }
.glitch-title span{ position:relative; display:inline-block; padding-right:6px; text-shadow:0 0 10px rgba(255,46,99,.6), 0 0 20px rgba(8,217,214,.35); }
.glitch-title span::before, .glitch-title span::after{ content:attr(data-text); position:absolute; left:0; top:0; width:100%; height:100%; }
.glitch-title span::before{ left:1px; color:var(--accent); opacity:.55; clip-path: inset(0 0 45% 0); }
.glitch-title span::after{ left:-1px; color:var(--accent-2); opacity:.55; clip-path: inset(55% 0 0 0); }
.subtitle{ color:var(--muted); font-size:13px; margin:0; }

.field-wrap{ display:grid; gap:14px; margin-top:12px; }
.field{ display:flex; flex-direction:column; gap:8px; }
.label{ font-size:12px; color:var(--muted); text-transform:uppercase; letter-spacing:.1em; }

input[type="text"], input[type="email"], input[type="tel"], input[type="password"]{
  width:100%; padding:12px 14px;
  background:#0f1219; color:var(--text);
  border:1px solid var(--stroke); border-radius:10px;
  outline:none; transition:border .2s, box-shadow .2s, transform .06s ease;
}
input::placeholder{ color:#6d7486; }
input:focus{
  border-color: color-mix(in oklab, var(--accent) 40%, var(--stroke));
  box-shadow: 0 0 0 3px rgba(255,46,99,.15), 0 0 0 6px rgba(8,217,214,.08);
}

.password-item .password-group{ position:relative; display:flex; align-items:center; }
.toggle-password{
  position:absolute; right:8px; top:50%; transform:translateY(-50%);
  background:transparent; border:0; color:#9aa2b1; cursor:pointer; padding:6px; border-radius:8px;
}
.toggle-password:hover{ color:var(--text); background:#171b25; }
.hint{ font-size:11px; color:#7e8494; margin-top:6px; }

.agree-row{ display:flex; align-items:center; gap:10px; margin-top:6px; flex-wrap:wrap; color:var(--muted); }
.checkbox{ display:flex; align-items:center; gap:10px; cursor:pointer; user-select:none; }
.checkbox input{ display:none; }
.checkmark{ width:18px; height:18px; border-radius:4px; background:#0f1219; border:1px solid var(--stroke); display:inline-block; position:relative; }
.checkbox input:checked + .checkmark{
  border-color:var(--accent);
  box-shadow: inset 0 0 0 2px #0f1219, 0 0 10px rgba(255,46,99,.45);
}
.checkbox input:checked + .checkmark::after{
  content:""; position:absolute; left:4px; top:1px; width:8px; height:12px; border:2px solid var(--accent);
  border-top:0; border-left:0; transform:rotate(45deg);
}
.link{ color:var(--accent-2); text-decoration:none; }
.link:hover{ text-decoration:underline; }

.actions{ margin-top:14px; display:flex; gap:12px; }
.actions.two-col .tf-btn{ flex:1; }

.neon-btn{
  width:100%; padding:12px 16px; border-radius:12px; border:1px solid var(--accent);
  background: linear-gradient(180deg, rgba(255,46,99,.18), rgba(255,46,99,.08));
  color:var(--text); cursor:pointer; font-weight:700; letter-spacing:.4px;
  text-transform:uppercase; transition: transform .06s ease, box-shadow .2s, background .2s;
  box-shadow: 0 0 12px rgba(255,46,99,.35), inset 0 0 10px rgba(255,46,99,.15);
}
.neon-btn:hover{ transform: translateY(-1px); box-shadow: 0 0 18px rgba(255,46,99,.55); }
.neon-btn:active{ transform: translateY(0); }

.neon-outline{
  display:inline-block; text-align:center; padding:12px 16px; border-radius:12px;
  border:1px solid var(--accent-2); color:var(--text); text-decoration:none;
  background:linear-gradient(180deg, rgba(8,217,214,.08), rgba(8,217,214,.04));
  box-shadow: 0 0 12px rgba(8,217,214,.25), inset 0 0 10px rgba(8,217,214,.12);
  text-transform:uppercase; font-weight:700; letter-spacing:.4px;
}

.auth-right{
  background:
    radial-gradient(1000px 300px at 120% -10%, rgba(8,217,214,.18), transparent 45%),
    radial-gradient(1000px 300px at -20% 110%, rgba(255,46,99,.18), transparent 45%),
    linear-gradient(145deg, #0f1219 20%, #0b0d13 100%);
  border-left:1px solid var(--stroke);
  padding:32px; display:flex; align-items:center; justify-content:center;
}
.panel{
  width:100%; max-width:360px; background:linear-gradient(180deg, rgba(21,24,34,.6), rgba(11,13,19,.7));
  border:1px solid var(--stroke); border-radius:14px; padding:20px; box-shadow:var(--shadow);
}
.panel-title{ margin:0 0 6px 0; font-size:18px; }
.panel-text{ color:var(--muted); font-size:13px; margin:0 0 14px 0; }

/* responsive */
@media (max-width: 900px){
  .auth-card{ grid-template-columns:1fr; }
  .auth-right{ order:-1; }
}
@media (max-width: 520px){
  .auth-left, .auth-right{ padding:20px; }
  .panel{ padding:16px; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function(){
  document.querySelectorAll('.password-item .toggle-password').forEach(function(btn){
    btn.addEventListener('click', function(){
      const input = this.closest('.password-group').querySelector('input');
      if(!input) return;
      const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
      input.setAttribute('type', type);
      this.innerHTML = type === 'text'
        ? '<i class="icon-eye-line"></i>'
        : '<i class="icon-eye-hide-line"></i>';
    });
  });
});
</script>


<script>
    $(".form-has-password").find(".toggle-password").on("click", function () {
        const $passwordInput = $(this)
        .closest(".password-item")
        .find(".input-password");
        const type =
        $passwordInput.attr("type") === "password" ? "text" : "password";
        $passwordInput.attr("type", type);
        $(this).toggleClass("unshow");
    });
</script>