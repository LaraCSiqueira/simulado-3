<div class="d-flex justify-content-center">
    <div class="card" style="max-width: 550px;">
        <div class="card-body">
            <h2 class="card-title">LOGIN</h2>
            <p class="card-subtitle fg-3">Preencha os seguintes dados entrar no sistema web</p>
            <div class="mt-5">
                @if (session()->has('error'))
                    <div class="alert alert-danger"> {{ session('error') }}</div>
                @endif

                <form wire:submit.prevent='login'>
                    <div class="mb-3">
                        <label for="email" class="form-label">EMAIL</label>
                        <input type="email" class="form-control" wire:model='email' id="email"
                            aria-describedby="email">

                        @error('email')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror

                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">SENHA</label>
                        <input type="password" class="form-control" wire:model='password' id="password">

                        @error('password')
                            <span class="text-danger small"> {{ $message }} </span>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary">ENTRAR</button>

                </form>

            </div>





        </div>
    </div>
</div>
