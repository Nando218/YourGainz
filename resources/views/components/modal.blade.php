@props([
    'name',
    'show' => false,
    'maxWidth' => '2xl'
])

@php
    $maxWidth = [
        'sm' => 'sm:max-w-sm',
        'md' => 'sm:max-w-md',
        'lg' => 'sm:max-w-lg',
        'xl' => 'sm:max-w-xl',
        '2xl' => 'sm:max-w-2xl',
    ][$maxWidth];
@endphp

<div
    x-data="{
        show: @js($show),
        focusables() {
            let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])';
            return [...$el.querySelectorAll(selector)].filter(el => !el.hasAttribute('disabled'));
        },
        firstFocusable() { return this.focusables()[0]; },
        lastFocusable() { return this.focusables().slice(-1)[0]; },
        nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable(); },
        prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable(); },
        nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1); },
        prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) - 1; },
    }"
    x-init="$watch('show', value => {
        document.body.classList.toggle('overflow-y-hidden', value);
        if (value) { setTimeout(() => firstFocusable()?.focus(), 100); }
    })"
    x-on:open-modal.window="show = $event.detail === '{{ $name }}'"
    x-on:close-modal.window="show = $event.detail === '{{ $name }}' ? false : show"
    x-on:keydown.escape.window="show = false"
    x-on:keydown.tab.prevent="$event.shiftKey ? prevFocusable().focus() : nextFocusable().focus()"
    x-show="show"
    class="fixed inset-0 z-50 flex items-center justify-center px-4 sm:px-0 bg-black"
>
    <div class="fixed inset-0 bg-gray-500  bg-gray-900 opacity-75"
        x-show="show" x-on:click="show = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0">
    </div>

    <div
        x-show="show"
        class="relative bg-white  bg-gray-800 rounded-lg shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto p-6"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
    >
        <div class="flex justify-between items-center border-b pb-3 mb-3">
            <h2 class="text-lg font-semibold text-gray-900  text-white">Confirmar eliminación</h2>
            <button x-on:click="show = false" class="text-gray-500 hover:text-gray-700  hover:text-gray-300">
                &times;
            </button>
        </div>
        <div class="text-gray-600  text-gray-300 mb-4">
            ¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700  text-gray-300">Introduce tu contraseña</label>
            <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300  border-gray-600 rounded-lg shadow-sm focus:ring-red-500 focus:border-red-500  bg-gray-700  text-white" placeholder="Tu contraseña" required>
        </div>
        <div class="flex justify-end space-x-2">
            <button x-on:click="show = false" class="px-4 py-2 bg-gray-200  bg-gray-700 text-gray-700  text-white rounded-lg hover:bg-gray-300  hover:bg-gray-600 transition">Cancelar</button>
            <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">Eliminar</button>
        </div>
    </div>
</div>
