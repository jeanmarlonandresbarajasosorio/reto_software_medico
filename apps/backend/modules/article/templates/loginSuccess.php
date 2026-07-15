<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card shadow">
        <div class="card-body">
          <h3 class="text-center mb-4">Iniciar Sesión</h3>
          
          <div class="d-grid gap-2">
            <button id="google-login-btn" class="btn btn-outline-primary">
              <img src="https://upload.wikimedia.org/wikipedia/commons/c/c1/Google_%22G%22_logo.svg" width="20" class="me-2">
              Ingresar con Google
            </button>
          </div>
          
          <hr>
          
          <form action="<?php echo url_for('article/login') ?>" method="POST">
            <div class="mb-3">
              <label class="form-label">Correo</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Contraseña</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Entrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>