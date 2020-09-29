
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4>Ingresar o Registrarte</h4>
            <form class="aa-login-form" action="{{route('checklogin')}}" method="POST" id="form-login">
                @csrf
                <label for="">Correo electronico<span>*</span></label>
                <input type="text" placeholder="Correo" name="email" class="login-correo" required >
                <small class="login-correo"></small>
                <label for="">Contraseña<span>*</span></label>
                <input type="password" placeholder="Contraseña" name="pass" required class="login-contrasena" minlength="8" title="Minimo 8 caracteres">
                <small class="login-contrasena"></small>
                <button class="aa-browse-btn" type="submit">Iniciar</button>
                <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme" > Recuerdame </label>
                <p class="aa-lost-password"><a href="#">¿Olvidaste tu contraseña?</a></p>
                <div class="aa-register-now">
                    ¿No tienes cuenta?<a href="{{route('register')}}">¡Regiastrate Ahora!</a>
                </div>
            </form>
<style>
    .error{
        border: 1px solid red;
    }
    .sucsess{
        border: 1px solid green;
    }
</style>
