<div class="max-w-md mx-auto">
  <h1 class="text-2xl font-bold mb-4">Busca CEP</h1>

  <form>
    <div class="mb-4">
      <label for="cep" class="block text-sm font-medium text-gray-600">CEP</label>
      <input wire:model.lazy="zipcode" type="text" id="cep" name="cep" class="mt-1 p-2 border w-full rounded-md">
      @error('zipcode') <span class="text-red-500 bg-red-100">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
      <label for="logradouro" class="block text-sm font-medium text-gray-600">Logradouro</label>
      <input wire:model="logradouro" type="text" id="logradouro" name="logradouro" class="mt-1 p-2 border w-full rounded-md">
      @error('logradouro') <span class="text-red-500 bg-red-100">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
      <label for="bairro" class="block text-sm font-medium text-gray-600">Bairro</label>
      <input wire:model="bairro" type="text" id="bairro" name="bairro" class="mt-1 p-2 border w-full rounded-md">
      @error('bairro') <span class="text-red-500 bg-red-100">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
      <label for="localidade" class="block text-sm font-medium text-gray-600">Localidade</label>
      <input wire:model="localidade" type="text" id="localidade" name="localidade" class="mt-1 p-2 border w-full rounded-md">
      @error('localidade') <span class="text-red-500 bg-red-100">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
      <label for="uf" class="block text-sm font-medium text-gray-600">UF</label>
      <input wire:model="uf" type="text" id="uf" name="uf" class="mt-1 p-2 border w-full rounded-md">
      @error('uf') <span class="text-red-500 bg-red-100">{{ $message }}</span> @enderror
    </div>

    <button type="button" class="bg-blue-500 text-white p-2 rounded-md" wire:click='save'>Salvar</button>
  </form>
</div>

