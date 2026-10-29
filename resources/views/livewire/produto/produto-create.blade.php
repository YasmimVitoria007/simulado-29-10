<div class="conatiner">
    <nav class="navbar bg-1 fg-2">
        <div class="container">
            <span class=" bi bi-tux navbar-brand mb-0 h1">Pet Shop</span>
        </div>
    </nav>
    <div class="nav-overflow" data-bs-toggle="nav-overflow">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/produto/create">Produtos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Movimentação</a>
            </li>
        </ul>
    </div>
    <div class="card mt-10 ">
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" wire:model="nome">
                    @error('nome')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" class="form-control" id="marca" wire:model="marca">
                    @error('marca')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <input type="text" class="form-control" id="categoria" wire:model="categoria">
                    @error('categoria')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="prc_custo" class="form-label">Preço de custo</label>
                    <input type="number" step="0.01" class="form-control" id="prc_custo" wire:model="prc_custo">
                    @error('prc_custo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="prc_venda" class="form-label">Preço de venda</label>
                    <input type="number" step="0.01" class="form-control" id="prc_venda" wire:model="prc_venda">
                    @error('prc_venda')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="etq_minimo" class="form-label">Quantidade mínima no estoque</label>
                    <input type="number" class="form-control" id="etq_minimo" wire:model="etq_minimo">
                    @error('etq_minimo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="etq_quantidade" class="form-label">Quantidade no estoque</label>
                    <input type="number" class="form-control" id="etq_quantidade" wire:model="etq_quantidade">
                    @error('etq_quantidade')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn-solid theme-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
