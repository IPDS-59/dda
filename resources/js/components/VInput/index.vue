<script setup>
import { string, bool, nullable, oneOfType, oneOf } from 'vue-types';
import { TransitionRoot } from '@headlessui/vue';
import { ref, onBeforeMount } from 'vue';



const props = defineProps({
    id: string().def(''),
    name: string().isRequired,
    label: string().isRequired,
    disabled: bool().def(false),
    modelValue: oneOfType([string(), nullable()]).def(null),
    type: string().def('text'),
    obscure: bool().def(false),
    showPrefix: bool().def(false),
    showSuffix: bool().def(false),
    placeholder: oneOfType([string(), nullable()]).def(null),
    isLabelOutside: bool().def(true),
    inactiveBorderColor: string().def('gray-100'),
    focusBorderColor: string().def('purple-200'),
    fillColor: string().def('bg-transparent'),
    isFilled: bool().def(false),
    roundedScale: oneOf(['3xl', '2xl', 'xl', 'md', 'sm']).def('xl'),
    shadowScale: oneOf(['3xl', '2xl', 'xl', 'md', 'sm']).def('xl'),
    errorMsg: oneOfType([string(), nullable()]).def(null),
});

const activeBorderColor = ref('border-gray-300');

onBeforeMount(() => {
    var colors = props.fillColor.split('-');
    if (colors.length > 2) {
        activeBorderColor.value = `border-${colors[1]}-${colors[2]}`;
    }
})

const emit = defineEmits(['update:modelValue']);
const updateValue = (event) => {
    emit('update:modelValue', event.target.value);
}

</script>

<template>
    <div class="relative mt-1 ">
        <div v-if="showPrefix" class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
            <slot name="prefix" />
        </div>
        <label v-if="isLabelOutside" class="mb-16 text-sm font-medium" :for="id">{{ label }}</label>
        <input :id="id" :type="obscure ? 'password' : type" :name="name" :class="[
            { 'pl-7': showPrefix },
            { 'pr-12': showSuffix },
            !disabled ? activeBorderColor : `border-${inactiveBorderColor}`,
            { 'bg-gray-100': disabled },
            `focus:border-${focusBorderColor} focus:ring-${focusBorderColor}`,
            `rounded-${roundedScale}`,
            isFilled ? fillColor : '',
            { 'border-red-300 focus:border-red-500 focus:ring-red-500 bg-red-50': errorMsg != null },
        ]" class="block border-purple-100 w-full px-4 py-2" :placeholder="placeholder == null ? label : placeholder"
            :disabled="disabled" :value="modelValue" @input="updateValue" />
        <div v-if="showSuffix" class="absolute inset-y-0 right-0 flex items-center">
            <slot name="suffix" />
        </div>
        <TransitionRoot :show="errorMsg != null" enter="transition ease-in-out duration-700 transform"
            enter-from="-translate-y-full" enter-to="translate-y-0"
            leave="transition ease-in-out duration-300 transform" leave-from="translate-y-0"
            leave-to="-translate-y-full">
            <div class="text-red-500 mt-2 text-xs ml-2">
                {{ errorMsg }}
            </div>
        </TransitionRoot>
    </div>
</template>