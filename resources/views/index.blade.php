<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Categoria uno">Categoria uno</option>
                <option value="Categoria dos">Categoria dos</option>
                <option value="Categoria tres">Categoria tres</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filtro uno">Filtro uno</option>
                <option value="Filtro dos">Filtro dos</option>
                <option value="Filtro tres">Filtro tres</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="seach" placeholder="Buscar idea" class="w-full rounded-xl bg-white border-none placeholder-gray-900 px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
    </div>{{-- fin filters --}}
</x-app-layout>
