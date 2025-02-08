<div class="login-page">
    <div class="container">
        <div class="login-form">
            <form action="post">
                <h1>Login Form</h1>
                <div class="field">
                    <img src="<?= BASE_URL ?>/img/icons/person_icon.svg" alt="person_icon">
                    <div class="input-text">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username">
                    </div>
                </div>
                <div class="field">
                    <img src="<?= BASE_URL ?>/img/icons/key_icon.svg" alt="key_icon">
                    <div class="input-text">
                        <label for="password">Password</label>
                        <input type="text" name="password" id="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-footer">
                    <a href="#">Don't have account yet?</a>
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>