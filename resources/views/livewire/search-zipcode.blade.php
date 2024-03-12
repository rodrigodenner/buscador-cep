<div class="max-w-md mx-auto">
  <h1 class="text-2xl font-bold mb-4">Busca CEP</h1>

  <form>
      <div class="mb-4">
          <label for="cep" class="block text-sm font-medium text-gray-600">CEP</label>
          <input wire:model.lazy="zipcode" type="text" id="cep" name="cep" class="mt-1 p-2 border w-full rounded-md">
      </div>

      <div class="mb-4">
          <label for="logradouro" class="block text-sm font-medium text-gray-600">Logradouro</label>
          <input wire:model="logradouro" type="text" id="logradouro" name="logradouro" class="mt-1 p-2 border w-full rounded-md">
      </div>

      <div class="mb-4">
          <label for="complemento" class="block text-sm font-medium text-gray-600">Complemento</label>
          <input wire:model="complemento" type="text" id="complemento" name="complemento" class="mt-1 p-2 border w-full rounded-md">
      </div>

      <div class="mb-4">
          <label for="bairro" class="block text-sm font-medium text-gray-600">Bairro</label>
          <input wire:model="bairro" type="text" id="bairro" name="bairro" class="mt-1 p-2 border w-full rounded-md">
      </div>

      <div class="mb-4">
          <label for="localidade" class="block text-sm font-medium text-gray-600">Localidade</label>
          <input wire:model="localidade" type="text" id="localidade" name="localidade" class="mt-1 p-2 border w-full rounded-md">
      </div>

      <div class="mb-4">
          <label for="uf" class="block text-sm font-medium text-gray-600">UF</label>
          <input wire:model="uf" type="text" id="uf" name="uf" class="mt-1 p-2 border w-full rounded-md">
      </div>

      <button type="buttom" class="bg-blue-500 text-white p-2 rounded-md">Salvar</button>
  </form>
</div>
